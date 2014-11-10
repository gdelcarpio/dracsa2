@extends('layout')

@section('content')

    @if (Auth::check())
        <ul class="nav navbar-nav pull-right">
            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                    <span class="icon icon-wh i-profile"></span>  {{ Auth::user()->name }}  <span class="caret"></span>
                </a>
                <ul class="dropdown-menu">
                    <li><a href="{{ route('edit_account') }}">Editar Cuenta</a></li>
                    <li><a href="{{ route('edit_password') }}">Editar Contraseña</a></li>
                    <li><a href="{{ route('logout') }}">Salir</a></li>
                </ul>
            </li>
        </ul>
        <div class="jumbotron">
            <div class="container">
                <h1>Dracsa</h1>
            </div>
        </div>

        <div class="container">

            <h3>{{ $user->name." ".$user->lastname }}</h3>

            <p>Tipo: {{ $user->usertype->name }}</p>

            <p>Email: {{ $user->email }}</p>
            <p>DNI: {{ $user->dni }}</p>
            <p>Teléfono/Celular: {{ $user->phone }}</p>

            <h4>Detalle</h4>

            <p>Cumpleaños: {{ $user->birth }}</p>
            <p>Departamento: {{{ $user->department->name }}}</p>
            <p>Provincia: {{{ $user->province->name }}}</p>
            <p>Distrito: {{{ $user->district->name }}}</p>
            <p>Dirección: {{{ $user->address }}}</p>

        </div>
    @else
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
    @endif  
@stop