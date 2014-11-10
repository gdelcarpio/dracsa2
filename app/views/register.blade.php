@extends('layout')

@section('content')


        <h2>Registro</h2>

        {{ Form::open(['route' => 'register', 'method' => 'POST', 'role' => 'form', 'class' => 'xcol-md-3']) }}

        <div class="col-md-4">

            {{ Field::text('name', null, ['placeholder' => 'Nombre']) }}

            {{ Field::text('lastname', null, ['placeholder' => 'Apellidos']) }}

            {{ Field::email('email', null, ['placeholder' => 'Correo']) }}

            {{ Field::password('password', ['placeholder' => 'Contraseña']) }}

            {{ Field::password('password_confirmation', ['placeholder' => 'Repite tu contraseña']) }}
            
        </div>

        <div class="col-md-4">
            
            {{ Field::number('dni', null, ['placeholder' => 'DNI']) }}

            {{ Field::date('birth', null, ['placeholder' => 'Cumpleaños']) }}

            {{ Field::text('phone', null, ['placeholder' => 'Teléfono / Celular']) }}

        </div>

        <div class="col-md-4">
            
            {{ Field::text('address', null, ['placeholder' => 'Dirección']) }}

            {{ Field::select('department_id', $departments) }}

            {{ Field::select('province_id', $provinces) }}

            {{ Field::select('district_id', $districts) }}
            
            <input type="submit" value="Registrarse" class="btn btn-success">

        </div>

            
        {{ Form::close() }}

@stop