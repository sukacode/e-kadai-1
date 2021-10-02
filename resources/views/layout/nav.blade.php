<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="images/favicon.ico" type="image/ico" />

    <title>@yield('title')</title>

    <!-- Bootstrap -->
    <link href="{{ asset('/style/vendors/bootstrap/dist/css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="{{ asset('/style/vendors/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
    <!-- NProgress -->
    <link href="{{ asset('/style/vendors/nprogress/nprogress.css')}}" rel="stylesheet">
    <!-- iCheck -->
    <link href="{{ asset('/style/vendors/iCheck/skins/flat/green.css')}}" rel="stylesheet">

    <!-- bootstrap-progressbar -->
    <link href="{{ asset('/style/vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css')}}" rel="stylesheet">
    <!-- JQVMap -->
    <link href="{{ asset('/style/vendors/jqvmap/dist/jqvmap.min.css')}}" rel="stylesheet" />
    <!-- bootstrap-daterangepicker -->
    <link href="{{ asset('/style/vendors/bootstrap-daterangepicker/daterangepicker.css')}}" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="{{ asset('style/build/css/custom.min.css')}}" rel="stylesheet">
</head>

<body class="nav-md">
    <div class="container body">
        <div class="main_container">
            <div class="col-md-3 left_col">
                <div class="left_col scroll-view">
                    <div class="navbar nav_title" style="border: 0;">
                        <a href="index.html" class="site_title"><i class="fa fa-shopping-cart"></i>
                            <span>E-Kadai</span></a>
                    </div>

                    <div class="clearfix"></div>

                    <!-- menu profile quick info -->
                    <div class="profile clearfix">
                        <div class="profile_info">
                            <span>Welcome,</span>
                            <h2>Admin</h2>
                        </div>
                    </div>
                    <!-- /menu profile quick info -->

                    <br />

                    <!-- sidebar menu -->
                    <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
                        <div class="menu_section">
                            <h3>Administrator</h3>
                            <ul class="nav side-menu">
                                <li><a><i class="fa fa-home"></i> Home </a> </li>
                                <li><a><i class="fa fa-user-plus"></i> User </a> </li>
                                <li><a><i class="fa fa-edit"></i> Manage <span class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu">
                                        <li><a href="product.html">Product</a></li>
                                        <li><a href="category.html">Category</a></li>
                                    </ul>
                                </li>
                                <li><a><i class="fa fa-bar-chart-o"></i> Report <span
                                            class="fa fa-chevron-down"></span></a>
                                    <ul class="nav child_menu">
                                        <li><a href="chartjs.html">Dayly</a></li>
                                        <li><a href="chartjs2.html">Weekly</a></li>
                                        <li><a href="morisjs.html">Monthly</a></li>
                                        <li><a href="echarts.html">Yearsly</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>


                    </div>
                    <!-- /sidebar menu -->


                </div>
            </div>

            <!-- top navigation -->
            <div class="top_nav">
                <div class="nav_menu">
                    <div class="nav toggle">
                        <a id="menu_toggle"><i class="fa fa-bars"></i></a>
                    </div>
                    <nav class="nav navbar-nav">
                        <ul class=" navbar-right">
                            <li class="nav-item dropdown open" style="padding-left: 15px;">
                                <a href="javascript:;" class="user-profile dropdown-toggle" aria-haspopup="true"
                                    id="navbarDropdown" data-toggle="dropdown" aria-expanded="false">
                                    <img src="#" alt="">Admin
                                </a>
                                <div class="dropdown-menu dropdown-usermenu pull-right"
                                    aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="javascript:;"> Profile</a>
                                    <a class="dropdown-item" href="javascript:;">

                                        <span>Settings</span>
                                    </a>
                                    <a class="dropdown-item" href="login.html"><i class="fa fa-sign-out pull-right"></i>
                                        Log Out</a>
                                </div>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
            <!-- /top navigation -->
{{-- Content --}}
            @yield('content')
            {{-- End of content --}}
<!-- footer content -->
<footer>
                <div class="pull-right">
                    E-Kadai Inventory System
                </div>
                <div class="clearfix"></div>
            </footer>
            <!-- /footer content -->
        </div>
    </div>

    
</body>
<!-- jQuery -->
<script src="{{ asset('style/vendors/jquery/dist/jquery.min.js')}}"></script>
<!-- Bootstrap -->
<script src="{{ asset('style/vendors/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>
<!-- FastClick -->
<script src="{{ asset('style/vendors/fastclick/lib/fastclick.js')}}"></script>
<!-- NProgress -->
<script src="{{ asset('style/vendors/nprogress/nprogress.js')}}"></script>
<!-- Chart.js -->
<script src="{{ asset('style/vendors/Chart.js/dist/Chart.min.js')}}"></script>
<!-- gauge.js -->
<script src="{{ asset('style/vendors/gauge.js/dist/gauge.min.js')}}"></script>
<!-- bootstrap-progressbar -->
<script src="{{ asset('style/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js')}}"></script>
<!-- iCheck -->
<script src="{{ asset('style/vendors/iCheck/icheck.min.js')}}"></script>
<!-- Skycons -->
<script src="{{ asset('style/vendors/skycons/skycons.js')}}"></script>
<!-- Flot -->
<script src="{{ asset('style/vendors/Flot/jquery.flot.js')}}"></script>
<script src="{{ asset('style/vendors/Flot/jquery.flot.pie.js')}}"></script>
<script src="{{ asset('style/vendors/Flot/jquery.flot.time.js')}}"></script>
<script src="style/vendors/Flot/jquery.flot.stack.js"></script>
<script src="style/vendors/Flot/jquery.flot.resize.js"></script>
<!-- Flot plugins -->
<script src="style/vendors/flot.orderbars/js/jquery.flot.orderBars.js"></script>
<script src="style/vendors/flot-spline/js/jquery.flot.spline.min.js"></script>
<script src="style/vendors/flot.curvedlines/curvedLines.js"></script>
<!-- DateJS -->
<script src="style/vendors/DateJS/build/date.js"></script>
<!-- JQVMap -->
<script src="style/vendors/jqvmap/dist/jquery.vmap.js"></script>
<script src="style/vendors/jqvmap/dist/maps/jquery.vmap.world.js"></script>
<script src="style/vendors/jqvmap/examples/js/jquery.vmap.sampledata.js"></script>
<!-- bootstrap-daterangepicker -->
<script src="style/vendors/moment/min/moment.min.js"></script>
<script src="style/vendors/bootstrap-daterangepicker/daterangepicker.js"></script>

<!-- Custom Theme Scripts -->
<script src="style/build/js/custom.min.js"></script>

</html>