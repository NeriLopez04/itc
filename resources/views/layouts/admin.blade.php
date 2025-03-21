<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
  
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>ITC</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="{{asset('plugins/fontawesome-free/css/all.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('dist/css/adminlte.min.css')}}">
  <!-- Iconos de bootstrap -->
  <link rel="stylesheet" href="{{ asset('https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css') }}">

  <!-- jQuery -->
  <script src="{{asset('plugins/jquery/jquery.min.js')}}"></script>
  
  <!-- Date Table -->
  <link rel="stylesheet" href="{{ asset('plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
  <link rel="stylesheet" href="{{ asset('plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
  <link rel="stylesheet" href="{{ asset('plugins/datatables-buttons/css/buttons.bootstrap4.min.css') }}">

  @livewireStyles

</head>
<body class="hold-transition sidebar-mini">
  
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="{{url('/')}}" class="nav-link">SISTEMA ITC</a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->
      <li class="nav-item">
        <a class="nav-link" data-widget="navbar-search" href="#" role="button">
          <i class="fas fa-search"></i>
        </a>
        <div class="navbar-search-block">
          <form class="form-inline">
            <div class="input-group input-group-sm">
              <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
              <div class="input-group-append">
                <button class="btn btn-navbar" type="submit">
                  <i class="fas fa-search"></i>
                </button>
                <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                  <i class="fas fa-times"></i>
                </button>
              </div>
            </div>
          </form>
        </div>
      </li>

      <!-- Messages Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-comments"></i>
          <span class="badge badge-danger navbar-badge">3</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="dist/img/user1-128x128.jpg" alt="User Avatar" class="img-size-50 mr-3 img-circle">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Brad Diesel
                  <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">Call me whenever you can...</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="dist/img/user8-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  John Pierce
                  <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">I got your message bro</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="dist/img/user3-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Nora Silvester
                  <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">The subject goes here</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
        </div>
      </li>
      <!-- Notifications Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-bell"></i>
          <span class="badge badge-warning navbar-badge">15</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <span class="dropdown-header">15 Notifications</span>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-envelope mr-2"></i> 4 new messages
            <span class="float-right text-muted text-sm">3 mins</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-users mr-2"></i> 8 friend requests
            <span class="float-right text-muted text-sm">12 hours</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-file mr-2"></i> 3 new reports
            <span class="float-right text-muted text-sm">2 days</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
        </div>
      </li>
      <!--  Para agregar, ver, modificar o eliminar Monedas -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="bi bi-currency-exchange"></i>
          <span class="badge badge-warning navbar-badge"></span>
        </a>
      </li>
      <!-- Pantalla Completa -->
      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
      <!--  Barra desplegable del otro lado   -->
      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
          <i class="fas fa-th-large"></i>
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{url('/')}}" class="brand-link">
      <img src="{{url('dist/img/logo ITC.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">In Time Control</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{url('dist/img/user2-160x160.jpg')}}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">{{ Auth::user()->name}}</a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="#" class="nav-link active">
              <i class="nav-icon bi bi-people-fill"></i>
              <p>
                Gestión de RRHH
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">

              <li class="nav-item">
                <a href="{{url('#')}}" class="nav-link active">
                  <i class="bi bi-person-walking"></i>
                  
                  <!-- Con el comando "<p> </p>" el texto se encapsula y al momento de ejecutar una accion de retraer, el texto no se sale de su espacio -->
                  <p>
                    Trabajadores
                    <i class="right fas fa-angle-left"></i>
                  </p>
                </a>

                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="{{ url("rrhh/trabajadores") }}" class="nav-link" >
                    <p>
                      <i class="bi bi-person-lines-fill"></i>
                      Listado de Trabajadores</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="{{ url('rrhh/trabajadores/create') }}" class="nav-link" >
                    <p>
                      <i class="bi bi-person-fill-add"></i>
                      Agregar Trabajador
                    </p>
                    </a>
                  </li>
                </ul>
              </li>

              <li class="nav-item">
                <a href="{{url('#')}}" class="nav-link active">
                  <i class="fas fa-handshake"></i>
                  
                  <!-- Con el comando "<p> </p>" el texto se encapsula y al momento de ejecutar una accion de retraer, el texto no se sale de su espacio -->
                  <p>
                    Contratos
                    <i class="right fas fa-angle-left"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="{{url('rrhh/contrato')}}" class="nav-link">
                      <i class="bi bi-person-lines-fill"></i>
                      <p>Lista de Contratos</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="{{url('rrhh/contrato/create')}}" class="nav-link">
                      <i class="fas fa-handshake"></i>
                      <p>Nuevo Contrato</p>
                    </a>
                  </li>
                </ul>
              </li>

              <li class="nav-item">
                <a href="{{url('#')}}" class="nav-link active">
                  <i class="bi bi-cash-stack"></i>
                  
                  <!-- Con el comando "<p> </p>" el texto se encapsula y al momento de ejecutar una accion de retraer, el texto no se sale de su espacio -->
                  <p>
                    Finiquitos
                    <i class="right fas fa-angle-left"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="{{url('rrhh/finiquito')}}" class="nav-link">
                      <i class="bi bi-person-lines-fill"></i>
                      <p>Lista de Finiquitos</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="{{url('rrhh/finiquito/create')}}" class="nav-link">
                      <i class="fas fa-handshake"></i>
                      <p>Crear Finiquito</p>
                    </a>
                  </li>
                </ul>
              </li>
              
              <li class="nav-item">
                <a href="{{url('#')}}" class="nav-link active">
                  <i class="bi bi-calendar3"></i>
                  
                  <!-- Con el comando "<p> </p>" el texto se encapsula y al momento de ejecutar una accion de retraer, el texto no se sale de su espacio -->
                  <p>
                    Asistencia
                    <i class="right fas fa-angle-left"></i>
                  </p>
                </a>

                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="{{ url("/rrhh/asistencia") }}" class="nav-link" >
                    <p>
                      <i class="bi bi-calendar-range-fill"></i>
                      Reporte de Asistencia</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="{{ url('rrhh/asistencia/create') }}" class="nav-link" >
                    
                    <p>
                      <i class="bi bi-alarm-fill"></i>
                      Alta de aistencia
                    </p>
                    </a>
                  </li>
                </ul>
              </li>

            </ul>
          </li>
        <li class="nav-item">
            <a href="#" class="nav-link active">
                <i class="bi bi-gear-fill"></i>
              <p>
                System
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
        <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="#" class="nav-link active">
                <i class="bi bi-building"></i>
                  <p>Proyectos
                    <i class="right fas fa-angle-left"></i>
                  </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="{{url('system/proyecto')}}" class="nav-link">
                    <p>
                      <i class="bi bi-card-list"></i>
                      Listado de Proyectos</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="{{url('system/proyecto/create')}}" class="nav-link">
                    <p>
                      <i class="bi bi-building-add"></i>
                      Nuevo Proyecto</p>
                  </a>
                </li>
              </ul>
            </li>
              
            <li class="nav-item">
              <a href="#" class="nav-link active">
                <i class="bi bi-person-fill"></i>
                    <p>Usuarios
                      <i class="right fas fa-angle-left"></i>
                    </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="{{url('system/usuario')}}" class="nav-link">
                    <p>
                      <i class="bi bi-person-lines-fill"></i>
                      Listado de Usuarios</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="{{url('/system/usuario/create')}}" class="nav-link">
                    <p>
                      <i class="bi bi-person-fill-add"></i>
                      Agregar Usuario</p>
                  </a>
                </li>
              </ul>
            </li>
          </ul>
          </li>
      
          <li class="nav-item">
            <a href="#" class="nav-link active">
              <i class="fas fa-cash-register"></i>
              <p>
                PRM
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              
              <li class="nav-item">
                <a href="#" class="nav-link active">
                <i class="fas fa-credit-card"></i>
                  <p>Orden de Compra
                    <i class="right fas fa-angle-left"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="{{ url('prm/oc') }}" class= "nav-link">
                      <i class="fas fa-file-invoice-dollar"></i>
                      <p>Listado de Orde de Compra</p>
                    </a>
                  </li>
                  <li class="nav-item active">
                    <a href="{{ ('/prm/oc/create') }}" class="nav-link">
                      <i class="bi bi-credit-card-2-front-fill"></i>
                      <p>Crear Orden de Compra</p>
                    </a>
                  </li>
                </ul>

              </li>
              <li class="nav-item">
                <a href="#" class="nav-link active">
                  <i class="fas fa-hand-holding"></i>
                  <p>
                    Solicitud de Cotizaciones
                    <i class="right fas fa-angle-left"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="{{url('prm/solicitud')}}" class="nav-link">
                      <i class="fas fa-list"></i>
                      <p>Ver Cotizaciones</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="{{url('prm/solicitud/create')}}" class="nav-link">
                      <i class="fas fa-plus-circle"></i>
                      <p>Agregar Cotización</p>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link active">
                  <i class="bi bi-currency-exchange"></i>
                  <!-- Con el comando "<p> </p>" el texto se encapsula y al momento de ejecutar una accion de retraer, el texto no se sale de su espacio -->
                  <p>Monedas</p>
                  <i class="right fas fa-angle-left"></i>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                      <a href="{{ route('moneda.create') }}" class="nav-link">
                          <i class="bi bi-coin"></i>
                          <p>Crear nueva moneda</p>
                      </a>
                  </li>
                  <li class="nav-item">
                      <a href="{{ route('moneda.index') }}" class="nav-link">
                          <i class="bi bi-list"></i>
                          <p>Listado de Monedas</p>
                      </a>
                  </li>
              </ul>
              </li>
                  <li class="nav nav-item">
                    <a href="#" class="nav-link active">
                      <i class="bi bi-buildings-fill"></i>
                      <p>
                        Clientes y Proveedores
                        <i class="right fas fa-angle-left"></i>
                      </p>
                    </a>
                    <ul class="nav nav-treeview">
                      <li class="nav-item">
                        <a href="{{url('prm/compania')}}" class="nav-link">
                          <i class="fas fa-address-book"></i>
                          <p>Listado de Clientes y Proveedores</p>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a href="{{url('prm/compania/create')}}" class="nav-link">
                          <i class="bi bi-journal-plus"></i>
                          <p>Agregar Nuevo Cliente/Proveedor</p>
                        </a>
                      </li>
                    </ul>
                  </li>
            </ul>
          </li>

          <li class="nav-item">
