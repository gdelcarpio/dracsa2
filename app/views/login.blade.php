@extends('layout')

@section('content')

<h2>Login</h2>

{{ Form::open(['route' => 'log-in', 'method' => 'POST', 'role' => 'form', 'class' => 'col-md-3']) }}
                @if (Session::has('login_error'))
                    <span class="label label-danger">Credenciales no válidas</span>
                @endif
                <div class="form-group">
                    {{ Form::email('email', null, ['class' => 'form-control', 'placeholder' => 'E-mail']) }}
                </div>
                <div class="form-group">
                    {{ Form::password('password', ['class' => 'form-control', 'placeholder' => 'Password']) }}
                </div>
                <div class="checkbox">
                    <label class="remember-me">
                        {{ Form::checkbox('remember') }} Recordarme
                    </label>
                </div>
                <button type="submit" class="btn btn-success">Iniciar Sesión</button>
            {{ Form::close() }}
@stop