<!DOCTYPE html>
<html lang="es">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="csrf-token" content="{{ csrf_token() }}" />

    <link rel="icon" type="image/png" href=" {{ asset('img/logos/diente-ico.png') }} " />

    <title> Sculpt Dental </title>

    <!-- Bootstrap -->
    <link href=" {{ asset('vendor/bootstrap/dist/css/bootstrap.min.css') }} " rel="stylesheet">
    <!-- Font Awesome -->
    <link href=" {{ asset('vendor/font-awesome/css/font-awesome.min.css') }} " rel="stylesheet">
    <!-- NProgress -->
    <link href=" {{ asset('vendor/nprogress/nprogress.css') }} " rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href=" {{ asset('build/css/custom.min.css') }} " rel="stylesheet">
    <!-- jQuery -->
    <script src=" {{ asset('vendor/jquery/dist/jquery.min.js') }} "></script>
    
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="index.html" class="site_title"><i class="fa fa-user-md"></i> <span>Goodental</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                <img src=" {{ asset('images/img.png') }} " alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Bienvenido,</span>
                <h2> {{ Auth::user()->name }} </h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>Menu</h3>

                <!-- admin menu -->
                @if( Auth::user()->type == '1' )
                  <ul class="nav side-menu">
                      <li><a href=" {{ route('home') }} " ><i class="fa fa-home"></i> Inicio </a> </li>
                      <li><a><i class="fa fa-table"></i> Citas <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                          <li><a href=" {{ route('citas.create') }} ">Nueva</a></li>
                          <li><a href="s.html">Buscar</a></li>
                        </ul>
                      </li>
                      <li><a><i class="fa fa-edit"></i> Personas <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                          <li><a href=" {{ route('cli_index') }} ">Clientes</a></li>
                          <li><a href=" {{ route('doctores.index') }} ">Doctores</a></li>
                        </ul>
                      </li>
                    <li><a><i class="fa fa-book"></i> Tratamientos <span class="fa fa-chevron-down"></span></a>
                      <ul class="nav child_menu">
                        <li><a href=" {{ route('tratamientos.index') }} ">Lista</a></li>
                        <li><a href=" {{ route('tratamientos.create') }} ">Alta</a></li>
                      </ul>
                    </li>                   
                  </ul>                
                @endif                
                <!-- end admin menu -->

                <!-- doctor menu -->
                @if( Auth::user()->type == '2' )
                  <ul class="nav side-menu">
                      <li><a href=" {{ route('home') }} " ><i class="fa fa-home"></i> Inicio </a> </li>
                      <li><a><i class="fa fa-table"></i> Citas <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                          <li><a href=" {{ route('citas.index') }} ">Nueva</a></li>
                          <li><a href="s.html">Buscar</a></li>
                        </ul>
                      </li>                  
                  </ul>                
                @endif                
                <!-- end doctor menu -->

                <!-- recep menu -->
                @if( Auth::user()->type == '3' )
                  <ul class="nav side-menu">
                      <li><a href=" {{ route('home') }} " ><i class="fa fa-home"></i> Inicio </a> </li>
                      <li><a><i class="fa fa-table"></i> Citas <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                          <li><a href=" {{ route('citas') }} ">Nueva</a></li>
                          <li><a href="s.html">Buscar</a></li>
                        </ul>
                      </li>                  
                  </ul>                
                @endif                
                <!-- end recep menu -->

              </div>

            </div>
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
            <div class="sidebar-footer hidden-small">
              <a data-toggle="tooltip" data-placement="top" title="Settings">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Lock">
                <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Logout" href="login.html">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
              </a>
            </div>
            <!-- /menu footer buttons -->
          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
            <nav>
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>

              <ul class="nav navbar-nav navbar-right">
                <li class="">
                  <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    <img src=" {{ asset('images/img.png') }} " alt=""> {{ Auth::user()->name }}
                    <span class=" fa fa-angle-down"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
                    <li><a href=""> Perfil</a></li>
                    <li>
                      <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        <i class="fa fa-sign-out pull-right"></i> Salir
                      </a>
                      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                          {{ csrf_field() }}
                      </form>
                    </li>
                  </ul>
                </li>

                <!--<li role="presentation" class="dropdown">
                  <a href="javascript:;" class="dropdown-toggle info-number" data-toggle="dropdown" aria-expanded="false">
                    <i class="fa fa-envelope-o"></i>
                    <span class="badge bg-green">6</span>
                  </a>
                  <ul id="menu1" class="dropdown-menu list-unstyled msg_list" role="menu">
                    <li>
                      <a>
                        <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <a>
                        <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <a>
                        <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <a>
                        <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <div class="text-center">
                        <a>
                          <strong>See All Alerts</strong>
                          <i class="fa fa-angle-right"></i>
                        </a>
                      </div>
                    </li>
                  </ul>
                </li>-->
              </ul>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->

        <!-- page content -->
          @yield('content')
        <!-- /page content -->

        <!-- footer content -->
        <footer>
          <div class="pull-right">
            Gentelella - Bootstrap Admin Template by <a href="https://colorlib.com">Colorlib</a>
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>


    <!-- Bootstrap -->
    <script src=" {{ asset('vendor/bootstrap/dist/js/bootstrap.min.js') }} "></script>
    <!-- FastClick -->
    <script src=" {{ asset('vendor/fastclick/lib/fastclick.js') }} "></script>
    <!-- NProgress -->
    <script src=" {{ asset('vendor/nprogress/nprogress.js') }} "></script>
    
    <!-- Custom Theme Scripts -->
    <script src=" {{ asset('build/js/custom.min.js') }} "></script>
  </body>
</html>
