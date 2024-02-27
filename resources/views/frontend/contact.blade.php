<x-frontend_layout>
    <!-- Page Title Section -->
    <section class="page-title banner-bg">
        <div class="icon-layer-one banner-layer-bg"></div>
        <div class="auto-container">
            <h2>Contact Us</h2>
            <ul class="page-breadcrumb">
                <li><a href={{ url('/') }}>home</a></li>
                <li>Contact Us</li>
            </ul>
        </div>
    </section>
    <!-- End Page Title Section -->


    <section class="contact-form-section py-5">
        <div class="auto-container py-5">
            <!-- Sec Title -->
            <div class="sec-title centered">
                <h2><span>Contact</span> us now</h2>
                <div class="text">Beyond more stoic this along goodness this this wow ipsum sed mante far impressive
                    <br> manifest farcrud opened inside.
                </div>
            </div>
            <div class="inner-container">

                <!-- Contact Form -->
                <div class="contact-form">
                    <form method="post" action="sendemail.php" id="contact-form">
                        <div class="row clearfix">

                            <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                <input type="text" name="name" value="" placeholder="Your Name"
                                    required="">
                            </div>

                            <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                <input type="email" name="email" value="" placeholder="Your Email"
                                    required="">
                            </div>

                            <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                <input type="text" name="subject" value="" placeholder="Subject"
                                    required="">
                            </div>

                            <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                <input type="text" name="phone" value="" placeholder="Phone" required="">
                            </div>

                            <div class="form-group col-lg-12 col-md-12 col-sm-12">
                                <textarea name="message" placeholder="Your Question"></textarea>
                            </div>

                            <div class="form-group col-lg-12 col-md-12 col-sm-12 text-center">
                                <button type="submit" class="theme-btn btn-style-two"><span class="txt">Contact
                                        us</span></button>
                            </div>

                        </div>
                    </form>
                </div>
                <!-- End Contact Form -->

            </div>
        </div>
    </section>
    <!-- End Faq's Form Section -->


</x-frontend_layout>
