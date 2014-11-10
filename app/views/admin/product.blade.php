@extends('layout_admin')

@section('content')

<div class="container">

  <h1>{{ $productstock->product->name }}</h1>
  <p>Garantía: {{ $productstock->product->guarantee }} meses</p>
  <h4>Descripción</h4>
  <p>Color: {{ $productstock->color->name }}</p>
  <p>Tamaño/Talla: {{ $productstock->size->name }}</p>
  <p>{{{ $productstock->product->description }}}</p>

  <h1>Editar Producto</h1>

    {{ Form::model($productstock, ['route' => 'update_productstock', 'method' => 'POST', 'role' => 'form', 'novalidate']) }}

    {{ Field::hidden('id') }}
    {{ Field::hidden('product_id') }}
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
        <input type="submit" value="Actualizar" class="btn btn-success">
    </p>

    {{ Form::close() }}

</div>

@endsection