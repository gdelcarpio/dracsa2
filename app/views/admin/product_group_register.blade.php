@extends('layout_admin')

@section('content')
<div class="container">

        <h2>Registro de Producto (Grupo)</h2>

        {{ Form::open(['route' => 'product_register', 'method' => 'POST', 'role' => 'form', 'class' => 'xcol-md-3']) }}

        <div class="col-md-4">

            {{ Field::text('name', null, ['placeholder' => 'Nombre']) }}

            {{ Field::textarea('description', null, ['placeholder' => 'Descripción']) }}

            {{ Field::number('guarantee', null, ['placeholder' => 'Garantía']) }}
            
        </div>

        <div class="col-md-4">
            
            {{ Field::select('brand_id', $brands) }}

            {{ Field::select('genre_id', $genres) }}
            
            <input type="submit" value="Registrar Producto" class="btn btn-success">

        </div>

            
        {{ Form::close() }}
</div>
@stop