@extends('layout_admin')

@section('content')
<style type="text/css">
  tr, th{
    text-align: center;
  }
</style>
    <div id="cuerpo" class="container productos">
    
        <div class="row">
            <div class="col-md-7">
                <h3>Catálogo de Productos  {{ $product->name }}</h3>
                <ul class="nav nav-pills">
                  <li class="active"><a href="#">Todos <span class="badge">42</span></a></li>
                  <li><a href="#">Visibles <span class="badge">42</span></a></li>
                  <li><a href="#">Sin Imagen</a></li>
                  <li><a href="#">Rechazados <span class="badge">42</span></a></li>
                  <li><a href="#">Agotados <span class="badge">42</span></a></li>
                </ul><br>
            </div>
        </div>

    
        <div class="row">
          <div class="col-md-5 text-left">
              <h4><a href="{{ route('productstock_register', $product->id) }}" class="btn btn-default"><i class="fa fa-plus"></i> Crear Producto</a></h4>
          </div>
          <div class="col-md-12">           
          <table bordercolor="#E9E9E9" width="100%" border="1" cellspacing="0" cellpadding="3">
              <thead>
                  <tr>
                    <th>SKU</th>
                    <th>Color</th>
                    <th>Tamaño</th>
                    <th>Stock</th>
                    <th>Opciones</th>
                  </tr>
              </thead>
              @foreach ($productstocks as $productstock)

                <tr>
                    <td>{{ $productstock->sku }}</td>
                    <td>{{ $productstock->color->name }}</td>
                    <td>{{ $productstock->size->name }}</td>
                    <td>{{ $productstock->stock }}</td>
                    <td><a href="{{ route('edit_productstock', $productstock->id) }}"><i class="fa fa-pencil"></i></a>&nbsp;&nbsp;&nbsp;<a href="{{ route('images', $productstock->id) }}"><i class="fa fa-picture-o"></i></a></td>
                </tr>
              @endforeach
            </table>
           
            </div>  <!-- col-md-12  -->     

        </div>    
         {{ $productstocks->links()}}
    </div> <!--fin cuerpo-->
  
@stop