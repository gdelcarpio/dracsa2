@extends('layout_admin')

@section('content')
    <div id="cuerpo" class="container productos">
    

      <h3>Imágenes</h3>
    
        <div class="row">
        <!-- Form::open(array('url'=>'images_save', 'method' => 'post','enctype'=>'multipart/form-data')) }} -->
           {{ Form::model($productstock, ['route' => 'images_save', 'method' => 'POST', 'role' => 'form','enctype'=>'multipart/form-data', 'novalidate']) }}

            {{ Field::file('path') }}
            {{ Field::hidden('color_id') }}
            {{ Field::hidden('product_id') }}
            {{ Field::submit('subir') }}

          {{ Form::close()}}
        
          <div class="col-md-12">           

           
            </div>  <!-- col-md-12  -->     

        </div>    
    </div> <!--fin cuerpo-->
  
@stop