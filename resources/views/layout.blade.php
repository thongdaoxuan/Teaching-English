<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
    <meta name="author" content="GeeksLabs">
    <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
    <link rel="shortcut icon" href="{{ asset('public/vendors/img/favicon.png')}}">

    <title>English For Children Admin</title>
    <!-- Bootstrap CSS -->
    <link href="{{ asset('public/vendors/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{ asset('public/css/app.css')}}" rel="stylesheet">
    <!-- bootstrap theme -->
    <link href="{{ asset('public/vendors/css/bootstrap-theme.css')}}" rel="stylesheet">
    <!--external css-->
    <!-- font icon -->
    <link href="{{ asset('public/vendors/css/select2.min.css')}}" rel="stylesheet" />
    <link href="{{ asset('public/vendors/css/elegant-icons-style.css')}}" rel="stylesheet" />
    <link href="{{ asset('public/vendors/css/font-awesome.min.css')}}" rel="stylesheet" />
    <!-- full calendar css-->
    <link href="{{ asset('public/vendors/assets/fullcalendar/fullcalendar/bootstrap-fullcalendar.css')}}" rel="stylesheet" />
    <link href="{{ asset('public/vendors/assets/fullcalendar/fullcalendar/fullcalendar.css')}}" rel="stylesheet" />
    <!-- easy pie chart-->
    <link href="{{ asset('public/vendors/assets/jquery-easy-pie-chart/jquery.easy-pie-chart.css')}}" rel="stylesheet" type="text/css" media="screen" />
    <!-- owl carousel -->
    <link rel="stylesheet" href="{{ asset('public/vendors/css/owl.carousel.css')}}" type="text/css">
    <link href="{{ asset('public/vendors/css/jquery-jvectormap-1.2.2.css')}}" rel="stylesheet">
    <!-- Custom styles -->
    <link rel="stylesheet" href="{{ asset('public/vendors/css/fullcalendar.css')}}">
    <link href="{{ asset('public/vendors/css/widgets.css')}}" rel="stylesheet">
    <link href="{{ asset('public/vendors/css/style.css')}}" rel="stylesheet">
    <link href="{{ asset('public/vendors/css/style-responsive.css')}}" rel="stylesheet" />
    <link href="{{ asset('public/vendors/css/xcharts.min.css')}}" rel=" stylesheet">
    <link href="{{ asset('public/vendors/css/bootstrap-tagsinput.css')}}" rel=" stylesheet">

    <link href="{{ asset('public/vendors/css/jquery-ui-1.10.4.min.css')}}" rel="stylesheet">
    <script src="{{ asset('public/vendors/js/jquery.js')}}"></script>
    <script src="{{ asset('public/vendors/js/jquery-ui-1.10.4.min.js')}}"></script>
    <script src="{{ asset('public/vendors/js/jquery-1.8.3.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('public/vendors/js/jquery-ui-1.9.2.custom.min.js')}}"></script>
</head>

<body>
<!-- container section start -->
<section id="container" class="">


    <header class="header dark-bg">
        <div class="toggle-nav">
            <div class="icon-reorder tooltips" data-original-title="Toggle Navigation" data-placement="bottom"><i class="icon_menu"></i></div>
        </div>
        <!--logo start-->
        <a href="/" class="logo">English <span class="lite">For Children Admin</span></a>
        <!--logo end-->

        <div class="nav search-row" id="top_menu">

        </div>

        <div class="top-nav notification-row">
            <!-- notificatoin dropdown start-->
            <ul class="nav pull-right top-menu">


                <li class="dropdown">
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <span class="profile-ava">
                                <img alt="" src="{{ asset('public/vendors/img/avatar-mini4.jpg')}}" style="width:34px; height:34px">
                            </span>
                        <span class="username">{{ Auth::user()->name }}</span>
                        <b class="caret"></b>
                    </a>
                    <ul class="dropdown-menu extended logout">
                        <div class="log-arrow-up"></div>
                        <li>
                            <a href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                Logout
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>
                        </li>

                    </ul>
                </li>
                <!-- user login dropdown end -->
            </ul>
            <!-- notificatoin dropdown end-->
        </div>
    </header>
    <!--header end-->

    <!--sidebar start-->
    <aside>
        <div id="sidebar" class="nav-collapse ">
            <!-- sidebar menu start-->
            <ul class="sidebar-menu">
                <li class="active">
                    <a class="" href="/">
                        <i class="icon_house_alt"></i>
                        <span>Dashboard</span>
                    </a>
                </li>
                <li class="sub-menu">
                    <a href="javascript:;" class="">
                        <i class="icon_document_alt"></i>
                        <span>Category</span>
                        <span class="menu-arrow arrow_carrot-right"></span>
                    </a>
                    <ul class="sub">
                        <li><a class="" href="{{ route('categories.index') }}">Categories</a></li>
                        <li><a class="" href="{{ route('categories.create') }}">Add</a></li>
                    </ul>
                </li>
                <li class="sub-menu">
                    <a href="javascript:;" class="">
                        <i class="icon_question"></i>
                        <span>Question</span>
                        <span class="menu-arrow arrow_carrot-right"></span>
                    </a>
                    <ul class="sub">
                        <li><a class="" href="{{ route('questions.index') }}">Questions</a></li>
                        <li><a class="" href="">Add</a></li>
                    </ul>
                </li>
                <li class="sub-menu">
                    <a href="javascript:;" class="">
                        <i class="icon_profile"></i>
                        <span>Accounts</span>
                        <span class="menu-arrow arrow_carrot-right"></span>
                    </a>
                    <ul class="sub">
                        <li><a class="" href="">Users</a></li>
                    </ul>
                </li>
            </ul>
            <!-- sidebar menu end-->
        </div>
    </aside>
    <!--sidebar end-->

    <!--main content start-->
    <section id="main-content">
        <section class="wrapper">
            <!--overview start-->
            <div class="row">
                <div class="col-md-12">
                    @yield('content')
                </div>
            </div>
        </section>
        <div class="text-right">
            <div class="credits">
            </div>
        </div>
    </section>
    <!--main content end-->
