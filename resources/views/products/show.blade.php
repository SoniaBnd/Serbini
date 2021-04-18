@extends('layout')

@section('content')

<h1>Affiche un produit</h1>
<table>
<tr><td>Titre: {{ $data->name }}</td></tr> 
<tr><td>Date de création: {{ $data->date_created }}</td></tr>
<tr><td>Prix: {{ $data->regular_price }}</td></tr>
<tr><td>Status: {{ $data->status }}</td></tr>
</table>

<h2> Commande crée avec succée</h2>
{{ $order_id }}
@endsection