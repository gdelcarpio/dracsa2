@extends('layout')

@section('content')

<div class="container">
    <h1>Productos</h1>

    <table class="table table-striped">
        <tr>
            <th>Nombre</th>
            <th>Marca</th>
            <th>Descripción</th>
            @foreach ($product->)
                <th>{{ }}</th>
            @endforeach
            <th>Ver</th>
        </tr>
        @foreach ($products as $product)
        <tr>
            <td>{{ $product->name }}</td>
            <td>{{ $product->brand->name }}</td>
            <td>{{{ $product->description }}}</td>
            <td width="50">
                               <a href="{{ route('product', [$product->id]) }}" class="btn btn-info">
                    Ver
                </a>

            </td>
        </tr>
        @endforeach


    </table>


</div> <!-- /container -->

@endsection