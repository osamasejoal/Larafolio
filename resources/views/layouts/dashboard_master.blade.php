<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Focus Admin: Creative Admin Dashboard</title>
    <!-- ================= Favicon ================== -->
    <!-- Standard -->
    <link rel="shortcut icon" href="http://placehold.it/64.png/000/fff">
    <!-- Retina iPad Touch Icon-->
    <link rel="apple-touch-icon" sizes="144x144" href="http://placehold.it/144.png/000/fff">
    <!-- Retina iPhone Touch Icon-->
    <link rel="apple-touch-icon" sizes="114x114" href="http://placehold.it/114.png/000/fff">
    <!-- Standard iPad Touch Icon-->
    <link rel="apple-touch-icon" sizes="72x72" href="http://placehold.it/72.png/000/fff">
    <!-- Standard iPhone Touch Icon-->
    <link rel="apple-touch-icon" sizes="57x57" href="http://placehold.it/57.png/000/fff">
    <!-- Styles -->
    <link href="{{ asset('backend/assets/css/lib/calendar2/pignose.calendar.min.css') }}" rel="stylesheet">
    <link href="{{ asset('backend/assets/css/lib/chartist/chartist.min.css') }}" rel="stylesheet">
    <link href="{{ asset('backend/assets/css/lib/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('backend/assets/css/lib/themify-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('backend/assets/css/lib/owl.carousel.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('backend/assets/css/lib/owl.theme.default.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('backend/assets/css/lib/weather-icons.css') }}" rel="stylesheet" />
    <link href="{{ asset('backend/assets/css/lib/menubar/sidebar.css') }}" rel="stylesheet">
    <link href="{{ asset('backend/assets/css/lib/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('backend/assets/css/lib/helper.css') }}" rel="stylesheet">
    <link href="{{ asset('backend/assets/css/style.css') }}" rel="stylesheet">


    {{-- Style for Table in Banner/View --}}
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700' rel='stylesheet' type='text/css'>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="{{ asset('table_banner_view/css/style.css') }}">
    {{-- END Style for Table in Banner/View --}}


    {{-- Style for Form in Banner/Edit --}}
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link rel="stylesheet" href="{{ asset('form_banner_edit/style.css') }}">
    {{-- END Style for Form in Banner/Edit --}}
</head>