</section>
<!-- container section start -->

<!-- javascripts -->

<!-- bootstrap -->
<script src="{{ asset('public/vendors/js/bootstrap.min.js')}}"></script>
<!-- nice scroll -->
<script src="{{ asset('public/vendors/js/jquery.scrollTo.min.js')}}"></script>
<script src="{{ asset('public/vendors/js/jquery.nicescroll.js')}}" type="text/javascript"></script>
<!-- charts scripts -->
<script src="{{ asset('public/vendors/assets/jquery-knob/js/jquery.knob.js')}}"></script>
<script src="{{ asset('public/vendors/js/jquery.sparkline.js')}}" type="text/javascript"></script>
<script src="{{ asset('public/vendors/assets/jquery-easy-pie-chart/jquery.easy-pie-chart.js')}}"></script>
<script src="{{ asset('public/vendors/js/owl.carousel.js')}}"></script>
<!-- jQuery full calendar -->
<script src="{{ asset('public/vendors/js/fullcalendar.min.js')}}"></script>
<!-- Full Google Calendar - Calendar -->
<script src="{{ asset('public/vendors/assets/fullcalendar/fullcalendar/fullcalendar.js')}}"></script>
<!--script for this page only-->
<script src="{{ asset('public/vendors/js/calendar-custom.js')}}"></script>
<script src="{{ asset('public/vendors/js/jquery.rateit.min.js')}}"></script>
<!-- custom select -->
<script src="{{ asset('public/vendors/js/jquery.customSelect.min.js')}}"></script>
<script src="{{ asset('public/vendors/assets/chart-master/Chart.js')}}"></script>

<!--custome script for all page-->
<script src="{{ asset('public/vendors/js/scripts.js')}}"></script>
<!-- custom script for this page-->
<script src="{{ asset('public/vendors/js/sparkline-chart.js')}}"></script>
<script src="{{ asset('public/vendors/js/easy-pie-chart.js')}}"></script>
<script src="{{ asset('public/vendors/js/jquery-jvectormap-1.2.2.min.js')}}"></script>
<script src="{{ asset('public/vendors/js/jquery-jvectormap-world-mill-en.js')}}"></script>
<script src="{{ asset('public/vendors/js/xcharts.min.js')}}"></script>
<script src="{{ asset('public/vendors/js/jquery.autosize.min.js')}}"></script>
<script src="{{ asset('public/vendors/js/jquery.placeholder.min.js')}}"></script>
<script src="{{ asset('public/vendors/js/gdp-data.js')}}"></script>
<script src="{{ asset('public/vendors/js/morris.min.js')}}"></script>
<script src="{{ asset('public/vendors/js/sparklines.js')}}"></script>
<script src="{{ asset('public/vendors/js/charts.js')}}"></script>
<script src="{{ asset('public/vendors/js/bootstrap-datepicker.min.js')}}"></script>
<script src="{{ asset('public/vendors/js/jquery.slimscroll.min.js')}}"></script>
<script src="{{ asset('public/vendors/js/bootstrap-datepicker.min.js')}}"></script>
<script src="{{ asset('public/vendors/js/bootstrap-toggle.min.js')}}"></script>
<script src="{{ asset('public/vendors/js/tinymce/tinymce.min.js')}}"></script>
<script src="{{ asset('public/vendors/js/bootstrap-tagsinput.js')}}"></script>
<script src="{{ asset('public/vendors/js/select2.min.js')}}"></script>
<script>tinymce.init({ selector:'.body', plugins: "paste", toolbar: "paste",forced_root_block : false,menubar: 'file edit insert view format table tools'});</script>
</body>

</html>