<html lang="en" dir="ltr">

<!-- Mirrored from templates.iqonic.design/hope-ui/pro/html/dashboard/alternate-dashboard.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 31 Aug 2023 12:46:28 GMT -->

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>{{ config('app.name') }}</title>
    <meta name="description" content="Laravel Crud Generator">
    <meta name="keywords" content="Laravel Crud Generator">
    <meta name="author" content="Aang Wiadi">
    <meta name="DC.title" content="Laravel Crud Generator">
    <!-- Google Font Api KEY-->
    <meta name="google_font_api" content="AIzaSyBG58yNdAjc20_8jAvLNSVi9E4Xhwjau_k">
    <!-- Config Options -->
    <meta name="setting_options"
        content='{&quot;saveLocal&quot;:&quot;sessionStorage&quot;,&quot;storeKey&quot;:&quot;huisetting-html&quot;,&quot;setting&quot;:{&quot;app_name&quot;:{&quot;value&quot;:&quot;Hope UI&quot;},&quot;theme_scheme_direction&quot;:{&quot;value&quot;:&quot;ltr&quot;},&quot;theme_scheme&quot;:{&quot;value&quot;:&quot;light&quot;},&quot;theme_style_appearance&quot;:{&quot;value&quot;:[&quot;theme-default&quot;]},&quot;theme_color&quot;:{&quot;colors&quot;:{&quot;--{{ 'prefix' }}primary&quot;:&quot;#3a57e8&quot;,&quot;--{{ 'prefix' }}info&quot;:&quot;#08B1BA&quot;},&quot;value&quot;:&quot;theme-color-default&quot;},&quot;theme_transition&quot;:{&quot;value&quot;:&quot;theme-with-animation&quot;},&quot;theme_font_size&quot;:{&quot;value&quot;:&quot;theme-fs-md&quot;},&quot;page_layout&quot;:{&quot;value&quot;:&quot;container-fluid&quot;},&quot;header_navbar&quot;:{&quot;value&quot;:&quot;default&quot;},&quot;header_banner&quot;:{&quot;value&quot;:&quot;default&quot;},&quot;sidebar_color&quot;:{&quot;value&quot;:&quot;sidebar-white&quot;},&quot;card_color&quot;:{&quot;value&quot;:&quot;card-default&quot;},&quot;sidebar_type&quot;:{&quot;value&quot;:[]},&quot;sidebar_menu_style&quot;:{&quot;value&quot;:&quot;left-bordered&quot;},&quot;footer&quot;:{&quot;value&quot;:&quot;default&quot;},&quot;body_font_family&quot;:{&quot;value&quot;:null},&quot;heading_font_family&quot;:{&quot;value&quot;:null}}}'>
    <!-- Favicon -->
    <link rel="shortcut icon" href="https://templates.iqonic.design/hope-ui/pro/html/assets/images/favicon.ico" />
    <!-- Library / Plugin Css Build -->
    <link rel="stylesheet" href="{{ asset('vendor/laravel-crud-generator/css/core/libs.min.css') }}" />
    <!-- SwiperSlider css -->
    <link rel="stylesheet" href="{{ asset('vendor/laravel-crud-generator/vendor/swiperSlider/swiper-bundle.min.css') }}">
    <!-- Hope Ui Design System Css -->
    <link rel="stylesheet" href="{{ asset('vendor/laravel-crud-generator/css/hope-ui.mind1f1.css?v=2.2.0') }}" />
    <link rel="stylesheet" href="{{ asset('vendor/laravel-crud-generator/css/pro.mind1f1.css?v=2.2.0') }}" />
    <!-- Custom Css -->
    <link rel="stylesheet" href="{{ asset('vendor/laravel-crud-generator/css/custom.mind1f1.css?v=2.2.0') }}" />
    <!-- Dark Css -->
    <link rel="stylesheet" href="{{ asset('vendor/laravel-crud-generator/css/dark.mind1f1.css?v=2.2.0') }}" />
    <!-- Customizer Css -->
    <link rel="stylesheet" href="{{ asset('vendor/laravel-crud-generator/css/customizer.mind1f1.css?v=2.2.0') }}" />
    <!-- RTL Css -->
    <link rel="stylesheet" href="{{ asset('vendor/laravel-crud-generator/css/rtl.mind1f1.css?v=2.2.0') }}" />
    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;700&amp;display=swap" rel="stylesheet">

