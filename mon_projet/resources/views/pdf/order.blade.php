<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">

<style>

body{
    font-family: DejaVu Sans;
    font-size:14px;
}

table{
    width:100%;
    border-collapse:collapse;
}

table th,
table td{
    border:1px solid #ddd;
    padding:8px;
}

h1,h2,h3{
    margin-bottom:5px;
}

</style>

</head>

<body>

<h1>IGUYZZA RESTAURANT</h1>

<h3>Commande N° {{ $order->order_number }}</h3>

<hr>

<p><strong>Client :</strong> {{ $customer->name }}</p>

<p><strong>Email :</strong> {{ $customer->email }}</p>

<p><strong>WhatsApp :</strong> {{ $customer->whatsapp }}</p>

<p><strong>Mode :</strong> {{ $order->delivery_method }}</p>

<p><strong>Date :</strong> {{ $order->created_at }}</p>

@if($order->notes)
<p><strong>Notes :</strong> {{ $order->notes }}</p>
@endif

<table>

<thead>

<tr>
    <th>Article</th>
    <th>Prix</th>
    <th>Qté</th>
    <th>Total</th>
</tr>

</thead>

<tbody>

@foreach($items as $item)

<tr>

<td>{{ $item['name'] }}</td>

<td>{{ number_format($item['price']) }} FCFA</td>

<td>{{ $item['quantity'] }}</td>

<td>
{{ number_format($item['price'] * $item['quantity']) }}
FCFA
</td>

</tr>

@endforeach

</tbody>

</table>

<h2 style="margin-top:20px">
TOTAL :
{{ number_format($subtotal) }} FCFA
</h2>

</body>
</html>