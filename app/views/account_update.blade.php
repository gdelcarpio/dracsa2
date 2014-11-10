@extends('layout')

@section('content')

     <h1>Editar Producto</h1>

    {{ Form::model($user, ['route' => 'update_account', 'method' => 'PUT', 'role' => 'form', 'novalidate']) }}

    {{ Field::text('name') }}
    {{ Field::text('lastname') }}

    {{ Field::select('department_id', $departments) }}
    {{ Field::select('province_id', $provinces) }}

    <p>
        <input type="submit" value="Actualizar" class="btn btn-success">
    </p>

    {{ Form::close() }}
@stop