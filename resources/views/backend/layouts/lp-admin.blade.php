<!DOCTYPE html>
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
                    <li class="header">System </li>

                    <li class="{{ Request::routeIs('backend.header-footer') ? 'active' : '' }}">
                        <a href="{{ route('backend.header-footer') }}">
                            <i class="fa fa-header"></i>
                            <span>header & footer</span>
                        </a>
                    </li>

                <li class="treeview {{ (request()->is('backend/home*')) ? 'active' : '' }} ">
                        <a href="">
                            <i class="fa fa-home"></i>
                        <span>Home</span>
                            <i class="fa fa-angle-left pull-right"></i>
                        </a>
                        <ul class="treeview-menu" style="display: {{ (request()->is('backend/home*')) ? 'block' : 'none' }} ; ">

                            <li class="{{ (request()->is('backend/home/front-slider')) ? 'active' : '' }}">
                                <a href="{{ route('backend.front-slider') }}">
                                    <i class="fa fa-hand-o-right"></i>
                                    <span>Front Slider</span>
                                </a>
                            </li>
                            <li class="{{ Request::routeIs('backend.our-proud') ? 'active' : '' }}">
                                <a href="{{ route('backend.our-proud') }}">
                                    <i class="fa fa-hand-o-right"></i>
                                    <span>Our Proud</span>
                                </a>
                            </li>

                            <li class="{{ Request::routeIs('backend.our-business-concern') ? 'active' : '' }}">
                                <a href="{{ route('backend.our-business-concern') }}">
                                    <i class="fa fa-hand-o-right"></i>
                                    <span>Our Business Concern</span>
                                </a>
                            </li>
                            <li class="{{ Request::routeIs('backend.sustainability') ? 'active' : '' }}">
                                <a href="{{ route('backend.sustainability') }}">
                                    <i class="fa fa-hand-o-right"></i>
                                    <span>Sustainability</span>
                                </a>
                            </li>

                        </ul>
                    </li>
                    <li class="treeview {{ (request()->is('backend/about*')) ? 'active' : '' }}">
                        <a href="">
                            <i class="fa fa-info-circle"></i>
                            <span>About</span>
                            <i class="fa fa-angle-left pull-right"></i>
                        </a>
                        <ul class="treeview-menu " style="display: {{ (request()->is('backend/about*')) ? 'block' : 'none' }}; ">
                            <li class="{{ Request::routeIs('backend.about-us') ? 'active' : '' }}">
                                <a href="{{ route('backend.about-us') }}">
                                    <i class="fa fa-hand-o-right"></i>
                                    <span>About Us</span>
                                </a>
                            </li>
                            <li class="{{ Request::routeIs('backend.mission-vision') ? 'active' : '' }}">
                                <a href="{{ route('backend.mission-vision') }}">
                                    <i class="fa fa-hand-o-right"></i>
                                    <span>Mission & Vission</span>
                                </a>
                            </li>
                            <li class="{{ Request::routeIs('backend.universal-lp-gas') ? 'active' : '' }}">
                                <a href="{{ route('backend.universal-lp-gas') }}">
                                    <i class="fa fa-hand-o-right"></i>
                                    <span>Universal LP Gas</span>
                                </a>
                            </li>
                            <li class="{{ Request::routeIs('backend.directors') ? 'active' : '' }}">
                                <a href="{{ route('backend.directors') }}">
                                    <i class="fa fa-hand-o-right"></i>
                                    <span>Board of Directors</span>
                                </a>
                            </li>

                        </ul>
                    </li>

                    <li class="treeview {{ (request()->is('backend/management*')) ? 'active' : '' }}">
                    <a href="">
                            <i class="fa fa-users"></i>
                            <span>Management</span>
                            <i class="fa fa-angle-left pull-right"></i>
                        </a>
                        <ul class="treeview-menu " style="display: {{ (request()->is('backend/management*')) ? 'block' : 'none' }}; ">

                            <li class="{{ Request::routeIs('backend.management') ? 'active' : '' }}">
                                <a href="{{Route('backend.management')}}">
                                    <i class="fa fa-hand-o-right"></i>
                                    <span>Member List</span>
                                </a>
                            </li>
                            <li class="{{ Request::routeIs('backend.management.category') ? 'active' : '' }}">
                                <a href="{{Route('backend.management.category')}}">
                                    <i class="fa fa-hand-o-right"></i>
                                    <span>Management Category</span>
                                </a>
                            </li>

                        </ul>
                    </li>

                    <li class="treeview {{ (request()->is('backend/concern*')) ? 'active' : '' }}">
                        <a href="">
                            <i class="fa fa-bars"></i>
                            <span>Associate Connccern's</span>
                            <i class="fa fa-angle-left pull-right"></i>
                        </a>
                        <ul class="treeview-menu " style="display: {{ (request()->is('backend/concern*')) ? 'block' : 'none' }}; ">
                            <li class="{{ Request::routeIs('backend.universal-Agency') ? 'active' : '' }}">
                                <a href="{{ route('backend.universal-Agency') }}">
                                    <i class="fa fa-hand-o-right"></i>
                                    <span>Universal Agency</span>
                                </a>
                            </li>
                            <li class="{{ Request::routeIs('backend.ms-Enterprise') ? 'active' : '' }}">
                                <a href="{{ route('backend.ms-Enterprise') }}">
                                    <i class="fa fa-hand-o-right"></i>
                                    <span>MS Enterprise</span>
                                </a>
                            </li>
                            <li class="{{ Request::routeIs('backend.universal-gas-cylinder-ltd') ? 'active' : '' }}">
                                <a href="{{ route('backend.universal-gas-cylinder-ltd') }}">
                                    <i class="fa fa-hand-o-right"></i>
                                    <span>Universal Gas & Gas Cylinder Ltd</span>
                                </a>
                            </li>
                            <li class="{{ Request::routeIs('backend.amb-traders') ? 'active' : '' }}">
                                <a href="{{ route('backend.amb-traders') }}">
                                    <i class="fa fa-hand-o-right"></i>
                                    <span>AMB Traders Pvt Ltd</span>
                                </a>
                            </li>
                            <li class="{{ Request::routeIs('backend.us-energy-power') ? 'active' : '' }}">
                                <a href="{{ route('backend.us-energy-power') }}">
                                    <i class="fa fa-hand-o-right"></i>
                                    <span>US Energy & Power Pvt Ltd</span>
                                </a>
                            </li>
                            <li class="{{ Request::routeIs('backend.universal-cng-petrol-pump') ? 'active' : '' }}">
                                <a href="{{ route('backend.universal-cng-petrol-pump') }}">
                                    <i class="fa fa-hand-o-right"></i>
                                    <span>Universal CNG & Petrol Pump </span>
                                </a>
                            </li>
                            <li class="{{ Request::routeIs('backend.universal-engineering-ltd') ? 'active' : '' }}">
                                <a href="{{ route('backend.universal-engineering-ltd') }}">
                                    <i class="fa fa-hand-o-right"></i>
                                    <span>Universal Engineering Ltd</span>
                                </a>
                            </li>

                        </ul>
                    </li>


                    <li class="treeview {{ (request()->is('backend/product*')) ? 'active' : '' }}">
                    <a href="">
                            <i class="fa fa-users"></i>
                            <span>Products</span>
                            <i class="fa fa-angle-left pull-right"></i>
                        </a>
                        <ul class="treeview-menu " style="display: {{ (request()->is('backend/product*')) ? 'block' : 'none' }}; ">

                            <li class="{{ Request::routeIs('backend.product') ? 'active' : '' }}">
                                <a href="{{Route('backend.product')}}">
                                    <i class="fa fa-hand-o-right"></i>
                                    <span>All Products</span>
                                </a>
                            </li>
                            <li class="{{ Request::routeIs('backend.product.category') ? 'active' : '' }}">
                                <a href="{{Route('backend.product.category')}}">
                                    <i class="fa fa-hand-o-right"></i>
                                    <span>Product Category</span>
                                </a>
                            </li>

                        </ul>
                    </li>

                    <li class="treeview {{ (request()->is('backend/plant-process*')) ? 'active' : '' }}">
                        <a href="">
                            <i class="fa fa-spinner"></i>
                            <span>Plant & Process</span>
                            <i class="fa fa-angle-left pull-right"></i>
                        </a>
                        <ul class="treeview-menu " style="display: {{ (request()->is('backend/plant-process*')) ? 'block' : 'none' }}; ">
                            <li class="{{ Request::routeIs('backend.cylinderSafety') ? 'active' : '' }}">
                            <a href="{{ route('backend.cylinderSafety') }}">
                                    <i class="fa fa-hand-o-right"></i>
                                    <span>Cylinder Safety</span>
                                </a>
                            </li>
                            <li class="{{ Request::routeIs('backend.plants') ? 'active' : '' }}">
                                <a href="{{ route('backend.plants') }}">
                                    <i class="fa fa-hand-o-right"></i>
                                    <span>Plants</span>
                                </a>
                            </li>
                            <li class="{{ Request::routeIs('backend.compliance') ? 'active' : '' }}">
                            <a href="{{ route('backend.compliance')}}">
                                    <i class="fa fa-hand-o-right"></i>
                                    <span>Compliance</span>
                                </a>
                            </li>
                            <li class="{{ Request::routeIs('backend.whyLPG') ? 'active' : '' }}">
                            <a href="{{ route('backend.whyLPG') }}">
                                    <i class="fa fa-hand-o-right"></i>
                                    <span>Why LPG?</span>
                                </a>
                            </li>

                        </ul>
                    </li>
                    <li class="">
                        <a href="#">
                            <i class="fa fa-newspaper-o"></i>
                            <span>News & Events</span>
                        </a>
                    </li>


                    <li class="{{ Request::routeIs('backend.contact') ? 'active' : '' }}">
                    <a href="{{ route('backend.contact') }}">
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
