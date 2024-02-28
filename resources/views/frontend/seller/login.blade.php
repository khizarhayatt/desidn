@extends('frontend.layouts')
@section('content')
<section style="padding-top: 4rem">
        <div class="container">
            <div class="row">
                <div class="col-lg-6" style="float: inherit !important; margin: 0 auto;">
                    <div id="account-login" style="display: block;">
                        <div class="login-header">
                            <h1 class="text-center">desedin Login<h1>
                        </div>
                        <div class="switch-login-option text-center">
                            <div class="create-new-account-option">
                                New here?
                                <a class="link--strong" onclick="TeePublic.LoginModal.init($('#account-creation'));">
                                    Create an account.
                                </a>
                            </div>
                        </div>
                        <div class="form__group">
                        <form method="POST" action="{{ route('seller.verification') }}" class="needs-validation" class="simple_form new_session" id="new_session" novalidate="novalidate"
                            
                             accept-charset="UTF-8" data-remote="true"
                                novalidate="">
                                @csrf
                           
                              
                                <div class="form__field">
                                    <label for="session_email">Email Address</label>
                                    <input class="form__control" autofocus="autofocus" type="email" value="" name="email" id="session_email">
                                </div>
                                <div class="form__field">
                                    <label for="session_password">Password</label>
                                    <input class="form__control" type="password" name="password" id="session_password">
                                </div>
                                <ul class="login-errors"></ul>
                                <div class="checkbox hidden">
                                    <input type="checkbox" name="session[remember_me]" id="session_remember_me" value="yes" checked="checked">
                                    <label for="session_remember_me">Remember Me</label>
                                </div>
                                <div class="login-security-captcha" style="display: none;">
                                    <script src="https://www.google.com/recaptcha/api.js" async="" defer=""></script>
                                    <div data-sitekey="6LeIEtwlAAAAAHSIbLwOHwTJcmRT7c761CfmO9iu" class="g-recaptcha ">
                                        <div style="width: 304px; height: 78px;">
                                            <div><iframe title="reCAPTCHA" width="304" height="78" role="presentation" name="a-as5w4n7ke1j8" frameborder="0" scrolling="no" sandbox="allow-forms allow-popups allow-same-origin allow-scripts allow-top-navigation allow-modals allow-popups-to-escape-sandbox allow-storage-access-by-user-activation" src="https://www.google.com/recaptcha/api2/anchor?ar=1&amp;k=6LeIEtwlAAAAAHSIbLwOHwTJcmRT7c761CfmO9iu&amp;co=aHR0cHM6Ly93d3cudGVlcHVibGljLmNvbTo0NDM.&amp;hl=en&amp;v=1kRDYC3bfA-o6-tsWzIBvp7k&amp;size=normal&amp;cb=h005lufawips"></iframe></div><textarea id="g-recaptcha-response" name="g-recaptcha-response" class="g-recaptcha-response" style="width: 250px; height: 40px; border: 1px solid rgb(193, 193, 193); margin: 10px 25px; padding: 0px; resize: none; display: none;"></textarea>
                                        </div><iframe style="display: none;"></iframe>
                                    </div>
                                    <noscript>
                                        <div>
                                            <div style="width: 302px; height: 422px; position: relative;">
                                                <div style="width: 302px; height: 422px; position: absolute;">
                                                    <iframe src="https://www.google.com/recaptcha/api/fallback?k=6LeIEtwlAAAAAHSIbLwOHwTJcmRT7c761CfmO9iu" name="ReCAPTCHA" style="width: 302px; height: 422px; border-style: none; border: 0; overflow: hidden;">
                                                    </iframe>
                                                </div>
                                            </div>
                                            <div style="width: 300px; height: 60px; border-style: none;
                bottom: 12px; left: 25px; margin: 0px; padding: 0px; right: 25px;
                background: #f9f9f9; border: 1px solid #c1c1c1; border-radius: 3px;">
                                                <textarea id="g-recaptcha-response" name="g-recaptcha-response" class="g-recaptcha-response" style="width: 250px; height: 40px; border: 1px solid #c1c1c1;
                  margin: 10px 25px; padding: 0px; resize: none;">
                </textarea>
                                            </div>
                                        </div>
                                    </noscript>

                                </div>
                                <input type="submit" name="commit" value="Log in" id="login" class="btn btn--big btn--full" data-disable-with="Logging in...">
                            </form>
                        </div>
                        <div class="switch-login-content">
                            <div class="switch-login-option">
                                <a href="#" class="link link--1 link--default link--strong">
                                    <span class="link__content">
                                        Forgot your password?
                                    </span>

                                </a>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </section>
    @endsection