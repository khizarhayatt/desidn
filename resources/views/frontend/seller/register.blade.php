@extends('frontend.layouts')
@section('content')
<section style="padding-top: 4rem">
        <div class="container">
            <div class="row">
                <div class="col-lg-6" style="float: inherit !important; margin: 0 auto;">
                    <div id="account-creation" style="display: block;">
                        <div class="login-header">
                            <h1 class="text-center">Account Sign Up<h1>
                        </div>
                        <div class="switch-login-content text-center">
                            <p>
                                Already have an account?
                                <a class="link--strong">
                                    Log in.
                                </a>
                            </p>
                        </div>
                        <div class="form__group">
                        <form method="POST" action="{{ route('seller.create')}}" class="simple_form new_registration" id="new_registration" novalidate  accept-charset="UTF-8" data-remote="true" method="post">
                            <input name="utf8" type="hidden" value="✓" autocomplete="off">
                                @csrf
                            <form class="simple_form new_registration" id="new_registration" novalidate="novalidate" 
                            action="/users" accept-charset="UTF-8" data-remote="true" method="post">
                            <input name="utf8" type="hidden" value="✓" autocomplete="off">
                            <input type="hidden" name="user[post_create_partial]" id="user_post_create_partial" autocomplete="off">

                                <div class="form__fields form__fields--inline form__fields--wrap-mobile">
                                    <div class="form__field form__field--space-lg-2">
                                        <label class="label--heavy" placeholder="First Name" for="registration_first_name">First Name*</label>
                                        <input class="form__control" required="required" type="text" name="first_name" id="registration_first_name">
                                    </div>
                                    <div class="form__field form__field--space-lg-2">
                                        <label class="label--heavy" placeholder="Last Name" for="registration_last_name">Last Name*</label>
                                        <input class="form__control" required="required" type="text" name="last_name" id="registration_last_name">
                                    </div>
                                </div>
                                <div class="form__field">
                                    <label for="registration_email">Email Address*</label>
                                    <input class="form__control jsCreateAccountEmail" autocomplete="off" autofocus="autofocus" type="email" value="" name="email" id="registration_email">
                                </div>
                                <div class="form__field">
                                    <label for="registration_country_id">Country</label>
                                    <div class="select__wrap">
                                        <select class="select form__control jsCreateAccountCountry" name="country_id" id="registration_country_id">
                                            <option value="">-- Select a Country --</option>
                                            <option value="223">United States</option>
                                            <option value="1">Afghanistan</option>
                                            <option value="2">Albania</option>
                                            <option value="3">Algeria</option>
                                          
                                            <option value="238">Zambia</option>
                                            <option value="239">Zimbabwe</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form__field">
                                    <label for="registration_password">Password*</label>
                                    <input class="form__control" autocomplete="off" type="password" name="password" id="registration_password">
                                </div>
                                <div class="form__field">
                                    <label for="registration_password_confirmation">Confirm Password*</label>
                                    <input class="form__control" autocomplete="off" type="password" name="password_confirmation" id="registration_password_confirmation">
                                </div>
                                <div class="form__field--check form__field-label--normal form__field-label--no-flex">
                                    <input name="settings" type="hidden" value="0" autocomplete="off"><input type="checkbox" value="1" checked="checked" name="settings[off_site_marketing]" id="registration_settings_off_site_marketing">
                                    <label for="registration_settings_off_site_marketing">Yes, I'd like to advertise my products in
                                        <a href="#" class="link--strong">off-site marketing</a>.
                                    </label>
                                </div>
                                <ol class="account-errors" style="display: none;">
                                    <li class="error">Email can't be blank</li>
                                    <li class="error">First name can't be blank</li>
                                    <li class="error">Last name can't be blank</li>
                                    <li class="error">Password can't be blank</li>
                                </ol>
                                <input type="submit" name="commit" value="Create My Account" id="create_account" class="btn btn--big btn--full" data-disable-with="Creating...">
                                <div class="text-height text-dark-3 text-note--small">
                                    By clicking
                                    <span class="text-dark-3 italicize">Create Account,</span>
                                    you are agreeing to our
                                    <a class="strong" href="#" rel="nofollow">Terms &amp; Conditions</a>
                                    and
                                    <a class="strong" href="#" rel="nofollow">Privacy Policy,</a>
                                    and to receive our promotional emails (opt out any time).
                                </div>
                            </form>
                        </div>

                    </div>
                </div>
                
            </div>
        </div>
    </section>
@endsection