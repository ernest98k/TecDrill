<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/png" sizes="16x16" href="vendor/bo/images/logoicon.png">
    <title>Tecdrill - Backoffice</title>
    <!-- Bootstrap Core CSS -->
    <link href="{{asset('vendor/bo/bootstrap/dist/css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- Menu CSS -->
    <link href="{{asset('vendor/bo/bower_components/sidebar-nav/dist/sidebar-nav.min.css')}}" rel="stylesheet">
    <!-- toast CSS -->
    <link href="{{asset('vendor/bo/bower_components/toast-master/css/jquery.toast.css')}}" rel="stylesheet">
    <!-- morris CSS -->
    <link href="{{asset('vendor/bo/bower_components/morrisjs/morris.css')}}" rel="stylesheet">
    <!-- chartist CSS -->
    <link href="{{asset('vendor/bo/bower_components/chartist-js/dist/chartist.min.css')}}" rel="stylesheet">
    <link href="{{asset('vendor/bo/bower_components/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.css')}}" rel="stylesheet">
    <!-- animation CSS -->
    <link href="{{asset('vendor/bo/css/animate.css')}}" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="{{asset('vendor/bo/css/style.css')}}" rel="stylesheet">
    <!-- color CSS -->
    <link href="{{asset('vendor/bo/css/colors/default.css')}}" id="theme" rel="stylesheet">

   <!-- <link href="{{asset('vendor/bo/css/fontawesome.css')}}" rel="stylesheet">
    <link href="{{asset('vendor/bo/css/fontawesome.min.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   -->
    <link href="{{asset('vendor/fontawesome-free/css/all.min.css')}}" rel=" stylesheet" type="text/css">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body class="fix-header">
    <!-- ============================================================== -->
    <!-- Preloader -->
    <!-- ============================================================== -->
    <div class="preloader">
        <svg class="circular" viewBox="25 25 50 50">
            <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" />
        </svg>
    </div>
    <!-- ============================================================== -->
    <!-- Wrapper -->
    <!-- ============================================================== -->
    <div id="wrapper">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <nav class="navbar navbar-default navbar-static-top m-b-0">
            <div class="navbar-header">
                <div class="top-left-part">
                    <!-- Logo -->
                    <a class="logo" href="{{route('admin')}}">
                        <!-- Logo icon image, you can use font-icon also -->
                        <b>
                            <!--This is dark logo icon-->
                            <img src="{{asset('vendor/bo/images/logo.png')}}" alt="home" class="dark-logo" />
                            <!--This is light logo icon-->
                            <img src="{{asset('vendor/bo/images/logo.png')}}" alt="home" class="light-logo" />
                        </b>
                        <!-- Logo text image you can use text also -->
                        <span class="hidden-xs">
                            <!--This is dark logo text-->
                            <img src="{{asset('vendor/bo/images/logo-text.png')}}" alt="home" class="dark-logo" />
                            <!--This is light logo text-->
                            <img src="{{asset('vendor/bo/images/logo-text.png')}}" alt="home" class="light-logo" />
                        </span> 
                    </a>
                </div>
                <!-- /Logo -->
                <ul class="nav navbar-top-links navbar-right pull-right">
                    <li>
                        <a class="nav-toggler open-close waves-effect waves-light hidden-md hidden-lg" href="javascript:void(0)"><i class="fa fa-bars"></i></a>
                    </li>
                    <li class="nav-item dropdown no-arrow">
                        @if(auth()->check())    
                        <a class="profile-pic" href="#"> <img src="{{asset('vendor/bo/images/users/varun.jpg')}}" alt="user-img" width="36" class="img-circle"><b class="hidden-xs">{{auth()->user()->name}}</b></a>
                         <!-- Dropdown - User Information -->
                         <li>
                         <form action="{{route('logout')}}" method="post" class="inline">
                            @csrf
                            <button class="btn btn-primary" type="submit">Logout</button>
                          </form>
                        </li>
                        @else
                            <a href="{{route('login')}}">
                                <span class="mr-2 d-none d-lg-inline text-gray-200 small">Login</span>
                            </a>
                        @endif
                    </li>
                </ul>
            </div>
            <!-- /.navbar-header -->
            <!-- /.navbar-top-links -->
            <!-- /.navbar-static-side -->
        </nav>
        <!-- End Top Navigation -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <div class="navbar-default sidebar" role="navigation">
            <div class="sidebar-nav slimscrollsidebar">
                <div class="sidebar-head">
                    <h3><span class="fa-fw open-close"><i class="ti-close ti-menu"></i></span> <span class="hide-menu">Navigation</span></h3>
                </div>
                <ul class="nav" id="side-menu">
                    <li style="padding: 70px 0 0;">
                        <a href="dashboard.html" class="waves-effect"><i class="fa fa-clock-o fa-fw" aria-hidden="true"></i>Dashboard</a>
                    </li>
                    <li>
                        <a href="profile.html" class="waves-effect"><i class="fa fa-user fa-fw" aria-hidden="true"></i>Sobre</a>
                    </li>
                    <li>
                        <a href="basic-table.html" class="waves-effect"><i class="fa fa-id-badge fa-fw" aria-hidden="true"></i>Catálogo</a>
                    </li>
                    <li>
                        <a href="fontawesome.html" class="waves-effect"><i class="fa fa-id-badge fa-fw" aria-hidden="true"></i>Galeria</a>
                    </li>
                    <li>
                        <a href="map-google.html" class="waves-effect"><i class="fa fa-id-badge fa-fw" aria-hidden="true"></i>Serviços</a>
                    </li>
                    <li>
                        <a href="blank.html" class="waves-effect"><i class="fa fa-user fa-fw" aria-hidden="true"></i>Recrutamento</a>
                    </li>
                    <li>
                        <a href="404.html" class="waves-effect"><i class="fa fa-id-badge fa-fw" aria-hidden="true"></i>Contactos</a>
                    </li>
                    <li>
                        <a href="404.html" class="waves-effect"><i class="fa fa-comments fa-fw" aria-hidden="true"></i>Opiniões</a>
                    </li>
                    <li>
                        <a href="404.html" class="waves-effect"><i class="fa fa-id-badge fa-fw" aria-hidden="true"></i>FAQ's</a>
                    </li>
                    <li>
                        <a href="{{route('users.index')}}" class="waves-effect"><i class="fa fa-user fa-fw" aria-hidden="true"></i>Utilizadores</a>
                    </li>

                </ul>
            </div>
            
        </div>
        <!-- ============================================================== -->
        <!-- End Left Sidebar -->
        <!-- ============================================================== -->

    
  
        <!-- ============================================================== -->
        <!-- Page Content -->
        <!-- ============================================================== -->
   
