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
                        <div class="offcanvas offcanvas-end shadow-none iq-product-menu-responsive" tabindex="-1"
                            id="offcanvasBottom">
                            <div class="offcanvas-body">
                                <ul class="iq-nav-menu list-unstyled">
                                    <li class="nav-item active">
                                        <a target="_blank" class="nav-link menu-arrow justify-content-start"
                                            href="{{ route('crud.form') }}" role="button"
                                            aria-expanded="false" aria-controls="homeData">
                                            <svg class="icon-20" width="20" viewBox="0 0 24 24"
                                                fill="currentColor" xmlns="https://www.w3.org/2000/svg">
                                                <path
                                                    d="M9.14373 20.7821V17.7152C9.14372 16.9381 9.77567 16.3067 10.5584 16.3018H13.4326C14.2189 16.3018 14.8563 16.9346 14.8563 17.7152V20.7732C14.8562 21.4473 15.404 21.9951 16.0829 22H18.0438C18.9596 22.0023 19.8388 21.6428 20.4872 21.0007C21.1356 20.3586 21.5 19.4868 21.5 18.5775V9.86585C21.5 9.13139 21.1721 8.43471 20.6046 7.9635L13.943 2.67427C12.7785 1.74912 11.1154 1.77901 9.98539 2.74538L3.46701 7.9635C2.87274 8.42082 2.51755 9.11956 2.5 9.86585V18.5686C2.5 20.4637 4.04738 22 5.95617 22H7.87229C8.19917 22.0023 8.51349 21.8751 8.74547 21.6464C8.97746 21.4178 9.10793 21.1067 9.10792 20.7821H9.14373Z"
                                                    fill="currentColor" />
                                            </svg>
                                            <span class="nav-text ms-2">CRUD Generator</span>
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
                        2024
                    </script> <span data-setting="app_name">2024 Rembon Digital Karya</span>

                </div>
            </div>
        </footer>
    </main>

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
