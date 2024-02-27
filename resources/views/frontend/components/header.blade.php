<!-- Main Header-->
<header class="main-header">
    <!-- Header Top -->
    <div class="header-top">
        <div class="auto-container">
            <div class="inner-container clearfix">
                <!-- Top Left -->
                <div class="top-left pull-left">
                    <!-- Social Box -->
                    <ul class="social-box">
                        <li class="facebook">
                            <a href="#" class="fab fa-facebook-f"></a>
                        </li>
                        <li class="twitter">
                            <a href="#" class="fab fa-linkedin-in"></a>
                        </li>
                        <li class="google"><a href="#" class="fab fa-google"></a></li>
                        <li class="linkedin">
                            <a href="#" class="fab fa-linkedin-in"></a>
                        </li>
                    </ul>
                </div>

                <!-- Top Right -->
                <div class="top-right pull-right">
                    <!-- Info List -->
                    <ul class="info-list">
                        <li>
                            <span class="icon flaticon-clock"></span>
                            <a href="#contact">Schedule an Appointment</a>
                        </li>
                        <li>
                            <span class="icon flaticon-hospital"></span><a href="#">Find a Doctor</a>
                        </li>
                        <li>
                            <span class="icon flaticon-phone-call"></span>
                            <a href="#1">+1 (000) 0000-0000</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!-- Header Upper -->
    <div class="header-upper">
        <div class="auto-container">
            <div class="inner-container clearfix">
                <div class="pull-left logo-box">
                    <div class="logo">
                        <a href="javascript:;"><img src={{ URL::asset('front_assets/images/logo.png') }} alt=""
                                title="" /></a>
                    </div>
                </div>

                <div class="nav-outer clearfix">
                    <!--Mobile Navigation Toggler-->
                    <div class="mobile-nav-toggler">
                        <span class="icon flaticon-menu"></span>
                    </div>
                    <!-- Main Menu -->
                    <nav class="main-menu navbar-expand-md">
                        <div class="navbar-header">
                            <!-- Toggle Button -->
                            <button class="navbar-toggler" type="button" data-toggle="collapse"
                                data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                                aria-expanded="false" aria-label="Toggle navigation">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>

                        <div class="navbar-collapse collapse clearfix" id="navbarSupportedContent">
                            <ul class="navigation clearfix">
                                <li class="current"><a href="/">Home</a></li>

                                <li class="current dropdown">
                                    <a href="{{ url('/service') }}">Services</a>
                                    <ul>
                                        <li>
                                            <a href="{{ url('/second-medical-opinion-how-we-help') }}">Second Medical
                                                Opinion </a>
                                        </li>
                                        <li><a href={{url("/virtual-doctor")}}>Virtual Doctor </a></li>
                                        <li>
                                            <a href={{url("/primary-care-consultation")}}>Primary Care Consultation
                                            </a>
                                        </li>
                                        <li><a href={{url("/mental-health")}}>Mental Health </a></li>
                                        <li><a href={{url("/dentist")}}>Virtual Dentist </a></li>
                                        <li><a href={{url("/ways-we-help")}}>Ways We Help </a></li>
                                        <li><a href={{url("/weight-management")}}>Weight Management </a></li>
                                    </ul>
                                </li>

                                <li class="dropdown">
                                    <a href="#">How It Works</a>
                                    <ul>
                                        <li>
                                            <a href={{url("/how-it-works-second-medical-opinion")}}>Second Medical
                                                Opinion </a>
                                        </li>
                                        <li><a href={{url("/how-it-works-virtual-doctor")}}>Virtual Doctor </a></li>
                                        <li>
                                            <a href={{url("/how-it-works-primary-care-consultation")}}>Primary Care
                                                Consultation
                                            </a>
                                        </li>
                                        <li><a href={{url("/how-it-works-mental-health")}}>Mental Health </a></li>
                                        <li><a href={{url("/how-it-works-virtual-dentist")}}>Virtual Dentist </a>
                                        </li>
                                    </ul>
                                </li>
                                <li><a href={{url("/usa-doctor")}}>Doctors</a></li>
                                <li class="dropdown">
                                    <a href="#">Media</a>
                                    <ul>
                                        <li><a href={{url("/vlog")}}>Vlog </a></li>
                                        <li><a href={{url("/blog")}}>Blog </a></li>
                                        <li><a href={{url("/patien-reviews")}}>Patient Reviews </a></li>
                                        <li><a href={{url("/healthcare-news")}}>Healthcare News </a></li>
                                    </ul>
                                </li>
                                <li><a href={{url("/contact")}}>Contact</a></li>
                            </ul>
                        </div>
                    </nav>
                    <!-- Main Menu End-->

                    <!-- Outer Box -->
                    <div class="outer-box clearfix">
                        <!-- Nav Btn -->

                        <!-- Phone Btn -->
                        <div class="btn-box">
                            <a href="#appointment" class="theme-btn btn-style-one"><span class="txt">Appointment
                                    Now</span></a>
                        </div>
                    </div>
                    <!-- End Outer Box -->
                </div>
            </div>
        </div>
    </div>
    <!--End Header Upper-->

    <!-- Sticky Header  -->
    <div class="sticky-header">
        <div class="auto-container clearfix">
            <!--Logo-->
            <div class="logo pull-left">
                <a href="javascript:;" title=""><img src={{ URL::asset('front_assets/images/logo-small.png') }}
                        alt="" title="" /></a>
            </div>
            <!--Right Col-->
            <div class="pull-right">
                <!-- Main Menu -->
                <nav class="main-menu">
                    <!--Keep This Empty / Menu will come through Javascript-->
                </nav>
                <!-- Main Menu End-->

                <!-- Main Menu End-->
                <div class="outer-box clearfix">
                    <!-- Search Btn -->
                    <div class="search-box-btn search-box-outer">
                        <span class="icon fa fa-search"></span>
                    </div>

                    <!-- Quote Btn -->
                    <div class="btn-box">
                        <a href="#appointment" class="theme-btn btn-style-one"><span class="txt">Appointment
                                Now</span></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Sticky Menu -->

    <!-- Mobile Menu  -->
    <div class="mobile-menu">
        <div class="menu-backdrop"></div>
        <div class="close-btn">
            <span class="icon flaticon-multiply"></span>
        </div>

        <nav class="menu-box">
            <div class="nav-logo">
                <a href="javascript:;"><img src={{ URL::asset('front_assets/images/logo.png') }} alt=""
                        title="" /></a>
            </div>
            <div class="menu-outer">
                <!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->
            </div>
        </nav>
    </div>
    <!-- End Mobile Menu -->
</header>
<!-- End Main Header -->
