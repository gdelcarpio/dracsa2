@extends('layout_admin')

@section('content')

<div class="container">

  <h2> {{ $product->name }} (Grupo)</h2>

  <h3>Registrar Producto</h3>
  <div class="col-md-6">
    {{ Form::open(['route' => 'productstock_register', 'method' => 'POST', 'role' => 'form', 'novalidate']) }}

    {{ Field::hidden('product_id', $product->id) }}
    {{ Field::number('price') }}
    {{ Field::number('stock') }}
    {{ Field::text('sku') }}
    {{ Field::checkbox('visible') }}
    {{ Field::number('offering_price') }}
    {{ Field::date('starting_offer') }}
    {{ Field::date('ending_offer') }}

    {{ Field::select('color_id', $colors) }}
    {{ Field::select('size_id', $sizes) }}

    <p>
        <input type="submit" value="Registrar" class="btn btn-success">
    </p>

    {{ Form::close() }}
  </div>

</div>

@endsection