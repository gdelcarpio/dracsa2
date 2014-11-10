@extends('layout')

@section('content')

     <div id="banner_header">
           <img src="{{ asset('bootstrap/img/banner_items.jpg') }}" width="100%">
         </div>

         <div id="filtros">
            <!-- <div class="col-md-12">filtros</div> -->
            <div class="clearfix"></div>
         </div>

<!-- <div class="container"> -->
    <!-- <h1>Productos</h1> -->

    <!-- <h4> $product->id.$product->name }}</h4> -->


         <div id="catalogo" class="col-md-12">
            <div class="row"> 
   @foreach ($products as $product)
   <? $i=0 ?>
   <!-- $product->productimages->first()->path}} -->
            @foreach ($product->productstocks as $productstock)
                <div class="col-md-3 col-sm-4 col-xs-6 item">            
                    <a href="{{ route('productstock', $productstock->id) }}">
                    <div class="prueba">
                        <div class="btn btn-default">Ver Detalle</div>
                    </div>
                    <div class="link">
                        @foreach($productstock->product->productimages as $p)
                        <? $i++ ?>
                            @if($i<2)
                                  <img src="{{ asset('img/'. $p->path) }}"class="img-responsive"> 
                            @endif
                        @endforeach
                        <!-- <p> dd($productstock->product->productimages)}}</p> -->
                        <!-- <img src=" asset('img/'.$productstock->product->productimages->path) }}" class="img-responsive"> -->
                        <div class="marca">{{ $productstock->product->brand->name }}</div>
                        <div class="titulo">{{ $productstock->product->name }} </div>
                        <div class="codigo">{{ $productstock->stock }}</div>
                        <div class="precio_desc">{{ $productstock->price }}</div>
                        <div class="precio_nomal">{{ $productstock->offering_price }}</div>
                    </div> 
                    </a>        
                </div> <!--item-->
            @endforeach
    @endforeach

           </div><!--row-->
           {{ $products->links()}}
         </div>


<!-- </div> -->

@endsection