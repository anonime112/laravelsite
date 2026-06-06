<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Order extends Model
{
    protected $fillable = [
        'customer_id',
        'order_number',
        'status',
        'delivery_method',
        'notes',
        'subtotal',
        'delivery_fee',
        'total',
    ];

    protected function casts(): array
    {
        return [
            'subtotal' => 'integer',
            'delivery_fee' => 'integer',
            'total' => 'integer',
        ];
    }

    public function customer(): BelongsTo
    {
        return $this->belongsTo(Customer::class);
    }

    public function items(): HasMany
    {
        return $this->hasMany(OrderItem::class);
    }
     public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'whatsapp' => 'required',
            'email' => 'required|email',
            'delivery' => 'required',
            'cart_payload' => 'required'
        ]);

        $cart = json_decode(
            $request->cart_payload,
            true
        );

        if (!$cart || count($cart) == 0) {

            return back()
                ->with('error','Panier vide');
        }

        $grandTotal = 0;

        foreach ($cart as $item) {

            $grandTotal +=
                $item['price'] *
                $item['quantity'];
        }

        $order = Order::create([
            'name' => $request->name,
            'whatsapp' => $request->whatsapp,
            'email' => $request->email,
            'delivery' => $request->delivery,
            'notes' => $request->notes,
            'total' => $grandTotal
        ]);

        foreach ($cart as $item) {

            OrderItem::create([

                'order_id' => $order->id,

                'dish_name' => $item['name'],

                'price' => $item['price'],

                'quantity' => $item['quantity'],

                'total' =>
                    $item['price']
                    * $item['quantity']
            ]);
        }

        $pdf = Pdf::loadView(
            'pdf.order',
            [
                'order' => $order,
                'cart' => $cart
            ]
        );

        $directory =
            storage_path('app/orders');

        if (!file_exists($directory)) {

            mkdir($directory, 0777, true);
        }

        $pdfPath =
            $directory .
            '/commande-' .
            $order->id .
            '.pdf';

        $pdf->save($pdfPath);

        return redirect()
            ->route('cart.index')
            ->with(
                'success',
                'Commande enregistrée'
            );
    }

}