</head>

<body class="  ">
    <!-- loader Start -->
    <div id="loading">
        <div class="loader simple-loader">
            <div class="loader-body">
                <img src="https://templates.iqonic.design/hope-ui/pro/html/assets/images/loader.webp" alt="loader"
                    class="light-loader img-fluid w-25" width="200" height="200">
            </div>
        </div>
    </div>
    <!-- loader END -->
    {{-- @include('layouts.sidebar') --}}

    <main class="main-content ">
        <div class="position-relative no-printme">
            <!--Nav Start-->
            <nav class="nav navbar navbar-expand-xl navbar-light iq-navbar header-hover-menu left-border">
                <div class="container-fluid navbar-inner">
                    <a href="#" class="navbar-brand">

                        <!--Logo start-->
                        <div class="logo-main no-printme">
                            <div class="logo-normal">
                                <svg class="text-primary icon-30" viewBox="0 0 30 30" fill="none"
                                    xmlns="https://www.w3.org/2000/svg">
                                    <rect x="-0.757324" y="19.2427" width="28" height="4" rx="2"
                                        transform="rotate(-45 -0.757324 19.2427)" fill="currentColor" />
                                    <rect x="7.72803" y="27.728" width="28" height="4" rx="2"
                                        transform="rotate(-45 7.72803 27.728)" fill="currentColor" />
                                    <rect x="10.5366" y="16.3945" width="16" height="4" rx="2"
                                        transform="rotate(45 10.5366 16.3945)" fill="currentColor" />
                                    <rect x="10.5562" y="-0.556152" width="28" height="4" rx="2"
                                        transform="rotate(45 10.5562 -0.556152)" fill="currentColor" />
                                </svg>
                            </div>
                            <div class="logo-mini">
                                <svg class="text-primary icon-30" viewBox="0 0 30 30" fill="none"
                                    xmlns="https://www.w3.org/2000/svg">
                                    <rect x="-0.757324" y="19.2427" width="28" height="4" rx="2"
                                        transform="rotate(-45 -0.757324 19.2427)" fill="currentColor" />
                                    <rect x="7.72803" y="27.728" width="28" height="4" rx="2"
                                        transform="rotate(-45 7.72803 27.728)" fill="currentColor" />
                                    <rect x="10.5366" y="16.3945" width="16" height="4" rx="2"
                                        transform="rotate(45 10.5366 16.3945)" fill="currentColor" />
                                    <rect x="10.5562" y="-0.556152" width="28" height="4" rx="2"
                                        transform="rotate(45 10.5562 -0.556152)" fill="currentColor" />
                                </svg>
                            </div>
                        </div>
                        <!--logo End-->
                        <h4 class="logo-title d-block d-xl-none" data-setting="app_name">Hope UI</h4>
                    </a>
                    <div class="sidebar-toggle" data-toggle="sidebar" data-active="true">
                        <i class="icon d-flex">
                            <svg class="icon-20" width="20" viewBox="0 0 24 24">
                                <path fill="currentColor"
                                    d="M4,11V13H16L10.5,18.5L11.92,19.92L19.84,12L11.92,4.08L10.5,5.5L16,11H4Z" />
                            </svg>
                        </i>
                    </div>
                    <div class="d-flex align-items-center justify-content-between product-offcanvas">
                        <div class="breadcrumb-title border-end me-3 pe-3 d-none d-xl-block">
                            <small class="mb-0 text-capitalize">{{ config('app.name') }}</small>
                        </div>
                        <div class="offcanvas offcanvas-end shadow-none iq-product-menu-responsive" tabindex="-1"
                            id="offcanvasBottom">
                            <div class="offcanvas-body">
                                <ul class="iq-nav-menu list-unstyled">
                                    <li class="nav-item active">
                                        <a target="_blank" class="nav-link menu-arrow justify-content-start"
                                            href="{{ url('/admin/presensi/add/#') }}" role="button"
                                            aria-expanded="false" aria-controls="homeData">
                                            <svg class="icon-20" width="20" viewBox="0 0 24 24"
                                                fill="currentColor" xmlns="https://www.w3.org/2000/svg">
                                                <path
                                                    d="M9.14373 20.7821V17.7152C9.14372 16.9381 9.77567 16.3067 10.5584 16.3018H13.4326C14.2189 16.3018 14.8563 16.9346 14.8563 17.7152V20.7732C14.8562 21.4473 15.404 21.9951 16.0829 22H18.0438C18.9596 22.0023 19.8388 21.6428 20.4872 21.0007C21.1356 20.3586 21.5 19.4868 21.5 18.5775V9.86585C21.5 9.13139 21.1721 8.43471 20.6046 7.9635L13.943 2.67427C12.7785 1.74912 11.1154 1.77901 9.98539 2.74538L3.46701 7.9635C2.87274 8.42082 2.51755 9.11956 2.5 9.86585V18.5686C2.5 20.4637 4.04738 22 5.95617 22H7.87229C8.19917 22.0023 8.51349 21.8751 8.74547 21.6464C8.97746 21.4178 9.10793 21.1067 9.10792 20.7821H9.14373Z"
                                                    fill="currentColor" />
                                            </svg>
                                            <span class="nav-text ms-2">Display</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex align-items-center">
                        <button id="navbar-toggle" class="navbar-toggler" type="button" data-bs-toggle="collapse"
                            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon">
                                <span class="navbar-toggler-bar bar1 mt-1"></span>
                                <span class="navbar-toggler-bar bar2"></span>
                                <span class="navbar-toggler-bar bar3"></span>
                            </span>
                        </button>
                    </div>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="mb-2 navbar-nav ms-auto align-items-center navbar-list mb-lg-0">
                            <li class="nav-item dropdown me-0 me-xl-3">
                                <div class="d-flex align-items-center mr-2 iq-font-style" role="group"
                                    aria-label="First group" data-setting="radio">
                                    <input type="radio" class="btn-check" name="theme_font_size"
                                        value="theme-fs-sm" id="font-size-sm">
                                    <label for="font-size-sm" class="btn btn-border border-0 btn-icon btn-sm"
                                        data-bs-toggle="tooltip" title="Font size 14px" data-bs-placement="bottom">
                                        <span class="mb-0 h6" style="color: inherit !important;">A</span>
                                    </label>
                                    <input type="radio" class="btn-check" name="theme_font_size"
                                        value="theme-fs-md" id="font-size-md">
                                    <label for="font-size-md" class="btn btn-border border-0 btn-icon"
                                        data-bs-toggle="tooltip" title="Font size 16px" data-bs-placement="bottom">
                                        <span class="mb-0 h4" style="color: inherit !important;">A</span>
                                    </label>
                                    <input type="radio" class="btn-check" name="theme_font_size"
                                        value="theme-fs-lg" id="font-size-lg">
                                    <label for="font-size-lg" class="btn btn-border border-0 btn-icon"
                                        data-bs-toggle="tooltip" title="Font size 18px" data-bs-placement="bottom">
                                        <span class="mb-0 h2" style="color: inherit !important;">A</span>
                                    </label>
                                </div>
                            </li>
                            <li class="nav-item dropdown" id="itemdropdown1">
                                <a class="py-0 nav-link d-flex align-items-center" href="#" id="navbarDropdown"
                                    role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <div class="btn btn-primary btn-icon btn-sm rounded-pill">
                                        <span class="btn-inner">
                                            <svg class="icon-32" width="32" viewBox="0 0 24 24" fill="none"
                                                xmlns="https://www.w3.org/2000/svg">
                                                <path
                                                    d="M11.997 15.1746C7.684 15.1746 4 15.8546 4 18.5746C4 21.2956 7.661 21.9996 11.997 21.9996C16.31 21.9996 19.994 21.3206 19.994 18.5996C19.994 15.8786 16.334 15.1746 11.997 15.1746Z"
                                                    fill="currentColor"></path>
                                                <path opacity="0.4"
                                                    d="M11.9971 12.5838C14.9351 12.5838 17.2891 10.2288 17.2891 7.29176C17.2891 4.35476 14.9351 1.99976 11.9971 1.99976C9.06008 1.99976 6.70508 4.35476 6.70508 7.29176C6.70508 10.2288 9.06008 12.5838 11.9971 12.5838Z"
                                                    fill="currentColor"></path>
                                            </svg>
                                        </span>
                                    </div>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <li>
                                        <a class="dropdown-item" href="app/user-profile.html">Profile</a>
                                    </li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="{{ url('user/logout') }}">Logout</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item iq-full-screen d-none d-xl-block" id="fullscreen-item">
                                <a href="#" class="nav-link" id="btnFullscreen" data-bs-toggle="dropdown">
                                    <div class="btn btn-primary btn-icon btn-sm rounded-pill">
                                        <span class="btn-inner">
                                            <svg class="normal-screen icon-24" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none"
                                                xmlns="https://www.w3.org/2000/svg">
                                                <path d="M18.5528 5.99656L13.8595 10.8961" stroke="white"
                                                    stroke-width="1.5" stroke-linecap="round"
                                                    stroke-linejoin="round"></path>
                                                <path d="M14.8016 5.97618L18.5524 5.99629L18.5176 9.96906"
                                                    stroke="white" stroke-width="1.5" stroke-linecap="round"
                                                    stroke-linejoin="round"></path>
                                                <path d="M5.8574 18.896L10.5507 13.9964" stroke="white"
                                                    stroke-width="1.5" stroke-linecap="round"
                                                    stroke-linejoin="round"></path>
                                                <path d="M9.60852 18.9164L5.85775 18.8963L5.89258 14.9235"
                                                    stroke="white" stroke-width="1.5" stroke-linecap="round"
                                                    stroke-linejoin="round"></path>
                                            </svg>
                                            <svg class="full-normal-screen d-none icon-24" width="24"
                                                height="24" viewBox="0 0 24 24" fill="none"
                                                xmlns="https://www.w3.org/2000/svg">
                                                <path d="M13.7542 10.1932L18.1867 5.79319" stroke="white"
                                                    stroke-width="1.5" stroke-linecap="round"
                                                    stroke-linejoin="round"></path>
                                                <path d="M17.2976 10.212L13.7547 10.1934L13.7871 6.62518"
                                                    stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                                    stroke-linejoin="round"></path>
                                                <path d="M10.4224 13.5726L5.82149 18.1398" stroke="white"
                                                    stroke-width="1.5" stroke-linecap="round"
                                                    stroke-linejoin="round"></path>
                                                <path d="M6.74391 13.5535L10.4209 13.5723L10.3867 17.2755"
                                                    stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                                    stroke-linejoin="round"></path>
                                            </svg>
                                        </span>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav> <!--Nav End-->
        </div>

        @yield('content')

        <!-- Footer Section Start -->
        <footer class="footer no-printme">
            <div class="footer-body">
                <div class="right-panel">
                    ©
                    <script>
                        2022
                    </script> <span data-setting="app_name">2022 Hope UI</span>, Rembon

                </div>
            </div>
        </footer>
    </main>
    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdrop" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body">
                    <form action="#" autocomplete="off">
                        <h3 class="text-center">Sign In</h3>
                        <p class="text-center">Sign in to stay connected</p>
                        <div class="form-group">
                            <label class="form-label">Email address</label>
                            <input type="email" class="form-control mb-0" placeholder="Enter email"
                                autocomplete="off">
                        </div>
                        <div class="form-group">
                            <label class="form-label">Password</label>
                            <input type="password" class="form-control mb-0" placeholder="Enter password"
                                autocomplete="off">
                        </div>
                        <div class="d-flex justify-content-between">
                            <div class="form-check d-inline-block mt-2 pt-1">
                                <input type="checkbox" class="form-check-input" id="customCheck11">
                                <label class="form-check-label" for="customCheck11">Remember Me</label>
                            </div>
                            <a href="#">Forget password</a>
                        </div>
                        <div class="text-center pb-3">
                            <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Sign in</button>
                        </div>
                        <p class="text-center">Or sign in with other accounts?</p>
                        <div class="d-flex justify-content-center">
                            <ul class="list-group list-group-horizontal list-group-flush">
                                <li class="list-group-item border-0 pb-0">
                                    <a href="#"><img
                                            src="https://templates.iqonic.design/hope-ui/pro/html/assets/images/brands/fb.svg"
                                            alt="fb" loading="lazy"></a>
                                </li>
                                <li class="list-group-item border-0 pb-0">
                                    <a href="#"><img
                                            src="https://templates.iqonic.design/hope-ui/pro/html/assets/images/brands/gm.svg"
                                            alt="gm" loading="lazy"></a>
                                </li>
                                <li class="list-group-item border-0 pb-0">
                                    <a href="#"><img
                                            src="https://templates.iqonic.design/hope-ui/pro/html/assets/images/brands/im.svg"
                                            alt="im" loading="lazy"></a>
                                </li>
                                <li class="list-group-item border-0 pb-0">
                                    <a href="#"><img
                                            src="https://templates.iqonic.design/hope-ui/pro/html/assets/images/brands/li.svg"
                                            alt="li" loading="lazy"></a>
                                </li>
                            </ul>
                        </div>
                        <p class="text-center">Don't have account?<a href="#"> Click here to sign up.</a></p>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="staticBackdrop1" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdrop1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body">
                    <form action="#">
                        <h3 class="text-center">Sign Up</h3>
                        <p class="text-center">Create your Hope UI account</p>
                        <div class="d-flex justify-content-between">
                            <div class="form-group me-3">
                                <label class="form-label">First Name</label>
                                <input type="text" class="form-control mb-0" placeholder="Enter First Name"
                                    autocomplete="off">
                            </div>
                            <div class="form-group">
                                <label class="form-label">Last Name</label>
                                <input type="text" class="form-control mb-0" placeholder="Enter Last Name"
                                    autocomplete="off">
                            </div>
                        </div>
                        <div class="d-flex justify-content-between">
                            <div class="form-group me-3">
                                <label class="form-label">Email</label>
                                <input type="email" class="form-control mb-0" placeholder="Enter Email"
                                    autocomplete="off">
                            </div>
                            <div class="form-group">
                                <label class="form-label">Phone No.</label>
                                <input type="tel" class="form-control mb-0" placeholder="Enter Phone Number"
                                    autocomplete="off">
                            </div>
                        </div>
                        <div class="d-flex justify-content-between">
                            <div class="form-group me-3">
                                <label class="form-label">Password</label>
                                <input type="password" class="form-control mb-0" placeholder="Enter Password"
                                    autocomplete="off">
                            </div>
                            <div class="form-group">
                                <label class="form-label">Confirm Password</label>
                                <input type="password" class="form-control mb-0" placeholder="Enter Confirm Password"
                                    autocomplete="off">
                            </div>
                        </div>
                        <div class="text-center pb-3">
                            <input type="checkbox" class="form-check-input" id="customCheck112">
                            <label class="form-check-label" for="customCheck112">I agree with the terms of use</label>
                        </div>
                        <div class="text-center pb-3">
                            <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Sign in</button>
                        </div>
                        <p class="text-center">Or sign in with other accounts?</p>
                        <div class="d-flex justify-content-center">
                            <ul class="list-group list-group-horizontal list-group-flush">
                                <li class="list-group-item border-0 pb-0">
                                    <a href="#"><img
                                            src="https://templates.iqonic.design/hope-ui/pro/html/assets/images/brands/fb.svg"
                                            alt="fb" loading="lazy"></a>
                                </li>
                                <li class="list-group-item border-0 pb-0">
                                    <a href="#"><img
                                            src="https://templates.iqonic.design/hope-ui/pro/html/assets/images/brands/gm.svg"
                                            alt="gm" loading="lazy"></a>
                                </li>
                                <li class="list-group-item border-0 pb-0">
                                    <a href="#"><img
                                            src="https://templates.iqonic.design/hope-ui/pro/html/assets/images/brands/im.svg"
                                            alt="im" loading="lazy"></a>
                                </li>
                                <li class="list-group-item border-0 pb-0">
                                    <a href="#"><img
                                            src="https://templates.iqonic.design/hope-ui/pro/html/assets/images/brands/li.svg"
                                            alt="li" loading="lazy"></a>
                                </li>
                            </ul>
                        </div>
                        <p class="text-center">Already have an Account<a href="#">Sign in</a></p>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Library Bundle Script -->
    <script src="{{ asset('vendor/laravel-crud-generator/js/core/libs.min.js') }}"></script>
    <!-- Plugin Scripts -->
    <!-- Tour plugin Start -->
    <script src="{{ asset('vendor/laravel-crud-generator/vendor/sheperd/dist/js/sheperd.min.js') }}"></script>
    <!-- Flatpickr Script -->
    <script src="{{ asset('vendor/laravel-crud-generator/vendor/flatpickr/dist/flatpickr.min.js') }}"></script>
    <script src="{{ asset('vendor/laravel-crud-generator/js/plugins/flatpickr.js') }}" defer></script>
    <!-- Slider-tab Script -->
    <script src="{{ asset('vendor/laravel-crud-generator/js/plugins/slider-tabs.js') }}"></script>
    <!-- Select2 Script -->
    <script src="{{ asset('vendor/laravel-crud-generator/js/plugins/select2.js') }}" defer></script>
    <!-- SwiperSlider Script -->
    <script src="{{ asset('vendor/laravel-crud-generator/vendor/swiperSlider/swiper-bundle.min.js') }}"></script>
    <!-- Utilities Functions -->
    <script src="{{ asset('vendor/laravel-crud-generator/js/iqonic-script/utility.min.js') }}"></script>
    <!-- Settings Script -->
    <script src="{{ asset('vendor/laravel-crud-generator/js/iqonic-script/setting.min.js') }}"></script>
    <!-- Settings Init Script -->
    <script src="{{ asset('vendor/laravel-crud-generator/js/setting-init.js') }}"></script>
    <!-- External Library Bundle Script -->
    <script src="{{ asset('vendor/laravel-crud-generator/js/core/external.min.js') }}"></script>
    <!-- Widgetchart Script -->
    <script src="{{ asset('vendor/laravel-crud-generator/js/charts/widgetchartsd1f1.js?v=2.2.0') }}" defer></script>
    <!-- Lodash Utility -->
    <script src="{{ asset('vendor/laravel-crud-generator/vendor/lodash/lodash.min.js') }}"></script>
    <!-- Hopeui Script -->
    <script src="{{ asset('vendor/laravel-crud-generator/js/hope-uid1f1.js?v=2.2.0') }}" defer></script>
    <script src="{{ asset('vendor/laravel-crud-generator/js/hope-uiprod1f1.js?v=2.2.0') }}" defer></script>
    <script src="{{ asset('vendor/laravel-crud-generator/js/sidebard1f1.js?v=2.2.0') }}" defer></script>

    @stack('js')

</body>


</html>
