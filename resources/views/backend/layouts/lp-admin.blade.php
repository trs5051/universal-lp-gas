<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Universal LP Gas - Dashboard Page</title>

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="apple-touch-icon" href="{{ asset('/images/logo-1.png') }}">
    <link rel="shortcut icon" href="{{ asset('/images/logo-1.png') }}">

    <title>Universal LP GAS</title>

    <!-- Meta -->
    <meta name="description" content="Default Description">

    <link href="https://fonts.googleapis.com/css?family=Fira+Sans" rel="stylesheet">

    <!-- Styles -->


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link media="all" type="text/css" rel="stylesheet" href="{{ url('/css/backend.css') }}">
    <link media="all" type="text/css" rel="stylesheet" href="{{ url('/css/backend-custom.css') }}">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css">


    <!-- dd -->



    <!-- Scripts -->
    <script>
        window.Laravel = <?php echo json_encode(['csrfToken' => csrf_token()]); ?>

    </script>

    <style>
        .skin-blue-light .main-header .logo {
            background-color: #495867 !important;
            color: #fff !important;
            border-bottom: 0 solid transparent;
        }

    </style>



</head>


<body class="skin-blue-light sidebar-mini">

    <div class="loading" style="display:none"></div>

    <div class="wrapper" id="app">

        <header class="main-header">

            <a href="{{ route('backend-home') }}" class="logo">
                <!-- mini logo for sidebar mini 50x50 pixels -->
                <span class="logo-mini">
                    <h3><i> <b>ULG</b></i></h3>
                </span>
                <!-- logo for regular state and mobile devices -->
                <span class="logo-lg">
                    <h3><i> <b> Universal LP GAS </b></i></h3>
                </span>
            </a>

            <nav class="navbar navbar-static-top" role="navigation">
                <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                    <span class="sr-only">Toggle Navigation</span>
                </a>

                <div class="navbar-custom-menu">
                    <ul class="nav navbar-nav">

                        <!-- language if endif -->

                        <!-- /.messages-menu -->

                        <!-- /.notifications-menu -->

                        <!-- /.tasks-menu -->

                        <li class="dropdown user user-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <img src="{{ asset('/images/admin.jpg') }}" class="user-image" alt="User Avatar" />
                                <span class="hidden-xs">Admin</span>
                                <div class="clearfix"></div>
                            </a>

                            <ul class="dropdown-menu dropdown-menu-right">
                                <li class="user-header">
                                    <img src="{{ asset('/images/admin.jpg') }}" class="img-circle" alt="User Avatar" />
                                </li>


                                <li class="user-footer">
                                    <div class="pull-left">
                                        <a href="{{ url('/profile') }}" class="btn btn-default btn-flat">
                                            <i class="fa fa-home"></i>
                                            My Profile
                                        </a>
                                    </div>
                                    <div class="pull-right">

                                        <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();"
                                            class="btn btn-danger btn-flat">
                                            <i class="fa fa-sign-out"></i>
                                            Logout
                                        </a>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                            style="display: none;">
                                            {{ csrf_field() }}
                                        </form>


                                    </div>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div><!-- /.navbar-custom-menu -->
            </nav>
        </header>

        <!-- Left side column. contains the logo and sidebar -->
        <aside class="main-sidebar">
            <!-- sidebar: style can be found in sidebar.less -->
            <section class="sidebar">
                <!-- Sidebar Menu -->
                <ul class="sidebar-menu">
                    <!-- tauhid general -->

                    <!-- tauhid dashboard -->
                    <li class="header">System</li>
                    <li class="  ">
                        <a href="{{ route('backend.header-footer') }}">
                            <i class="fa fa-header"></i>
                            <span>header & footer</span>
                        </a>
                    </li>

                    <li class="treeview">
                        <a href="">
                            <i class="fa fa-home"></i>
                            <span>Home</span>
                            <i class="fa fa-angle-left pull-right"></i>
                        </a>
                        <ul class="treeview-menu" style="display: none; ">
                            <li class="">
                                <a href="{{ route('backend.front-slider') }}">
                                    <i class="fa fa-hand-o-right"></i>
                                    <span>Front Slider</span>
                                </a>
                            </li>
                            <li class="  ">
                            <a href="{{route('backend.our-proud')}}">
                                    <i class="fa fa-hand-o-right"></i>
                                    <span>Our Proud</span>
                                </a>
                            </li>

                            <li class="  ">
                            <a href="{{route('backend.our-business-concern')}}">
                                    <i class="fa fa-hand-o-right"></i>
                                    <span>Our Business Concern</span>
                                </a>
                            </li>
                            <li class="  ">
                            <a href="{{route('backend.sustainability')}}">
                                    <i class="fa fa-hand-o-right"></i>
                                    <span>Sustainability</span>
                                </a>
                            </li>

                        </ul>
                    </li>
                    <li class="treeview">
                        <a href="">
                            <i class="fa fa-info-circle"></i>
                            <span>About</span>
                            <i class="fa fa-angle-left pull-right"></i>
                        </a>
                        <ul class="treeview-menu " style="display: none; ">
                            <li class="  ">
                            <a href="{{route('backend.about-us')}}">
                                    <i class="fa fa-hand-o-right"></i>
                                    <span>About Us</span>
                                </a>
                            </li>
                            <li class="  ">
                            <a href="{{route('backend.mission-vision')}}">
                                    <i class="fa fa-hand-o-right"></i>
                                    <span>Mission & Vission</span>
                                </a>
                            </li>
                            <li class="  ">
                            <a href="{{route('backend.universal-lp-gas')}}">
                                    <i class="fa fa-hand-o-right"></i>
                                    <span>Universal LP Gas</span>
                                </a>
                            </li>
                            <li class="  ">
                            <a href="{{route('backend.directors')}}">
                                    <i class="fa fa-hand-o-right"></i>
                                    <span>Board of Directors</span>
                                </a>
                            </li>

                        </ul>
                    </li>

                    <li class="  ">
                        <a href="#/admin/menus">
                            <i class="fa fa-users"></i>
                            <span>Management</span>
                        </a>
                    </li>

                    <li class="treeview">
                        <a href="">
                            <i class="fa fa-bars"></i>
                            <span>Associate Connccern's</span>
                            <i class="fa fa-angle-left pull-right"></i>
                        </a>
                        <ul class="treeview-menu " style="display: none; ">
                            <li class="  ">
                            <a href="{{route('backend.universal-Agency')}}">
                                    <i class="fa fa-hand-o-right"></i>
                                    <span>Universal Agency</span>
                                </a>
                            </li>
                            <li class="  ">
                                <a href="{{route('backend.ms-Enterprise')}}">
                                    <i class="fa fa-hand-o-right"></i>
                                    <span>MS Enterprise</span>
                                </a>
                            </li>
                            <li class="  ">
                                <a href="{{route('backend.universal-gas-cylinder-ltd')}}">
                                    <i class="fa fa-hand-o-right"></i>
                                    <span>Universal Gas & Gas Cylinder Ltd</span>
                                </a>
                            </li>
                            <li class="  ">
                                <a href="{{route('backend.amb-traders')}}">
                                    <i class="fa fa-hand-o-right"></i>
                                    <span>AMB Traders Pvt Ltd</span>
                                </a>
                            </li>
                            <li class="  ">
                                <a href="{{route('backend.us-energy-power')}}">
                                    <i class="fa fa-hand-o-right"></i>
                                    <span>US Energy & Power Pvt Ltd</span>
                                </a>
                            </li>
                            <li class="  ">
                                <a href="{{route('backend.universal-cng-petrol-pump')}}">
                                    <i class="fa fa-hand-o-right"></i>
                                    <span>Universal CNG & Petrol Pump </span>
                                </a>
                            </li>
                            <li class="  ">
                                <a href="{{route('backend.universal-engineering-ltd')}}">
                                    <i class="fa fa-hand-o-right"></i>
                                    <span>Universal Engineering Ltd</span>
                                </a>
                            </li>

                        </ul>
                    </li>

                    <li class="  ">
                        <a href="#/admin/pages">
                            <i class="fa fa-product-hunt"></i>
                            <span>Products</span>
                        </a>
                    </li>

                    <li class="treeview">
                        <a href="">
                            <i class="fa fa-spinner"></i>
                            <span>Plant & Process</span>
                            <i class="fa fa-angle-left pull-right"></i>
                        </a>
                        <ul class="treeview-menu " style="display: none; ">
                            <li class="  ">
                                <a href="#/admin/blogCategories">
                                    <i class="fa fa-hand-o-right"></i>
                                    <span>Cylinder Sefty</span>
                                </a>
                            </li>
                            <li class="  ">
                            <a href="{{route('backend.plants')}}">
                                    <i class="fa fa-hand-o-right"></i>
                                    <span>Plants</span>
                                </a>
                            </li>
                            <li class="  ">
                                <a href="#/admin/blogs">
                                    <i class="fa fa-hand-o-right"></i>
                                    <span>Compliance</span>
                                </a>
                            </li>
                            <li class="  ">
                                <a href="#/admin/blogs">
                                    <i class="fa fa-hand-o-right"></i>
                                    <span>Why LPG?</span>
                                </a>
                            </li>

                        </ul>
                    </li>



                    <li class="  ">
                        <a href="#/admin/settings/1/edit">
                            <i class="fa fa-industry"></i>
                            <span>Distribution</span>
                        </a>
                    </li>
                    <li class="  ">
                        <a href="#/admin/settings/1/edit">
                            <i class="fa fa-newspaper-o"></i>
                            <span>News & Events</span>
                        </a>
                    </li>

                    <li class="  ">
                        <a href="{{ route('backend-settings') }}">
                            <i class="fa fa-gear"></i>
                            <span>Settings</span>
                        </a>
                    </li>


                    <li class="  ">
                        <a href="#/admin/faqs">
                            <i class="fa fa-address-card"></i>
                            <span>Contact</span>
                        </a>
                    </li>

                </ul><!-- /.sidebar-menu -->
            </section><!-- /.sidebar -->
        </aside>
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
                @yield('content')
        </div>

    </div>


    <!-- ./wrapper -->

    <!-- JavaScripts -->




    <script src="{{ url('/js/backend.js') }}"></script>
    <script src="{{ url('/js/backend-custom.js') }}"></script>
    <script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js"></script>

    <script>
        $(document).ready(function() {
            $('.datatable').DataTable();
        });

    </script>

    @yield('js')
</body>

</html>
