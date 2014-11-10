@extends('layout')

@section('content')

<div class="container">

    <h1>{{ $product->name }}</h1>


    <p>Garantía: {{ $product->guarantee }} meses</p>


    <h4>Descripción</h4>

    <p>{{{ $product->description }}}</p>

</div> <!-- /container -->

@endsection