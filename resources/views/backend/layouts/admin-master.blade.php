<!doctype html>
<html class="no-js" lang="">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Universal LP Gas - Dashboard Page</title>
    <meta name="description" content="Ela Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="apple-touch-icon" href="{{asset('/images/logo-1.png')}}">
    <link rel="shortcut icon" href="{{asset('/images/logo-1.png')}}">


    <link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('/assets/sweetalert2/dist/sweetalert2.min.css') }}">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.5.2/css/buttons.dataTables.min.css">

    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/pixeden-stroke-7-icon@1.2.3/pe-icon-7-stroke/dist/pe-icon-7-stroke.min.css">

    <link rel="stylesheet" href="{{url('/assets/css/style.css')}}">
    <link rel="stylesheet" href="{{url('/css/style.css')}}">


    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.20/datatables.min.css" />




    <style>
        #weatherWidget .currentDesc {
            color: #ffffff !important;
        }

        .traffic-chart {
            min-height: 335px;
        }

        #flotPie1 {
            height: 150px;
        }

        #flotPie1 td {
            padding: 3px;
        }

        #flotPie1 table {
            top: 20px !important;
            right: -10px !important;
        }

        .chart-container {
            display: table;
            min-width: 270px;
            text-align: left;
            padding-top: 10px;
            padding-bottom: 10px;
        }

        #flotLine5 {
            height: 105px;
        }

        #flotBarChart {
            height: 150px;
        }

        #cellPaiChart {
            height: 160px;
        }
        .profile-pic {
        width: 200px;
        height: 200px;
        overflow: hidden;
      }
      .img-thumbnail{
        height:200px!important;
      }
    </style>

</head>

<body>
    <!-- Left Panel -->
    <?php



$totaldata = 0;
    $positivedata = 0;
    $negativedata = 0;
    $pendingdata = 0;
    $port_staff_data = 0;
    $port_user_data = 0;
    $uri_path = Request::path();
    $uri_parts = explode('/', $uri_path);
    $uri_tail = end($uri_parts);
    ?>
    <aside id="left-panel" class="left-panel" style="background: #f8f9e7;">
        <nav class="navbar navbar-expand-sm navbar-default" style="background: #f8f9e7;">
            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="{{$uri_tail=='home'?'active':''}}">
                        <a href="{{url('/home')}}"><i class="menu-icon fa fa-laptop"></i><span class="left-menu-title">Info</span> </a>
                    </li>

                    <li class="{{$uri_tail=='form'?'active':''}}">
                        <a href="{{url('/form')}}"><i class="menu-icon fa fa-plus"></i><span class="left-menu-title">Add</span> </a>
                    </li>

                    @if(auth()->user()->role=='super-admin')
                    <li class="{{$uri_tail=='admin-user'?'active':''}}">
                        <a href="{{url('/admin-user')}}"> <i class="menu-icon fa fa-tasks"></i><span class="left-menu-title">Admins</span></a>
                    </li>
                    @endif
                </ul>
            </div>
        </nav>
    </aside>
    <!-- /#left-panel -->
    <!-- Right Panel -->
    <div id="right-panel" class="right-panel">
        <!-- Header-->
        <header id="header" class="header" style="background: #849c7a">
            <div class="top-left">
                <div class="navbar-header" style="background: #849c7a;">
                    <a class="navbar-brand" href="{{url('/home')}}" style="color: #fff;"><img style="width:105px;height: auto; margin-right: 5px;" src="{{asset('images/logo.png')}}" class="site-logo"></a>
                    <a id="menuToggle" class="menutoggle"><i style="color: #fff;" class="fa fa-bars"></i></a>
                </div>
            </div>
            <div class="top-right">
                <div class="header-menu">
                    <div class="user-area dropdown float-right">
                        <a href="#" class="dropdown-toggle active" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img class="user-avatar rounded-circle" src="{{asset('')}}images/admin.jpg" alt="User Avatar">
                        </a>
                        <div class="user-menu dropdown-menu">
                            <a class="nav-link" href="{{url('/profile')}}"><i class="fas fa-user"></i> My Profile</a>

                            <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();"><i class="fas fa-power-off"></i> Logout
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </header>

        <div class="content" style="background: #e9ead9">
            <div class="animated fadeIn">



                <div class="clearfix"></div>
                <div class="orders">
                    <div class="row justify-content-center">
                        @yield('content')
                        @yield('pie-chart')
                    </div>
                </div>
                <!-- /.orders -->
            </div>
            <!-- .animated -->
        </div>
        <!-- /.content -->
        <div class="clearfix"></div>
        <!-- Footer -->
        <footer class="site-footer " style="background: #c9cab8">
            <div class="footer-inner">
                <div class="row">
                    <div class="col-sm-6">
                        Copyright &copy; 2020. Universal LP Gas
                    </div>
                    <div class="col-sm-6 text-right">
                     Developed by  <a href="https://www.ennvisiodigital.tech">Ennvisio Digital</a>
                    </div>
                </div>
            </div>
        </footer>
        <!-- /.site-footer -->
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.js" type="text/javascript"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js" type="text/javascript"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js" type="text/javascript"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <script src="{{ asset('/assets/sweetalert2/dist/sweetalert2.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/dataForm.js') }}"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.20/datatables.min.js"></script>
    <script type="text/javascript" src="{{ asset('js/firstForm.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/flatForm.js') }}"></script>
    <!-- <script type="text/javascript" src="{{ asset('js/datalist.js') }}"></script> -->
    <script>
        $(document).ready(function() {
            $('#LandTaxTable').DataTable();
        });
    </script>
    @yield('js_content')
    @yield('print-pdf-custom-js')
    <script src="{{url('/')}}/assets/js/main.js"></script>
    @yield('pie-flot')

</body>

</html>
