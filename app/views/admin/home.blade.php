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
     <!--        <div class="col-md-5 text-right">
                <h3><button type="button" class="btn btn-default"><i class="fa fa-plus"></i> Crear Producto</button></h3>
                
            </div> -->
        </div>
    
        <div class="row">
          <div class="col-md-12">           
          <table bordercolor="#E9E9E9" width="100%" border="1" cellspacing="0" cellpadding="3">
              <thead>
                  <tr>
                    <th>Editar</th>
                    <th>Nombre</th>
                    <th>Creado</th>
                    <th>SKU</th>
                    <th>Precio</th>
                    <th>Precio de oferta</th>
                    <th>Invent. disp.</th>
                    <th>Visible</th>
                    <th>Activo</th>
                  </tr>
              </thead>
              @foreach ($productstocks as $productstock)

                <tr>
                    <td><a href="{{ route('edit_productstock', $productstock->id) }}">Editar</a></td>
                    <td>{{ $productstock->product->name }}</td>
                    <td>{{ $productstock->created_at }}</td>
                    <td>{{ $productstock->sku }}</td>
                    <td>{{ $productstock->price }}</td>
                    <td>{{ $productstock->offering_price }}</td>
                    <td>{{ $productstock->stock }}</td>
                    <td>{{ $productstock->visible }}</td>
                    <td>{{ $productstock->visible?'Sí':'No' }}</td>
                </tr>
              @endforeach
            </table>
           
            </div>  <!-- col-md-12  -->     

         {{ $productstocks->links()}}
        </div>    
    </div> <!--fin cuerpo-->
  
@stop