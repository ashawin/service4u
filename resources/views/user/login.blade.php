@extends('user.layout.app1')
@section('content')
    <body class="page home page-template-default">
        <div id="page" class="hfeed site">
            <a class="skip-link screen-reader-text" href="#site-navigation">Skip to navigation</a>
            <a class="skip-link screen-reader-text" href="#content">Skip to content</a>

            <div class="top-bar hidden-md-down">
                <div class="container">
                    <nav>
                        <ul id="menu-top-bar-left" class="nav nav-inline pull-left animate-dropdown flip">
                            <li class="menu-item animate-dropdown"><a title="Welcome to Worldwide Electronics Store" href="#">Welcome to Worldwide Electronics Store</a></li>
                        </ul>
                    </nav>

                    <nav>
                        <ul id="menu-top-bar-right" class="nav nav-inline pull-right animate-dropdown flip">
                            <li class="menu-item animate-dropdown"><a title="Store Locator" href="#"><i class="ec ec-map-pointer"></i>Store Locator</a></li>
                            <li class="menu-item animate-dropdown"><a title="Track Your Order" href="track-your-order.html"><i class="ec ec-transport"></i>Track Your Order</a></li>
                            <li class="menu-item animate-dropdown"><a title="Shop" href="shop.html"><i class="ec ec-shopping-bag"></i>Shop</a></li>
                            <li class="menu-item animate-dropdown"><a title="My Account" href="my-account.html"><i class="ec ec-user"></i>My Account</a></li>
                        </ul>
                    </nav>
                </div>
            </div><!-- /.top-bar -->

            @include('user.layout.header1')
              @include('user.layout.nav')

            <div id="content" class="site-content" tabindex="-1">
                <div class="container">

                    <nav class="woocommerce-breadcrumb" ><a href="home.html">Home</a><span class="delimiter"><i class="fa fa-angle-right"></i></span>My Account</nav><!-- .woocommerce-breadcrumb -->

                    <div id="primary" class="content-area">
                        <main id="main" class="site-main">
                            <article id="post-8" class="hentry">

                                <div class="entry-content">
                                    <div class="woocommerce">
                                        <div class="customer-login-form">
                                            <span class="or-text">or</span>

                                            <div class="col2-set" id="customer_login">

                                                <div class="col-1">


                                                    <h2>Login</h2>

                                                    <form method="post" class="login" action="{{route('login')}}">
                                                    	@csrf

                                                        <p class="before-login-text">Welcome back! Sign in to your account</p>

                                                        <p class="form-row form-row-wide">
                                                            <label for="username"> Mobile<span class="required">*</span></label>
                                                            <input type="text" class="input-text" name="mobile" id="username" value="" />
                                                        </p>

                                                        <p class="form-row form-row-wide">
                                                            <label for="password">Password<span class="required">*</span></label>
                                                            <input class="input-text" type="password" name="password" id="password" />
                                                        </p>

                                                        <p class="form-row">
                                                            <input class="button" type="submit" value="Login" name="login">
                                                            
                                                        </p>

                                                        

                                                    </form>


                                                </div><!-- .col-1 -->

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

            <section class="brands-carousel">
                <h2 class="sr-only">Brands Carousel</h2>
                <div class="container">
                    <div id="owl-brands" class="owl-brands owl-carousel unicase-owl-carousel owl-outer-nav">

                        <div class="item">

                            <a href="#">

                                <figure>
                                    <figcaption class="text-overlay">
                                        <div class="info">
                                            <h4>Acer</h4>
                                        </div><!-- /.info -->
                                    </figcaption>

                                     <img src="assets/images/blank.gif" data-echo="assets/images/brands/1.png" class="img-responsive" alt="">

                                </figure>
                            </a>
                        </div><!-- /.item -->


                        <div class="item">

                            <a href="#">

                                <figure>
                                    <figcaption class="text-overlay">
                                        <div class="info">
                                            <h4>Apple</h4>
                                        </div><!-- /.info -->
                                    </figcaption>

                                     <img src="assets/images/blank.gif" data-echo="assets/images/brands/2.png" class="img-responsive" alt="">

                                </figure>
                            </a>
                        </div><!-- /.item -->


                        <div class="item">

                            <a href="#">

                                <figure>
                                    <figcaption class="text-overlay">
                                        <div class="info">
                                            <h4>Asus</h4>
                                        </div><!-- /.info -->
                                    </figcaption>

                                     <img src="assets/images/blank.gif" data-echo="assets/images/brands/3.png" class="img-responsive" alt="">

                                </figure>
                            </a>
                        </div><!-- /.item -->


                        <div class="item">

                            <a href="#">

                                <figure>
                                    <figcaption class="text-overlay">
                                        <div class="info">
                                            <h4>Dell</h4>
                                        </div><!-- /.info -->
                                    </figcaption>

                                    <img src="assets/images/blank.gif" data-echo="assets/images/brands/4.png" class="img-responsive" alt="">

                                </figure>
                            </a>
                        </div><!-- /.item -->


                        <div class="item">

                            <a href="#">

                                <figure>
                                    <figcaption class="text-overlay">
                                        <div class="info">
                                            <h4>Gionee</h4>
                                        </div><!-- /.info -->
                                    </figcaption>

                                    <img src="assets/images/blank.gif" data-echo="assets/images/brands/5.png" class="img-responsive" alt="">

                                </figure>
                            </a>
                        </div><!-- /.item -->


                        <div class="item">

                            <a href="#">

                                <figure>
                                    <figcaption class="text-overlay">
                                        <div class="info">
                                            <h4>HP</h4>
                                        </div><!-- /.info -->
                                    </figcaption>

                                    <img src="assets/images/blank.gif" data-echo="assets/images/brands/6.png" class="img-responsive" alt="">

                                </figure>
                            </a>
                        </div><!-- /.item -->


                        <div class="item">

                            <a href="#">

                                <figure>
                                    <figcaption class="text-overlay">
                                        <div class="info">
                                            <h4>HTC</h4>
                                        </div><!-- /.info -->
                                    </figcaption>

                                    <img src="assets/images/blank.gif" data-echo="assets/images/brands/3.png" class="img-responsive" alt="">

                                </figure>
                            </a>
                        </div><!-- /.item -->


                        <div class="item">

                            <a href="#">

                                <figure>
                                    <figcaption class="text-overlay">
                                        <div class="info">
                                            <h4>IBM</h4>
                                        </div><!-- /.info -->
                                    </figcaption>

                                    <img src="assets/images/blank.gif" data-echo="assets/images/brands/5.png" class="img-responsive" alt="">

                                </figure>
                            </a>
                        </div><!-- /.item -->


                        <div class="item">

                            <a href="#">

                                <figure>
                                    <figcaption class="text-overlay">
                                        <div class="info">
                                            <h4>Lenova</h4>
                                        </div><!-- /.info -->
                                    </figcaption>

                                    <img src="assets/images/blank.gif" data-echo="assets/images/brands/2.png" class="img-responsive" alt="">

                                </figure>
                            </a>
                        </div><!-- /.item -->


                        <div class="item">

                            <a href="#">

                                <figure>
                                    <figcaption class="text-overlay">
                                        <div class="info">
                                            <h4>LG</h4>
                                        </div><!-- /.info -->
                                    </figcaption>

                                    <img src="assets/images/blank.gif" data-echo="assets/images/brands/1.png" class="img-responsive" alt="">

                                </figure>
                            </a>
                        </div><!-- /.item -->


                        <div class="item">

                            <a href="#">

                                <figure>
                                    <figcaption class="text-overlay">
                                        <div class="info">
                                            <h4>Micromax</h4>
                                        </div><!-- /.info -->
                                    </figcaption>

                                    <img src="assets/images/blank.gif" data-echo="assets/images/brands/6.png" class="img-responsive" alt="">

                                </figure>
                            </a>
                        </div><!-- /.item -->


                        <div class="item">

                            <a href="#">

                                <figure>
                                    <figcaption class="text-overlay">
                                        <div class="info">
                                            <h4>Microsoft</h4>
                                        </div><!-- /.info -->
                                    </figcaption>

                                    <img src="assets/images/blank.gif" data-echo="assets/images/brands/4.png" class="img-responsive" alt="">

                                </figure>
                            </a>
                        </div><!-- /.item -->


                    </div><!-- /.owl-carousel -->

                </div>
            </section>

             @include('user.layout.footer1')

        </div><!-- #page -->

        <!-- For demo purposes – can be removed on production -->
       
        <!-- For demo purposes – can be removed on production : End -->

        <script type="text/javascript" src="assets/js/jquery.min.js"></script>
        <script type="text/javascript" src="assets/js/tether.min.js"></script>
        <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="assets/js/bootstrap-hover-dropdown.min.js"></script>
        <script type="text/javascript" src="assets/js/owl.carousel.min.js"></script>
        <script type="text/javascript" src="assets/js/echo.min.js"></script>
        <script type="text/javascript" src="assets/js/wow.min.js"></script>
        <script type="text/javascript" src="assets/js/jquery.easing.min.js"></script>
        <script type="text/javascript" src="assets/js/jquery.waypoints.min.js"></script>
        <script type="text/javascript" src="assets/js/electro.js"></script>

        <!-- For demo purposes – can be removed on production -->

        <script src="switchstylesheet/switchstylesheet.js"></script>

           <script>
           (function($) {
               $(document).ready(function(){
                   $(".changecolor").switchstylesheet( { seperator:"color"} );
                   $('.show-theme-options').click(function(){
                       $(this).parent().toggleClass('open');
                       return false;
                   });

                   $('#home-pages').on( 'change', function() {
                       $.ajax({
                           url : $('#home-pages option:selected').val(),
                           success:function(res) {
                               location.href = $('#home-pages option:selected').val();
                           }
                       });
                   });

                    $('#demo-pages').on( 'change', function() {
            			$.ajax({
            				url : $('#demo-pages option:selected').val(),
            				success:function(res) {
            					location.href = $('#demo-pages option:selected').val();
            				}
            			});
            		});

                    $('#header-style').on( 'change', function() {
            			$.ajax({
            				url : $('#header-style option:selected').val(),
            				success:function(res) {
            					location.href = $('#header-style option:selected').val();
            				}
            			});
            		});

                    $('#shop-style').on( 'change', function() {
            			$.ajax({
            				url : $('#shop-style option:selected').val(),
            				success:function(res) {
            					location.href = $('#shop-style option:selected').val();
            				}
            			});
            		});

                    $('#product-category-col').on( 'change', function() {
            			$.ajax({
            				url : $('#product-category-col option:selected').val(),
            				success:function(res) {
            					location.href = $('#product-category-col option:selected').val();
            				}
            			});
            		});

                    $('#single-products').on( 'change', function() {
            			$.ajax({
            				url : $('#single-products option:selected').val(),
            				success:function(res) {
            					location.href = $('#single-products option:selected').val();
            				}
            			});
            		});

                    $('.style-toggle').on( 'click', function() {
            			$(this).parent('.config').toggleClass( 'open' );
            		});
               });
        })(jQuery);
        </script>
        <!-- For demo purposes – can be removed on production : End -->

    </body>
@endsection