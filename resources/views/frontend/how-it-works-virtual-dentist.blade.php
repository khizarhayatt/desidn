<x-frontend_layout>
    <!-- Page Title Section -->
    <section class="page-title banner-bg">
        <div class="icon-layer-one banner-layer-bg"></div>
        <div class="auto-container">
            <h2>Online Virtual Dentist Consultation</h2>
            <ul class="page-breadcrumb">
                <li><a href={{ url('/') }}>home</a></li>
                <li>Services</li>
                <li>Online Virtual Dentist Consultation</li>
            </ul>
        </div>
    </section>
    <!-- End Page Title Section -->


    <!-- Services Page Section -->
    <section class="services-page-section">
        <div class="auto-container">
            <div class="row clearfix">

                <div class="service-block-two col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <div class="number-box">
                            <div class="number">01</div>
                        </div>
                        <h4><a href="services-detail.html">Submit your information securely online.</a></h4>
                        <div class="text">Lorem ipsum dolor sit amet consectetur, adipiscing elit penatibus.</div>
                    </div>
                </div>

                <div class="service-block-two col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <div class="number-box">
                            <div class="number">02</div>
                        </div>
                        <h4><a href="services-detail.html">Physician reviews your medical records</a></h4>
                        <div class="text">Lorem ipsum dolor sit amet consectetur, adipiscing elit penatibus.</div>
                    </div>
                </div>

                <div class="service-block-two col-lg-4 col-md-6 col-sm-12">
                    <div class="inner-box">
                        <div class="number-box">
                            <div class="number">03</div>
                        </div>
                        <h4><a href="services-detail.html">
                                Attain peace of mind securely. </a></h4>
                        <div class="text">Lorem ipsum dolor sit amet consectetur, adipiscing elit penatibus.</div>
                    </div>
                </div>





            </div>
        </div>
    </section>
    <!-- End Services Page Section -->

    @include('frontend.components.faq')

</x-frontend_layout>
