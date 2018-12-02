<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Tecnicas y Servicios</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.2/css/bootstrap-select.min.css">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{asset('css/font-awesome.css')}}">
    <link rel="stylesheet" href="{{asset('font/css/fontawesome.css')}}">
    <link rel="stylesheet" href="{{asset('font/css/fontawesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('font/css/regular.css')}}">
    <link rel="stylesheet" href="{{asset('font/css/all.css')}}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{asset('css/AdminLTE.min.css')}}">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="{{asset('css/_all-skins.min.css')}}">
    <link rel="apple-touch-icon" href="{{asset('img/apple-touch-icon.png')}}">
    <link rel="shortcut icon" href="{{asset('img/favicon.ico')}}">

  </head>
  <body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">

      <header class="main-header">

        <!-- Logo -->
        <a href="/" class="logo">
          <!-- mini logo for sidebar mini 50x50 pixels -->
          <span class="logo-mini"><b>Ty</b>S</span>
          <!-- logo for regular state and mobile devices -->
          <span class="logo-lg"><b>TyServicios</b></span>
        </a>

        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top" role="navigation">
          <!-- Sidebar toggle button-->
          <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Navegación</span>
          </a>
          <!-- Navbar Right Menu -->
          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
              <!-- Messages: style can be found in dropdown.less-->
              
              <!-- User Account: style can be found in dropdown.less -->
              <li class="dropdown user user-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <!--<small class="bg-red">Online</small>-->
                  <span class="hidden-xs">Jaime Ramon Villalba</span>
                </a>
                <ul class="dropdown-menu">
                  <!-- User image -->
                  <li class="user-header">
                    
                    <p>
                      Tecnicas y Servicios
                      <small>Jefe de Sucursal</small>
                    </p>
                  </li>
                  
                  <!-- Menu Footer-->
                  <li class="user-footer">
                    
                    <div class="pull-right">
                      <a href="{{url('/logout')}}" class="btn btn-default btn-flat">Cerrar</a>
                    </div>
                  </li>
                </ul>
              </li>
              
            </ul>
          </div>

        </nav>
      </header>
      <!-- Left side column. contains the logo and sidebar -->
      <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
          <!-- Sidebar user panel -->
                    
          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu">


            <li class="header"></li>
            
            <li class="treeview">
              <a href="#">
                <i class="fa fa-users"></i>
                <span>Empleados</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="{{asset('empleado/gestion')}}"><i class="fas fa-circle"></i> Gestionar Empleado</a></li>
              </ul>
            </li>
            



            <li class="treeview">
              <a href="#">
                <i class="fa fa-car"></i>
                <span>Vehiculos</span>
                 <i class="fa fa-angle-left pull-right"></i>
              </a>
               <ul class="treeview-menu">
                  <li><a href="{{asset('vehiculo/gestion')}}"><i class="fas fa-circle"></i> Gestionar Vehiculos</a></li>
              </ul> 
            </li>
                       
            <li class="treeview">
              <a href="#">
                <i class="fa fa-file"></i> <span>Tareas</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="{{asset('tarea/gestion')}}"><i class="fas fa-circle"></i> Gestionar Tareas</a></li>
                <li><a href="{{asset('tarea/gestion')}}"><i class="fas fa-circle"></i> Asignar Subtareas</a></li>
                
              </ul>
            </li>

            <li class="treeview">
                <a href="#">
                  <i class="fa fa-folder"></i> <span>Ordenes de Trabajo</span>
                  <i class="fa fa-angle-left pull-right"></i>
                </a>
                  <ul class="treeview-menu">
                    <li><a href="{{asset('orden/gestion')}}"><i class="fas fa-circle"></i> Gestionar OT</a></li>
                  
                  </ul>
            </li>

            <li class="treeview">
              <a href="#">
                <i class="fa fa-wrench"></i> <span>Moviles</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
                <ul class="treeview-menu">
                  <li><a href="{{asset('movil/gestion')}}"><i class="fas fa-circle"></i> Asginación de Moviles</a></li>
                </ul>
            </li>




            <li class="treeview">
                <a href="#">
                  <i class="fa fa-cogs"></i>
                  <span>Configuraciones</span>
                   <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                  <li><a href="{{asset('configuracion/pais')}}"><i class="fas fa-circle"></i> Paises</a></li>
                  <li><a href="{{asset('configuracion/provincia')}}"><i class="fas fa-circle"></i> Provincias</a></li>
                  <li><a href="{{asset('configuracion/localidad')}}"><i class="fas fa-circle"></i> Localidades</a></li>
                  <li><a href="{{asset('configuracion/estado_civil')}}"><i class="fas fa-circle"></i> Estado Civil</a></li>
                  <li><a href="{{asset('configuracion/tipo_telefono')}}"><i class="fas fa-circle"></i> Tipo de Teléfono</a></li>
                  <li><a href="{{asset('configuracion/telefono')}}"><i class="fas fa-circle"></i> Teléfono</a></li>
                  <li><a href="{{asset('configuracion/tipo_vehiculo')}}"><i class="fas fa-circle"></i> Tipo de vehiculo</a></li>
                  <li><a href="{{asset('configuracion/marca')}}"><i class="fas fa-circle"></i> Marca de Vehiculo</a></li>
                  <li><a href="{{asset('configuracion/modelo')}}"><i class="fas fa-circle"></i> Modelo de Vehiculo</a></li>

                  <li><a href="{{asset('configuracion/estado_vehiculo')}}"><i class="fas fa-circle"></i> Estado de Vehiculo</a></li>



                </ul>
              </li>



            <!-- <li>
              <a href="#">
                <i class="fa fa-plus-square"></i> <span>Ayuda</span>
                <small class="label pull-right bg-red">PDF</small>
              </a>
            </li>-->
            <!--<li>
              <a href="#">
                <i class="fa fa-info-circle"></i> <span>Acerca De...</span>
                <small class="label pull-right bg-yellow">IT</small>
              </a>
            </li>-->
                        
          </ul>
        </section>
        <!-- /.sidebar -->
      </aside>





       <!--Contenido-->
      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        
        <!-- Main content -->
        <section class="content">
          
          <div class="row">
            <div class="col-md-12">
              <div class="box">

                <div class="box-header with-border">
                  @yield('titulo')
                  {{--<h3 class="box-title">Sistema de Control, Cierre y Seguimiento de Tareas</h3>--}}
                  
                </div>

                <!-- /.box-header -->
                <div class="box-body">
                  	<div class="row">
	                  	<div class="col-md-12">
		                        <!--Contenido-->
                              
                                @yield('contenido')

		                        <!--Fin Contenido-->
                           </div>
                        </div>
		                    
                  		</div>
                  	</div><!-- /.row -->
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->

        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
      <!--Fin-Contenido-->
      <footer class="main-footer">
        <div class="pull-right hidden-xs">
          <b>Version</b> 1.0
        </div>
        <strong>Copyright &copy; 2018 <a href="www.charly_groso_64@hotmail.com">Carlos Villalba</a>.</strong> Todos los derechos reservados.
      </footer>

      
    <!-- jQuery 2.1.4 -->
    <script src="{{asset('js/jQuery-2.1.4.min.js')}}"></script>
    @stack('scripts')
    <!-- Bootstrap 3.3.5 -->
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.2/js/bootstrap-select.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.2/js/i18n/defaults-*.min.js"></script>
        <!-- AdminLTE App -->
    <script src="{{asset('js/app.min.js')}}"></script>
    
  </body>
</html>
