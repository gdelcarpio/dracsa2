@extends('layout')

@section('content')

<!-- <div class="container"> -->

 <div id="producto_detalle" class="col-md-12">
 <div class="row"> 
   <div class="col-md-8">
    <img id="zoom" src="{{asset('img/'.$first->path)}}" class="img-responsive" data-zoom-image="{{asset('img/'.$first->path)}}">
    <!-- .$first->path -->
   </div>
      <!-- <p>dd($first) }}</p> -->
   <div class="col-md-4">
    <h3>{{ $productstock->product->name }}</h3>
      <p>{{{ $productstock->product->description }}}</p>
      <p><strong>Precio unitario: </strong>{{ $productstock->price }}</p>
      <br>
      <h3>Otras fotos</h3>
      <br>
      <h3>Detalles</h3>
      <ul>
        @foreach($productstock->product->productattributes as $attribute)
          <li><strong>{{$attribute->name}}:{{$attribute->value}}</strong> </li>
        @endforeach
          <li><strong>Cristal:</strong> </li>
          <li><strong>Resistencia al agua:</strong> </li>
          <li><strong>Garantía:</strong>{{ $productstock->product->guarantee }} meses</li>
          <li><strong>Diámetro de caja:</strong> </li>
      </ul>
      <br>
      <a href="#" class="btn btn-default">Agregar al carrito</a>
   </div>
 </div><!--row-->
</div>

<!-- </div> -->



@endsection