<!doctype html>
<html lang="en">


<!-- Mirrored from demo.riktheme.com/xvito/side-menu/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 03 Sep 2020 07:11:13 GMT -->

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Required meta tags -->

    <title>SIREKAN {{ $title }}</title>

    <!-- Favicon -->
    {{-- <link rel="icon" href="img/core-img/favicon.png"> --}}
    @stack('css')
    <!-- Master Stylesheet CSS -->
    <link rel="stylesheet" href="style-vito.css">
    <link rel="icon" type="image/png" href="{{ asset('logo-sirekan.png') }}" />


</head>

<body>
    <!-- Preloader -->
    <div id="preloader-area">
        <div class="lds-ripple">
            <div></div>
            <div></div>
        </div>
    </div>
    <!-- Preloader -->

    <!-- ======================================
    ******* Main Page Wrapper **********
    ======================================= -->

    <div class="main-container-wrapper">
        <!-- Top bar area -->
        <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
            <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
                <a class="navbar-brand brand-logo mr-5" href="{{ route('dashboard') }}"><img src="logo-sirekan2.png"
                        class="mr-2" alt="logo" /></a>
                <a class="navbar-brand brand-logo-mini" href="{{ route('dashboard') }}"><img src="logo-sirekan.png"
                        alt="logo" /></a>
            </div>
            <div class="navbar-menu-wrapper d-flex align-items-center justify-content-between">
                <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class="feather feather-menu">
                        <line x1="3" y1="12" x2="21" y2="12"></line>
                        <line x1="3" y1="6" x2="21" y2="6"></line>
                        <line x1="3" y1="18" x2="21" y2="18"></line>
                    </svg>
                </button>
                {{-- <ul class="navbar-nav mr-lg-2">
                    <li class="nav-item app-search d-none d-md-block">
                        <form role="search" class=""><input type="text" placeholder="Search..."
                                class="form-control">
                            <button type="submit" class="search-btn mr-0"><i class="fa fa-search"></i></button>
                        </form>
                    </li>
                </ul> --}}
                <ul class="top-navbar-area navbar-nav navbar-nav-right">
                    <li class="nav-item nav-profile dropdown dropdown-animate">
                        <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="profileDropdown">
                            <img src="img/member-img/contact-2.jpg" alt="profile" />
                        </a>
                        <div class="dropdown-menu dropdown-menu-right navbar-dropdown profile-top"
                            aria-labelledby="profileDropdown">
                            <a href="#" id="btn-out" class="dropdown-item"><i class="ti-unlink profile-icon"
                                    aria-hidden="true"></i>
                                Sign-out</a>
                            <form action="{{ route('logout') }}" method="post" id="logout-form">@csrf</form>
                            <script>
                                document.getElementById('btn-out').addEventListener("click", e => {
                                    document.getElementById('logout-form').submit();
                                })
                            </script>
                        </div>
                    </li>
                </ul>
                <button class="navbar-toggler navbar-toggler-right d-xl-none align-self-center" type="button"
                    data-toggle="offcanvas">
                    <span class="ti-layout-grid2"></span>
                </button>
            </div>
        </nav>

        <div class="container-fluid page-body-wrapper" style="margin-top: -20px !important;">
            <!-- Side Menu area -->
            @include('dashboard.sidebar')

            <!-- partial -->
            <div class="main-panel">
                <div class="content-wrapper">
                    <div class="container-fluid">
                        @yield('content')
                        <!-- / .row -->
                    </div>

                    <!-- Footer Area -->
                    <div class="container-fluid">
                        @include('dashboard.footer')
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Plugins Js -->
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/bundle.js"></script>
    <script src="js/default-assets/fullscreen.js"></script>

    <!-- Active JS -->
    <script src="js/canvas.js"></script>
    <script src="js/collapse.js"></script>
    <script src="js/settings.js"></script>
    <script src="js/template.js"></script>
    <script src="js/default-assets/active.js"></script>

    @stack('js')
    <!-- Inject JS -->
    {{-- <script src="js/default-assets/mini-event-calendar.min.js"></script>
    <script src="js/default-assets/mini-calendar-active.js"></script>
    <script src="js/default-assets/apexchart.min.js"></script> --}}
    {{-- <script src="js/default-assets/dashboard-active.js"></script> --}}
</body>


<!-- Mirrored from demo.riktheme.com/xvito/side-menu/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 03 Sep 2020 07:11:13 GMT -->

</html>
