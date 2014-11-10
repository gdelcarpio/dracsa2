<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>user</title>
    
    <!--font icon-->
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
  <link href='http://fonts.googleapis.com/css?family=Roboto:500,300,700,400' rel='stylesheet' type='text/css'>
    <!-- Bootstrap -->
    <link href="{{ asset('bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <!--<link href="css/bootstrap-theme.min.css" rel="stylesheet">-->
    <link href="{{ asset('bootstrap/css/custom_store.css') }}" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
  
  <div class="container">
<!--  ---COLUMNA IZQUIERDA -------->
  
    <div class="col-md-2">
      <div class="row">
       <a href="{{ route('home') }}"> <img src="{{ asset('bootstrap/img/Logo_chronos.jpg') }}" class="img-responsive"></a>
        <br><br><br>
        
        <div class="menu-link"><a href="{{ route('genre', '3') }}">MUJER</a></div>
        <div class="menu-link"><a href="{{ route('genre', '2') }}">HOMBRE</a></div>
        <div class="panel menu-link">
            <div class="panel-heading  panel-menu">              
                <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree">MARCAS</a>              
            </div>
            <div id="collapseThree" class="panel-collapse collapse">
              <div class="panel-body">
                <ul>
                  @foreach ($brands as $brand)
                    <li><a href="{{ route('brand', [$brand->id]) }}">{{ $brand->name }}</a></li>
                  @endforeach
                </ul>
                
              </div>
            </div>
          </div>
        <div class="menu-link"><a href="#">PROMOCIONES</a></div>
        
        <div class="panel-group" id="accordion">
  
</div>
        
      </div>
    </div>
    
    <!-------------COLUMNA DERECHA-------------->
    <div class="col-md-10 col-sm-12">
      
        
        <div class="row">
          <div class="col-md-4 col-md-offset-4">
              <form class="navbar-form navbar-left" role="search">
                  <div class="form-group">
                    <input type="text" class="form-control" placeholder="Buscar">
                  </div>
                  <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                </form>
            </div>            
            <div class="col-md-1 redes text-center">
              <a href="#"><i class="fa fa-facebook fa-lg"></i></a>
                &nbsp; 
                <a href="#"><i class="fa fa-twitter fa-lg"></i></a>                
            </div>
            
            <div class="col-md-3 text-right"> 
               
                <i class="texto-naranja fa fa-shopping-cart fa-lg"></i> carrito de compras<br>
                  <div class="carrito-subtitulo"><span class="badge">4</span> Items 
                    <span class="carrito-monto">S/. 300.00</span> </div>
                </div>
       
        </div> <!----row---->
         <div class="row"><hr style="margin-bottom:8px;"></div>
        
      <div class="row">
          <div class="col-md-6">
              <div class="row">
                    <ul class="menu-2">
                        <li><a href="#">Tiendas</a></li>
                        <li><a href="{{route('nosotros')}}">Nosotros</a></li>
                        <li><a href="#">Contacto</a></li>
                        <li><a href="#">Servicios al cliente</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-6">
              <div class="row">
                <ul class="menu-3">
                  @if (Auth::guest())
                  <li><a href="{{ route('register') }}">Registrarse</a></li>
                  @endif
                  <li><a href="{{ route('account') }}">Mi Cuenta</a></li>
                </ul> </div>           
            </div>
        </div> <!----row---->
        
        <div class="row" id="cuerpo">


 @yield('content')



        </div>
        <div id="pie" class="row">
          
            <div class="col-md-6">
              <div class="row">
              <ul class="pie-izquierda">
                <li><a href="#">Políticas</a></li>
                <li><a href="#">Trabaja con nosotros</a></li>
              </ul>
              </div>
             </div> 
             <div class="col-md-6">
              <div class="row">
                <ul class="pie-derecha">
                  <li><a href="#">Todos los derechos reservados 2014</a></li>              
                </ul>
                </div>
              </div>
          </div>
        
    
    </div>
  
  </div>  
    

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="{{ asset('bootstrap/js/jquery-1.11.0.js') }}"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="{{ asset('bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('bootstrap/js/jquery.elevatezoom.js') }}"></script>
     <script type="text/javascript">
    $(document).ready(function(e){
      $('#zoom').elevateZoom();
    });
 </script>
  </body>
</html>