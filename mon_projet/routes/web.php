<?php

use App\Models\BlogPost;
use App\Models\Customer;
use App\Models\DishCategory;
use App\Models\Event;
use App\Models\Order;
use App\Models\Reservation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Str;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\Storage;

Route::get('/', function () {
    $events = Event::query()
        ->where('is_published', true)
        ->orderBy('starts_at')
        ->take(3)
        ->get();

    return view('index', compact('events'));
})->name('home');

Route::get('/menu', function () {
    $categories = DishCategory::query()
        ->where('is_active', true)
        ->with(['dishes' => fn ($query) => $query->where('is_active', true)->orderBy('sort_order')])
        ->orderBy('sort_order')
        ->get();

    return view('pages.menu', compact('categories'));
})->name('menu');

Route::view('/reservation', 'pages.reservation')->name('reservation');

Route::post('/reservation', function (Request $request) {
    $validated = $request->validate([
        'name' => ['required', 'string', 'max:255'],
        'phone' => ['nullable', 'string', 'max:50'],
        'email' => ['nullable', 'email', 'max:255'],
        'date' => ['nullable', 'string', 'max:50'],
        'time' => ['nullable', 'string', 'max:20'],
        'people' => ['nullable', 'string', 'max:30'],
        'notes' => ['nullable', 'string', 'max:1000'],
    ]);

    $customer = Customer::create([
        'name' => $validated['name'],
        'email' => $validated['email'] ?? null,
        'phone' => $validated['phone'] ?? null,
        'whatsapp' => $validated['phone'] ?? null,
    ]);


   $Reservation =  Reservation::create([
        'customer_id' => $customer->id,
        'reservation_date' => filled($validated['date'] ?? null) ? date('Y-m-d', strtotime($validated['date'])) : null,
        'reservation_time' => $validated['time'] ?? null,
        'people_count' => (int) preg_replace('/\D+/', '', $validated['people'] ?? '1') ?: 1,
        'notes' => $validated['notes'] ?? null,
    ]);


$message = "
🍽 NOUVELLE RESERVATION 

👤 Client : {$customer->name}

📱 WhatsApp : {$customer->whatsapp}

📧 Email : {$customer->email}




━━━━━━━━━━━━━━
date : {$Reservation->date}
heure : {$Reservation ->time }
personnes : {$Reservation->people}

━━━━━━━━━━━━━━

";

Http::post(
    "https://api.ultramsg.com/".env('ULTRAMSG_INSTANCE')."/messages/chat",
    [
        'token' => env('ULTRAMSG_TOKEN'),
        'to' => env('GERANT_WHATSAPP'),
        'body' => $message
    ]
);












    return back()->with('success', 'Votre réservation a bien été enregistrée.');
})->name('reservation.store');

Route::view('/gallery', 'pages.gallery')->name('gallery');
Route::view('/about', 'pages.about')->name('about');

Route::get('/blog', function () {
    $posts = BlogPost::query()
        ->where('is_published', true)
        ->latest('published_at')
        ->get();

    return view('pages.blog', compact('posts'));
})->name('blog');

Route::get('/blog-detail/{slug?}', function (?string $slug = null) {
    $post = BlogPost::query()
        ->where('is_published', true)
        ->when($slug, fn ($query) => $query->where('slug', $slug))
        ->latest('published_at')
        ->firstOrFail();

    return view('pages.blog-detail', compact('post'));
})->name('blog.detail');

Route::view('/contact', 'pages.contact')->name('contact');
Route::view('/cart', 'pages.cart')->name('cart');

Route::post('/orders', function (Request $request) {
    $validated = $request->validate([
        'name' => ['required', 'string', 'max:255'],
        'email' => ['required', 'email', 'max:255'],
        'whatsapp' => ['required', 'string', 'max:50'],
        'delivery' => ['required', 'string', 'max:100'],
        'notes' => ['nullable', 'string', 'max:1000'],
        'cart_payload' => ['required', 'json'],
    ]);

    $items = collect(json_decode($validated['cart_payload'], true))
        ->filter(fn ($item) => isset($item['name'], $item['price'], $item['quantity']) && (int) $item['quantity'] > 0)
        ->values();

    abort_if($items->isEmpty(), 422, 'Le panier est vide.');

    $customer = Customer::create([
        'name' => $validated['name'],
        'email' => $validated['email'],
        'whatsapp' => $validated['whatsapp'],
        'phone' => $validated['whatsapp'],
    ]);

    $subtotal = $items->sum(fn ($item) => (int) $item['price'] * (int) $item['quantity']);

    $order = Order::create([
        'customer_id' => $customer->id,
        'order_number' => 'IG-' . now()->format('YmdHis') . '-' . Str::upper(Str::random(4)),
        'delivery_method' => $validated['delivery'],
        'notes' => $validated['notes'] ?? null,
        'subtotal' => $subtotal,
        'delivery_fee' => 0,
        'total' => $subtotal,
    ]);
$orderDetails = "";

    foreach ($items as $item) {

    $quantity = (int) $item['quantity'];
    $unitPrice = (int) $item['price'];

    $order->items()->create([
        'name' => $item['name'],
        'unit_price' => $unitPrice,
        'quantity' => $quantity,
        'line_total' => $unitPrice * $quantity,
    ]);

    
    $subtotal = $item['price'] * $item['quantity'];

    $orderDetails .=
    "🍴 ".$item['name']."\n".
    "Qté : ".$item['quantity']."\n".
    "Prix : ".number_format($item['price'])." FCFA\n".
    "Sous-total : ".number_format($subtotal)." FCFA\n\n";
}




$pdf = Pdf::loadView('pdf.order', [
    'order' => $order,
    'customer' => $customer,
    'items' => $items,
    'subtotal' => $subtotal,
]);


$message = "
🍽 NOUVELLE COMMANDE #{$order->order_number}

👤 Client : {$customer->name}

📱 WhatsApp : {$customer->whatsapp}

📧 Email : {$customer->email}

🚚 Livraison : {$order->delivery_method}

📝 Notes :
{$order->notes}

━━━━━━━━━━━━━━

{$orderDetails}

━━━━━━━━━━━━━━

💰 TOTAL :
".number_format($order->total)." FCFA


";

Http::post(
    "https://api.ultramsg.com/".env('ULTRAMSG_INSTANCE')."/messages/chat",
    [
        'token' => env('ULTRAMSG_TOKEN'),
        'to' => env('GERANT_WHATSAPP'),
        'body' => $message
    ]
);






Storage::disk('public')->makeDirectory('orders');

$pdfFileName = 'commande-' . $order->order_number . '.pdf';

Storage::disk('public')->put(
    'orders/' . $pdfFileName,
    $pdf->output()
);

    return back()->with('success', "Votre commande {$order->order_number} a bien été enregistrée.",['order_id' => $order->id])
    ->with('customer_name', $customer->name)
    ->with('customer_whatsapp', $customer->whatsapp)
    ->with('customer_email', $customer->email)
    ->with('customer_delivery', $order->delivery_method)
    ->with('customer_notes', $order->notes);
})->name('orders.store');