<div id="page-wrapper">
    @if ($errors->any())
        @include ('partials.errors')
    @endif

    @if (!empty(session('success')))
        @include ('partials.success')
    @endif

    @yield("content")

         <!-- /.container-fluid -->
    <footer class="footer text-center">
    <p class="copyright color-text-a">
            <br>
              &copy; Copyright
              <span class="color-a">TecDrill</span> All Rights Reserved.
            </p></footer>
</div>
        <!-- ============================================================== -->
        <!-- End Page Content -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->

      <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
      <div class="modal-footer">
        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
        <form action="{{route('logout')}}" method="post" class="inline">
          @csrf
          <button class="btn btn-primary" type="submit">Logout</button>
        </form>
      </div>
    </div>
  </div>
</div>
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="{{asset('vendor/bo/bower_components/jquery/dist/jquery.min.js')}}"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="{{asset('vendor/bo/bootstrap/dist/js/bootstrap.min.js')}}"></script>
    <!-- Menu Plugin JavaScript -->
    <script src="{{asset('vendor/bo/bower_components/sidebar-nav/dist/sidebar-nav.min.js')}}"></script>
    <!--slimscroll JavaScript -->
    <script src="{{asset('vendor/bo/js/jquery.slimscroll.js')}}"></script>
    <!--Wave Effects -->
    <script src="{{asset('vendor/bo/js/waves.js')}}"></script>
    <!--Counter js -->
    <script src="{{asset('vendor/bo/bower_components/waypoints/lib/jquery.waypoints.js')}}"></script>
    <script src="{{asset('vendor/bo/bower_components/counterup/jquery.counterup.min.js')}}"></script>
    <!-- chartist chart -->
    <script src="{{asset('vendor/bo/bower_components/chartist-js/dist/chartist.min.js')}}"></script>
    <script src="{{asset('vendor/bo/bower_components/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.min.js')}}"></script>
    <!-- Sparkline chart JavaScript -->
    <script src="{{asset('vendor/bo/bower_components/jquery-sparkline/jquery.sparkline.min.js')}}"></script>
    <!-- Custom Theme JavaScript -->
    <script src="{{asset('vendor/bo/js/custom.min.js')}}"></script>
    <script src="{{asset('vendor/bo/js/dashboard1.js')}}"></script>
    <script src="{{asset('vendor/bo/bower_components/toast-master/js/jquery.toast.js')}}"></script>
</body>

</html>
