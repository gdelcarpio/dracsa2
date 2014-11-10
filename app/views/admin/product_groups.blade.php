@extends('layout_admin')

@section('content')
    <div id="cuerpo" class="container productos">
    
        <div class="row">
            <div class="col-md-7">
                <h3>Catálogo de Productos</h3>
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
              <h4><a href="{{ route('product_register') }}"class="btn btn-default"><i class="fa fa-plus"></i> Crear Producto (Grupo)</a></h4>
          </div>
        
          <div class="col-md-12">           
          <table bordercolor="#E9E9E9" width="100%" border="1" cellspacing="0" cellpadding="3">
              <thead>
                  <tr>
                    <th>Nombre</th>
                    <th>Marca</th>
                    <th>Género</th>
                    <th>Opciones</th>
                  </tr>
              </thead>
              @foreach ($products as $product)
                <tr>
                    <td>{{ $product->name }}</td>
                    <td>{{ $product->brand->name }}</td>
                    <td>{{ $product->genre->name }}</td>
                    <td><a href="{{ route('edit_group', $product->id) }}"><i class="fa fa-pencil"></i></a>&nbsp;&nbsp;&nbsp;<a title="Productos" href="{{ route('product_group', $product->id) }}"><i class="fa fa-bars"></i></a>&nbsp;&nbsp;&nbsp;<a title="Eliminar Producto" href=""><i class="fa fa-trash"></i></a></td>
                </tr>
              @endforeach
            </table>
           
            </div>  <!-- col-md-12  -->     

        </div>    
        {{ $products->links()}}
    </div> <!--fin cuerpo-->
  
@stop