<body>

    <div class="sidebar sidebar-hide-to-small sidebar-shrink sidebar-gestures">
        <div class="nano">
            <div class="nano-content">
                <ul>
                    <div class="logo"><a href="index.html">
                            <!-- <img src="assets/images/logo.png" alt="" /> --><span>Focus</span>
                        </a></div>

                    <li>
                        <a href="{{ route('home') }}">
                            <i class="ti-home"></i>
                            Dashboard
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('banner.index') }}">
                            <i class="ti-bar-chart-alt"></i>
                            Banner
                        </a>
                    </li>
                    <li>
                        <a class="sidebar-sub-toggle" href="#">
                            <i class="ti-medall"></i>
                            Relative Companies
                            <span class="sidebar-collapse-icon ti-angle-down"></span>
                        </a>
                        <ul>
                            <li><a href="{{ route('relative_companies.create') }}">Add Companies</a></li>
                            <li><a href="{{route('relative_companies.index')}}">View Companies</a></li>
                        </ul>
                    </li>


                    {{-- <li>
                        <a class="sidebar-sub-toggle" href="#">
                            <i class="ti-bar-chart-alt"></i>
                            Zigzag
                            <span class="sidebar-collapse-icon ti-angle-down"></span>
                        </a>
                        <ul>
                            <li><a href="#">View Zigzag</a></li>
                            <li><a href="#">Edit Zigzag</a></li>
                        </ul>
                    </li> --}}
                    <li><a href="{{ route('logout') }}"
                            onclick="event.preventDefault(); document.getElementById('frm-logout').submit();"><i
                                class="ti-close"></i> Logout</a>
                        <form id="frm-logout" action="{{ route('logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- /# sidebar -->

    <div class="header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="float-left">
                        <div class="hamburger sidebar-toggle">
                            <span class="line"></span>
                            <span class="line"></span>
                            <span class="line"></span>
                        </div>
                    </div>
                    <div class="float-right">
                        <div class="dropdown dib">
                            <div class="header-icon" data-toggle="dropdown">
                                <i class="ti-bell"></i>
                                <div class="drop-down dropdown-menu dropdown-menu-right">
                                    <div class="dropdown-content-heading">
                                        <span class="text-left">Recent Notifications</span>
                                    </div>
                                    <div class="dropdown-content-body">
                                        <ul>
                                            <li>
                                                <a href="#">
                                                    <img class="pull-left m-r-10 avatar-img"
                                                        src="assets/images/avatar/3.jpg" alt="" />
                                                    <div class="notification-content">
                                                        <small class="notification-timestamp pull-right">02:34
                                                            PM</small>
                                                        <div class="notification-heading">Mr. John</div>
                                                        <div class="notification-text">5 members joined today </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <img class="pull-left m-r-10 avatar-img"
                                                        src="assets/images/avatar/3.jpg" alt="" />
                                                    <div class="notification-content">
                                                        <small class="notification-timestamp pull-right">02:34
                                                            PM</small>
                                                        <div class="notification-heading">Mariam</div>
                                                        <div class="notification-text">likes a photo of you</div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <img class="pull-left m-r-10 avatar-img"
                                                        src="assets/images/avatar/3.jpg" alt="" />
                                                    <div class="notification-content">
                                                        <small class="notification-timestamp pull-right">02:34
                                                            PM</small>
                                                        <div class="notification-heading">Tasnim</div>
                                                        <div class="notification-text">Hi Teddy, Just wanted to let you
                                                            ...</div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <img class="pull-left m-r-10 avatar-img"
                                                        src="assets/images/avatar/3.jpg" alt="" />
                                                    <div class="notification-content">
                                                        <small class="notification-timestamp pull-right">02:34
                                                            PM</small>
                                                        <div class="notification-heading">Mr. John</div>
                                                        <div class="notification-text">Hi Teddy, Just wanted to let you
                                                            ...</div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="text-center">
                                                <a href="#" class="more-link">See All</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="dropdown dib">
                            <div class="header-icon" data-toggle="dropdown">
                                <i class="ti-email"></i>
                                <div class="drop-down dropdown-menu dropdown-menu-right">
                                    <div class="dropdown-content-heading">
                                        <span class="text-left">2 New Messages</span>
                                        <a href="email.html">
                                            <i class="ti-pencil-alt pull-right"></i>
                                        </a>
                                    </div>
                                    <div class="dropdown-content-body">
                                        <ul>
                                            <li class="notification-unread">
                                                <a href="#">
                                                    <img class="pull-left m-r-10 avatar-img"
                                                        src="assets/images/avatar/1.jpg" alt="" />
                                                    <div class="notification-content">
                                                        <small class="notification-timestamp pull-right">02:34
                                                            PM</small>
                                                        <div class="notification-heading">Michael Qin</div>
                                                        <div class="notification-text">Hi Teddy, Just wanted to let you
                                                            ...</div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="notification-unread">
                                                <a href="#">
                                                    <img class="pull-left m-r-10 avatar-img"
                                                        src="assets/images/avatar/2.jpg" alt="" />
                                                    <div class="notification-content">
                                                        <small class="notification-timestamp pull-right">02:34
                                                            PM</small>
                                                        <div class="notification-heading">Mr. John</div>
                                                        <div class="notification-text">Hi Teddy, Just wanted to let you
                                                            ...</div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <img class="pull-left m-r-10 avatar-img"
                                                        src="assets/images/avatar/3.jpg" alt="" />
                                                    <div class="notification-content">
                                                        <small class="notification-timestamp pull-right">02:34
                                                            PM</small>
                                                        <div class="notification-heading">Michael Qin</div>
                                                        <div class="notification-text">Hi Teddy, Just wanted to let you
                                                            ...</div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <img class="pull-left m-r-10 avatar-img"
                                                        src="assets/images/avatar/2.jpg" alt="" />
                                                    <div class="notification-content">
                                                        <small class="notification-timestamp pull-right">02:34
                                                            PM</small>
                                                        <div class="notification-heading">Mr. John</div>
                                                        <div class="notification-text">Hi Teddy, Just wanted to let you
                                                            ...</div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li class="text-center">
                                                <a href="#" class="more-link">See All</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="dropdown dib">
                            <div class="header-icon" data-toggle="dropdown">
                                <span class="user-avatar">John
                                    <i class="ti-angle-down f-s-10"></i>
                                </span>
                                <div class="drop-down dropdown-profile dropdown-menu dropdown-menu-right">
                                    <div class="dropdown-content-heading">
                                        <span class="text-left">Upgrade Now</span>
                                        <p class="trial-day">30 Days Trail</p>
                                    </div>
                                    <div class="dropdown-content-body">
                                        <ul>
                                            <li>
                                                <a href="#">
                                                    <i class="ti-user"></i>
                                                    <span>Profile</span>
                                                </a>
                                            </li>

                                            <li>
                                                <a href="#">
                                                    <i class="ti-email"></i>
                                                    <span>Inbox</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <i class="ti-settings"></i>
                                                    <span>Setting</span>
                                                </a>
                                            </li>

                                            <li>
                                                <a href="#">
                                                    <i class="ti-lock"></i>
                                                    <span>Lock Screen</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="{{ route('logout') }}"
                                                    onclick="event.preventDefault(); document.getElementById('frm-logout').submit();">
                                                    <i class="ti-power-off"></i>
                                                    <span>Logout</span>
                                                </a>
                                                <form id="frm-logout" action="{{ route('logout') }}" method="POST"
                                                    style="display: none;">
                                                    {{ csrf_field() }}
                                                </form>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>




    @yield('dashboard_content')




    <!-- jquery vendor -->
    <script src="{{ asset('backend/assets/js/lib/jquery.min.js') }}"></script>
    <script src="{{ asset('backend/assets/js/lib/jquery.nanoscroller.min.js') }}"></script>
    <!-- nano scroller -->
    <script src="{{ asset('backend/assets/js/lib/menubar/sidebar.js') }}"></script>
    <script src="{{ asset('backend/assets/js/lib/preloader/pace.min.js') }}"></script>
    <!-- sidebar -->

    <script src="{{ asset('backend/assets/js/lib/bootstrap.min.js') }}"></script>
    <script src="{{ asset('backend/assets/js/scripts.js') }}"></script>
    <!-- bootstrap -->

    <script src="{{ asset('backend/assets/js/lib/calendar-2/moment.latest.min.js') }}"></script>
    <script src="{{ asset('backend/assets/js/lib/calendar-2/pignose.calendar.min.js') }}"></script>
    <script src="{{ asset('backend/assets/js/lib/calendar-2/pignose.init.js') }}"></script>


    <script src="{{ asset('backend/assets/js/lib/weather/jquery.simpleWeather.min.js') }}"></script>
    <script src="{{ asset('backend/assets/js/lib/weather/weather-init.js') }}"></script>
    <script src="{{ asset('backend/assets/js/lib/circle-progress/circle-progress.min.js') }}"></script>
    <script src="{{ asset('backend/assets/js/lib/circle-progress/circle-progress-init.js') }}"></script>
    <script src="{{ asset('backend/assets/js/lib/chartist/chartist.min.js') }}"></script>
    <script src="{{ asset('backend/assets/js/lib/sparklinechart/jquery.sparkline.min.js') }}"></script>
    <script src="{{ asset('backend/assets/js/lib/sparklinechart/sparkline.init.js') }}"></script>
    <script src="{{ asset('backend/assets/js/lib/owl-carousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('backend/assets/js/lib/owl-carousel/owl.carousel-init.js') }}"></script>
    <!-- scripit init-->
    <script src="{{ asset('backend/assets/js/dashboard2.js') }}"></script>


    {{-- Script for Table in Banner/View --}}
    <script src="{{ asset('table_banner_view/js/jquery.min.js') }}"></script>
    <script src="{{ asset('table_banner_view/js/popper.js') }}"></script>
    <script src="{{ asset('table_banner_view/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('table_banner_view/js/main.js') }}"></script>
    {{-- END Script for Table in Banner/View --}}


    {{-- Script for Form in Banner/Edit --}}
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    {{-- END Script for Form in Banner/Edit --}}
</body>

</html>
