<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>Homepage</title>
    <!-- Stylesheets -->
    <link href={{ URL::asset('front_assets/css/bootstrap.css') }} rel="stylesheet" />
    <link href={{ URL::asset('front_assets/css/style.css') }} rel="stylesheet" />
    <link href={{ URL::asset('front_assets/css/responsive.css') }} rel="stylesheet" />

    <!-- Color Switcher Mockup -->
    <link href={{ URL::asset('front_assets/css/color-switcher-design.css') }} rel="stylesheet" />

    <!-- Color Themes -->
    <link id="theme-color-file" href={{ URL::asset('front_assets/css/color-themes/default-theme.css') }}
        rel="stylesheet" />

    <link rel="shortcut icon" href={{ URL::asset('front_assets/images/favicon.png') }} type="image/x-icon" />
    <link rel="icon" href={{ URL::asset('front_assets/images/favicon.png') }} type="image/x-icon" />

    <!-- Responsive -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
</head>

<body>



    <div class="page-wrapper">
        <!-- Preloader -->
        {{-- <div class="preloader"></div> --}}

        @include('frontend.components.header')

        <!-- Sidebar Cart Item -->
        <div class="xs-sidebar-group info-group">
            <div class="xs-overlay xs-bg-black"></div>
            <div class="xs-sidebar-widget">
                <div class="sidebar-widget-container">
                    <div class="widget-heading">
                        <a href="#" class="close-side-widget">
                            X
                        </a>
                    </div>
                    <div class="sidebar-textwidget">
                        <!-- Sidebar Info Content -->
                        <div class="sidebar-info-contents">
                            <div class="content-inner">
                                <div class="logo">
                                    <a href="javascript:;"><img src={{ URL::asset('front_assets/images/logo-2.png') }}
                                            alt="" /></a>
                                </div>
                                <div class="content-box">
                                    <h2>About Us</h2>
                                    <p class="text">
                                        The argument in favor of using filler text goes something
                                        like this: If you use real content in the Consulting
                                        Process, anytime you reach a review point you’ll end up
                                        reviewing and negotiating the content itself and not the
                                        design.
                                    </p>
                                    <a href="#" class="theme-btn btn-style-two"><span
                                            class="txt">Consultation</span></a>
                                </div>
                                <div class="contact-info">
                                    <h2>Contact Info</h2>
                                    <ul class="list-style-one">
                                        <li>
                                            <span class="icon fa fa-location-arrow"></span>Chicago
                                            12, Melborne City, USA
                                        </li>
                                        <li>
                                            <span class="icon fa fa-phone"></span>(111) 111-111-1111
                                        </li>
                                        <li>
                                            <span class="icon fa fa-envelope"></span>uricko@gmail.com
                                        </li>
                                        <li>
                                            <span class="icon fa fa-clock-o"></span>Week Days: 09.00
                                            to 18.00 Sunday: Closed
                                        </li>
                                    </ul>
                                </div>
                                <!-- Social Box -->
                                <ul class="social-box">
                                    <li class="facebook">
                                        <a href="#" class="fab fa-facebook-f"></a>
                                    </li>
                                    <li class="twitter">
                                        <a href="#" class="fab fa-twitter"></a>
                                    </li>
                                    <li class="linkedin">
                                        <a href="#" class="fab fa-linkedin"></a>
                                    </li>
                                    <li class="instagram">
                                        <a href="#" class="fab fa-instagram"></a>
                                    </li>
                                    <li class="youtube">
                                        <a href="#" class="fab fa-youtube"></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END sidebar widget item -->

        {{ $slot }}

        @include('frontend.components.footer')
    </div>
    <!--End pagewrapper-->

    <!-- Color Palate / Color Switcher -->

    <!-- Search Popup -->
    <div class="search-popup">
        <button class="close-search style-two">
            <span class="flaticon-multiply"></span>
        </button>
        <button class="close-search"><span class="fa fa-arrow-up"></span></button>
        <form method="post" action="#blog">
            <div class="form-group">
                <input type="search" name="search-field" value="" placeholder="Search Here" required="" />
                <button type="submit"><i class="fa fa-search"></i></button>
            </div>
        </form>
    </div>
    <!-- End Header Search -->

    <!-- Scroll To Top -->
    <div class="back-to-top scroll-to-target show-back-to-top" data-target="html">
        TOP
    </div>


    <script src={{ URL::asset('front_assets/js/jquery.js') }}></script>
    <script src={{ URL::asset('front_assets/js/popper.min.js') }}></script>
    <script src={{ URL::asset('front_assets/js/bootstrap.min.js') }}></script>
    <script src={{ URL::asset('front_assets/js/jquery.fancybox.js') }}></script>
    <script src={{ URL::asset('front_assets/js/appear.js') }}></script>
    <script src={{ URL::asset('front_assets/js/parallax.min.js') }}></script>
    <script src={{ URL::asset('front_assets/js/tilt.jquery.min.js') }}></script>
    <script src={{ URL::asset('front_assets/js/jquery.paroller.min.js') }}></script>
    <script src={{ URL::asset('front_assets/js/owl.js') }}></script>
    <script src={{ URL::asset('front_assets/js/wow.js') }}></script>
    <script src={{ URL::asset('front_assets/js/nav-tool.js') }}></script>
    <script src={{ URL::asset('front_assets/js/jquery-ui.js') }}></script>
    <script src={{ URL::asset('front_assets/js/jquery.mCustomScrollbar.concat.min.js') }}></script>
    <script src={{ URL::asset('front_assets/js/script.js') }}></script>
    <script src={{ URL::asset('front_assets/js/color-settings.js') }}></script>
</body>

</html>
