@extends('app.app')
@section('content')
 <div class="nk-content ">
                    <div class="container-fluid">
                        <div class="nk-content-inner">
                            <div class="nk-content-body">
                                <div class="components-preview wide-md mx-auto">
                                    <div class="nk-block-head nk-block-head-lg wide-sm">
                                        <div class="nk-block-head-content">
                                            <div class="nk-block-head-sub"><a class="back-to" href="html/components.html"><em class="icon ni ni-arrow-left"></em><span>Components</span></a></div>
                                            <h2 class="nk-block-title fw-normal">Form Layouts</h2>
                                            <div class="nk-block-des">
                                                <p class="lead">Form is most esential part of your project. We styled out nicely so you can build your form so quickly.</p>
                                            </div>
                                        </div>
                                    </div><!-- .nk-block -->
                                    <div class="nk-block nk-block-lg">
                                        <div class="nk-block-head">
                                            <div class="nk-block-head-content">
                                                <h4 class="title nk-block-title">Basic Form Style - S1</h4>
                                                <div class="nk-block-des">
                                                    <p>Below example helps you to build your own form nice way.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row g-gs">
                                            <div class="col-lg-6">
                                                <div class="card h-100">
                                                    <div class="card-inner">
                                                        <div class="card-head">
                                                            <h5 class="card-title">Customer Info</h5>
                                                        </div>
                                                        <form action="#">
                                                            <div class="form-group">
                                                                <label class="form-label" for="full-name">Full Name</label>
                                                                <div class="form-control-wrap">
                                                                    <input type="text" class="form-control" id="full-name">
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="form-label" for="email-address">Email address</label>
                                                                <div class="form-control-wrap">
                                                                    <input type="text" class="form-control" id="email-address">
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="form-label" for="phone-no">Phone No</label>
                                                                <div class="form-control-wrap">
                                                                    <input type="text" class="form-control" id="phone-no">
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="form-label">Communication</label>
                                                                <ul class="custom-control-group g-3 align-center">
                                                                    <li>
                                                                        <div class="custom-control custom-control-sm custom-checkbox">
                                                                            <input type="checkbox" class="custom-control-input" id="com-email">
                                                                            <label class="custom-control-label" for="com-email">Email</label>
                                                                        </div>
                                                                    </li>
                                                                    <li>
                                                                        <div class="custom-control custom-control-sm custom-checkbox">
                                                                            <input type="checkbox" class="custom-control-input" id="com-sms">
                                                                            <label class="custom-control-label" for="com-sms">SMS</label>
                                                                        </div>
                                                                    </li>
                                                                    <li>
                                                                        <div class="custom-control custom-control-sm custom-checkbox">
                                                                            <input type="checkbox" class="custom-control-input" id="com-phone">
                                                                            <label class="custom-control-label" for="com-phone">Phone</label>
                                                                        </div>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="form-label" for="pay-amount">Amount</label>
                                                                <div class="form-control-wrap">
                                                                    <input type="text" class="form-control" id="pay-amount">
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="form-label">Payment Methods</label>
                                                                <ul class="custom-control-group g-3 align-center">
                                                                    <li>
                                                                        <div class="custom-control custom-control-sm custom-checkbox">
                                                                            <input type="checkbox" class="custom-control-input" id="pay-card">
                                                                            <label class="custom-control-label" for="pay-card">Card</label>
                                                                        </div>
                                                                    </li>
                                                                    <li>
                                                                        <div class="custom-control custom-control-sm custom-checkbox">
                                                                            <input type="checkbox" class="custom-control-input" id="pay-bitcoin">
                                                                            <label class="custom-control-label" for="pay-bitcoin">Bitcoin</label>
                                                                        </div>
                                                                    </li>
                                                                    <li>
                                                                        <div class="custom-control custom-control-sm custom-checkbox">
                                                                            <input type="checkbox" class="custom-control-input" id="pay-cash">
                                                                            <label class="custom-control-label" for="pay-cash">Cash</label>
                                                                        </div>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                            <div class="form-group">
                                                                <button type="submit" class="btn btn-lg btn-primary">Save Informations</button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="card h-100">
                                                    <div class="card-inner">
                                                        <div class="card-head">
                                                            <h5 class="card-title">Contact Form</h5>
                                                        </div>
                                                        <form action="#">
                                                            <div class="form-group">
                                                                <label class="form-label" for="cf-full-name">Full Name</label>
                                                                <input type="text" class="form-control" id="cf-full-name">
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="form-label" for="cf-email-address">Email address</label>
                                                                <input type="text" class="form-control" id="cf-email-address">
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="form-label" for="cf-phone-no">Phone No</label>
                                                                <input type="text" class="form-control" id="cf-phone-no">
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="form-label" for="cf-subject">Subject</label>
                                                                <input type="text" class="form-control" id="cf-subject">
                                                            </div>
                                                            <div class="form-group">
                                                                <label class="form-label" for="cf-default-textarea">Message</label>
                                                                <div class="form-control-wrap">
                                                                    <textarea class="form-control form-control-sm" id="cf-default-textarea" placeholder="Write your message"></textarea>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <button type="submit" class="btn btn-lg btn-primary">Save Informations</button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div><!-- .nk-block -->
                                    <div class="nk-block nk-block-lg">
                                        <div class="nk-block-head">
                                            <div class="nk-block-head-content">
                                                <h4 class="title nk-block-title">Basic Form Style - S2</h4>
                                                <div class="nk-block-des">
                                                    <p>You can alow display form in column as example below.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-inner">
                                                <div class="card-head">
                                                    <h5 class="card-title">Customer Info S2</h5>
                                                </div>
                                                <form action="#">
                                                    <div class="row g-4">
                                                        <div class="col-lg-6">
                                                            <div class="form-group">
                                                                <label class="form-label" for="full-name-1">Full Name</label>
                                                                <div class="form-control-wrap">
                                                                    <input type="text" class="form-control" id="full-name-1">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="form-group">
                                                                <label class="form-label" for="email-address-1">Email address</label>
                                                                <div class="form-control-wrap">
                                                                    <input type="text" class="form-control" id="email-address-1">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="form-group">
                                                                <label class="form-label" for="phone-no-1">Phone No</label>
                                                                <div class="form-control-wrap">
                                                                    <input type="text" class="form-control" id="phone-no-1">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="form-group">
                                                                <label class="form-label" for="pay-amount-1">Amount</label>
                                                                <div class="form-control-wrap">
                                                                    <input type="text" class="form-control" id="pay-amount-1">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="form-group">
                                                                <label class="form-label">Communication</label>
                                                                <ul class="custom-control-group g-3 align-center">
                                                                    <li>
                                                                        <div class="custom-control custom-control-sm custom-checkbox">
                                                                            <input type="checkbox" class="custom-control-input" id="com-email-1">
                                                                            <label class="custom-control-label" for="com-email-1">Email</label>
                                                                        </div>
                                                                    </li>
                                                                    <li>
                                                                        <div class="custom-control custom-control-sm custom-checkbox">
                                                                            <input type="checkbox" class="custom-control-input" id="com-sms-1">
                                                                            <label class="custom-control-label" for="com-sms-1">SMS</label>
                                                                        </div>
                                                                    </li>
                                                                    <li>
                                                                        <div class="custom-control custom-control-sm custom-checkbox">
                                                                            <input type="checkbox" class="custom-control-input" id="com-phone-1">
                                                                            <label class="custom-control-label" for="com-phone-1">Phone</label>
                                                                        </div>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="form-group">
                                                                <label class="form-label">Payment Methods</label>
                                                                <ul class="custom-control-group g-3 align-center">
                                                                    <li>
                                                                        <div class="custom-control custom-control-sm custom-checkbox">
                                                                            <input type="checkbox" class="custom-control-input" id="pay-card-1">
                                                                            <label class="custom-control-label" for="pay-card-1">Card</label>
                                                                        </div>
                                                                    </li>
                                                                    <li>
                                                                        <div class="custom-control custom-control-sm custom-checkbox">
                                                                            <input type="checkbox" class="custom-control-input" id="pay-bitcoin-1">
                                                                            <label class="custom-control-label" for="pay-bitcoin-1">Bitcoin</label>
                                                                        </div>
                                                                    </li>
                                                                    <li>
                                                                        <div class="custom-control custom-control-sm custom-checkbox">
                                                                            <input type="checkbox" class="custom-control-input" id="pay-cash-1">
                                                                            <label class="custom-control-label" for="pay-cash-1">Cash</label>
                                                                        </div>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="col-12">
                                                            <div class="form-group">
                                                                <button type="submit" class="btn btn-lg btn-primary">Save Informations</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div><!-- .nk-block -->
                                    <div class="nk-block nk-block-lg">
                                        <div class="nk-block-head">
                                            <div class="nk-block-head-content">
                                                <h4 class="title nk-block-title">Setting Form Style</h4>
                                                <div class="nk-block-des">
                                                    <p>You can make style out your setting related form as per below example.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-inner">
                                                <div class="card-head">
                                                    <h5 class="card-title">Website Setting</h5>
                                                </div>
                                                <form action="#" class="gy-3">
                                                    <div class="row g-3 align-center">
                                                        <div class="col-lg-5">
                                                            <div class="form-group">
                                                                <label class="form-label" for="site-name">Site Name</label>
                                                                <span class="form-note">Specify the name of your website.</span>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-7">
                                                            <div class="form-group">
                                                                <div class="form-control-wrap">
                                                                    <input type="text" class="form-control" id="site-name" value="DashLite Admin Template">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row g-3 align-center">
                                                        <div class="col-lg-5">
                                                            <div class="form-group">
                                                                <label class="form-label">Site Email</label>
                                                                <span class="form-note">Specify the email address of your website.</span>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-7">
                                                            <div class="form-group">
                                                                <div class="form-control-wrap">
                                                                    <input type="text" class="form-control" id="site-email" value="info@softnio.com">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row g-3 align-center">
                                                        <div class="col-lg-5">
                                                            <div class="form-group">
                                                                <label class="form-label">Site Copyright</label>
                                                                <span class="form-note">Copyright information of your website.</span>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-7">
                                                            <div class="form-group">
                                                                <div class="form-control-wrap">
                                                                    <input type="text" class="form-control" id="site-copyright" value="&copy; 2019, DashLite. All Rights Reserved.">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row g-3 align-center">
                                                        <div class="col-lg-5">
                                                            <div class="form-group">
                                                                <label class="form-label">Allow Registration</label>
                                                                <span class="form-note">Enable or disable registration from site.</span>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-7">
                                                            <ul class="custom-control-group g-3 align-center flex-wrap">
                                                                <li>
                                                                    <div class="custom-control custom-radio">
                                                                        <input type="radio" class="custom-control-input" checked name="reg-public" id="reg-enable">
                                                                        <label class="custom-control-label" for="reg-enable">Enable</label>
                                                                    </div>
                                                                </li>
                                                                <li>
                                                                    <div class="custom-control custom-radio">
                                                                        <input type="radio" class="custom-control-input" name="reg-public" id="reg-disable">
                                                                        <label class="custom-control-label" for="reg-disable">Disable</label>
                                                                    </div>
                                                                </li>
                                                                <li>
                                                                    <div class="custom-control custom-radio">
                                                                        <input type="radio" class="custom-control-input" name="reg-public" id="reg-request">
                                                                        <label class="custom-control-label" for="reg-request">On Request</label>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="row g-3 align-center">
                                                        <div class="col-lg-5">
                                                            <div class="form-group">
                                                                <label class="form-label">Main Website</label>
                                                                <span class="form-note">Specify the URL if your main website is external.</span>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-7">
                                                            <div class="form-group">
                                                                <div class="form-control-wrap">
                                                                    <input type="text" class="form-control" name="site-url" value="https://www.softnio.com">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row g-3 align-center">
                                                        <div class="col-lg-5">
                                                            <div class="form-group">
                                                                <label class="form-label" for="site-off">Maintanance Mode</label>
                                                                <span class="form-note">Enable to make website make offline.</span>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-7">
                                                            <div class="form-group">
                                                                <div class="custom-control custom-switch">
                                                                    <input type="checkbox" class="custom-control-input" name="reg-public" id="site-off">
                                                                    <label class="custom-control-label" for="site-off">Offline</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row g-3">
                                                        <div class="col-lg-7 offset-lg-5">
                                                            <div class="form-group mt-2">
                                                                <button type="submit" class="btn btn-lg btn-primary">Update</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div><!-- card -->
                                    </div><!-- .nk-block -->
                                </div><!-- .components-preview -->
                            </div>
                        </div>
                    </div>
                </div>
@endsection