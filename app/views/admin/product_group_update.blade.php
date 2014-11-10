@extends('layout_admin')

@section('content')

<div class="container">

  <h1>Editar Producto (grupo)</h1>

    {{ Form::model($product, ['route' => 'update_product_group', 'method' => 'PUT', 'role' => 'form', 'novalidate']) }}

    {{ Field::hidden('id') }}
    {{ Field::text('name') }}
    {{ Field::textarea('description') }}
    {{ Field::number('guarantee') }}

    {{ Field::select('brand_id', $brands) }}
    {{ Field::select('genre_id', $genres) }}

    <p>
        <input type="submit" value="Actualizar" class="btn btn-success">
    </p>

    {{ Form::close() }}

</div>

@endsection