<!-- Apartado en el nav bar izquierdo para cerrrar sesion -->
          <a class="nav-link" href="{{ route('logout') }}"
                onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();"
                style="background-color:#d33715">
              <i class="nav-icon bi bi-door-open-fill"></i>
                <!-- Con el comando "<p> </p>" el texto se encapsula y al momento de ejecutar una accion de retraer, el texto no se sale de su espacio -->
              <p>Cerrar Sesión</p>
          </a>
          <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
            @csrf
          </form>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Aqui inicia el contenido de la pagina -->
  <div class="content-wrapper">
        <br>
        <div class="content">
            @yield('content')
            
        </div>
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
    <div class="p-3">
      <h5>Title</h5>
      <p>Sidebar content</p>
    </div>
  </aside>
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
  <footer class="main-footer">
    <!-- To the right -->
    <div class="float-right d-none d-sm-inline">
      Better, Different and In Time
    </div>
    <!-- Default to the left -->
    <strong>Copyright &copy; 2025 <a href="https://www.intimecontrol.com/">In Time Control SA. de CV</a>.</strong> Todos los derechos reservados.
  </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->
@livewireScripts

<!-- Bootstrap 4 -->
<script src="{{asset ('plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset ('dist/js/adminlte.min.js')}}"></script>

<!-- demojs 
<script src="{{ asset('dist/js/demo.js') }}"></script> -->

<script src="{{ asset('plugins/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
<script src="{{ asset('plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
<script src="{{ asset('plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>
<script src="{{ asset('plugins/datatables-buttons/js/dataTables.buttons.min.js') }}"></script>
<script src="{{ asset('plugins/datatables-buttons/js/buttons.bootstrap4.min.js') }}"></script>
<script src="{{ asset('plugins/jszip/jszip.min.js') }}"></script>
<script src="{{ asset('plugins/pdfmake/pdfmake.min.js') }}"></script>
<script src="{{ asset('plugins/pdfmake/vfs_fonts.js') }}"></script>
<script src="{{ asset('plugins/datatables-buttons/js/buttons.html5.min.js') }}"></script>
<script src="{{ asset('plugins/datatables-buttons/js/buttons.print.min.js') }}"></script>
<script src="{{ asset('plugins/datatables-buttons/js/buttons.colVis.min.js') }}"></script>

@livewireScripts
</body>
</html>