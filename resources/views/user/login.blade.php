@extends('user.layout.app1')
@section('content')
       <div id="content" class="site-content" tabindex="-1">
                <div class="container">

                    <nav class="woocommerce-breadcrumb" ><a href="{{url('/')}}">Home</a><span class="delimiter"><i class="fa fa-angle-right"></i></span>My Account</nav><!-- .woocommerce-breadcrumb -->

                    <div id="primary" class="content-area">
                        <main id="main" class="site-main">
                            <article id="post-8" class="hentry">

                                <div class="entry-content">
                                    <div class="woocommerce">
                                        <div class="customer-login-form">
                                            
  </form>
                                <h6 class="lost_password"><a href="{{url('register')}}">Register for Vendor?</a>And <a href="{{url('login')}}">Login</a></h6>
                                            <div class="col2-set" id="customer_login">

                                                <div class="col-1">


                                                    <h2>Login</h2>

                                                    <form method="post" class="login" action="{{route('login')}}">
                                                        @csrf

                                                        <p class="before-login-text">Welcome back! Sign in to your account</p>

                                                        <p class="form-row form-row-wide">
                                                            <label for="username"> Mobile<span class="required">*</span></label>
                                                            <input type="text" class="input-text" name="mobile" id="username" value="" />
                                                                             @error('mobile')
                                        <span class="alert alert-danger" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                       @enderror
                                                        </p>

                                                        <p class="form-row form-row-wide">
                                                            <label for="password">Password<span class="required">*</span></label>
                                                            <input class="input-text" type="password" name="password" id="password" />
                                                                             @error('password')
                                        <span class="alert alert-danger" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                       @enderror
                                                        </p>

                                                        <p class="form-row">
                                                            <input class="button" type="submit" value="Login" name="login">
                                                            
                                                        </p>

                                                        

                                                    </form>
                                <p class="lost_password"><a href="{{url('register')}}">Register for Vendor?</a></p>
                                  <div class="register-benefits">
                                                            <h3>Sign up today and you will be able to :</h3>
                                                            <ul>
                                                                <li>Speed your way through checkout</li>
                                                                <li>Track your orders easily</li>
                                                                <li>Keep a record of all your purchases</li>
                                                            </ul>
                                                        </div>

                                                </div>
                                                <div class="col-2">

                                                    <h2>Register</h2>

                                                    <form action="{{ route('register') }}" method="post">
                                                     @csrf
                                                         <input type="hidden" name="role"  id="role" value="3">

                                                        <p class="before-register-text">Create your very own account</p>
                                                           <p class="form-row form-row-wide">
                                                            <label for="reg_email">Name<span class="required">*</span></label>
                                                            <input type="text" class="input-text" name="name" id="reg_email" value="" />
                                                            @error('name')
                                        <span class="alert alert-danger" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                                        </p>
                                                         <p class="form-row form-row-wide">
                                                            <label for="reg_email">Email<span class="required">*</span></label>
                                                            <input type="email" class="input-text" name="email" id="reg_email" value="" />
                                                            @error('email')
                                        <span class="alert alert-danger" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                                        </p>
                                                        <p class="form-row form-row-wide">
                                                            <label for="reg_email">Mobile<span class="required">*</span></label>
                                                            <input type="tel" class="input-text" name="mobile" id="reg_email" value="" />
                                                                           @error('mobile')
                                        <span class="alert alert-danger" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                                        </p>
                                                          <p class="form-row form-row-wide">
                                                            <label for="reg_email">Password *<span class="required">*</span></label>
                                                            <input type="password" class="input-text" name="password" id="reg_email" value="" />
                                                             @error('password')
                                        <span class="alert alert-danger" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                       @enderror
                                                        </p>
                                                          <p class="form-row form-row-wide">
                                                            <label for="reg_email">Confirm Password *<span class="required">*</span></label>
                                                            <input type="password" class="input-text" name="password_confirmation" id="reg_email" value="" />
                                                        </p>
                                                        

                                                        <p class="form-row"><input type="submit" class="button" name="register" value="Register" /></p>

                                                      

                                                    </form>

                                                </div><!-- .col-2 --><!-- .col-1 -->


                                              <!--   <div class="col-2">

                                                    <h2>Register</h2>

                                                    <form method="post" class="register">

                                                        <p class="before-register-text">Create your very own account</p>

                                                        <p class="form-row form-row-wide">
                                                            <label for="reg_email">Email address<span class="required">*</span></label>
                                                            <input type="email" class="input-text" name="email" id="reg_email" value="" />
                                                        </p>

                                                        <p class="form-row"><input type="submit" class="button" name="register" value="Register" /></p>

                                                        <div class="register-benefits">
                                                            <h3>Sign up today and you will be able to :</h3>
                                                            <ul>
                                                                <li>Speed your way through checkout</li>
                                                                <li>Track your orders easily</li>
                                                                <li>Keep a record of all your purchases</li>
                                                            </ul>
                                                        </div>

                                                    </form>

                                                </div> --><!-- .col-2 -->

                                            </div><!-- .col2-set -->

                                        </div><!-- /.customer-login-form -->
                                    </div><!-- .woocommerce -->
                                </div><!-- .entry-content -->

                            </article><!-- #post-## -->

                        </main><!-- #main -->
                    </div><!-- #primary -->

                </div><!-- .col-full -->
            </div><!-- #content -->
@endsection