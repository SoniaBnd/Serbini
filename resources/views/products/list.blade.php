@extends('layout')

@section('content')

<h1>Affiche la liste des produits</h1>
<table>
@foreach ($data as $page)
            <tr>
              <th>{{ $page->id }}</th>
              <th><a href="<?= route('product', ['id' => $page->id ]); ?>">{{ $page->name }}</a></th>
            </tr>
 @endforeach
</table>

@endsection 