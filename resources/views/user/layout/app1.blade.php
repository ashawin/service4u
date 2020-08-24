<!DOCTYPE html>
<html lang="en-US" itemscope="itemscope" itemtype="http://schema.org/WebPage">
    
<!-- Mirrored from transvelo.github.io/electro-html/single-product.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 04 Aug 2020 20:24:48 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>

        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>ServiceCenter4u</title>

        <link rel="stylesheet" type="text/css" href="{{asset('users/assets1/css/bootstrap.min.css')}}" media="all" />
        <link rel="stylesheet" type="text/css" href="{{asset('users/assets1/css/font-awesome.min.css')}}" media="all" />
        <link rel="stylesheet" type="text/css" href="{{asset('users/assets1/css/animate.min.css')}}" media="all" />
        <link rel="stylesheet" type="text/css" href="{{asset('users/assets1/css/font-electro.css')}}" media="all" />
        <link rel="stylesheet" type="text/css" href="{{asset('users/assets1/css/owl-carousel.css')}}" media="all" />
        <link rel="stylesheet" type="text/css" href="{{asset('users/assets1/css/style.css')}}" media="all" />
        <link rel="stylesheet" type="text/css" href="{{asset('users/assets1/css/colors/yellow.css')}}" media="all" />

        <!-- Demo Purpose Only. Should be removed in production -->
        <link rel="stylesheet" href="{{asset('users/assets/css/config.css')}}">

        <link href="assets/css/colors/green.css" rel="alternate stylesheet" title="Green color">
        <link href="assets/css/colors/pink.css" rel="alternate stylesheet" title="Pink color">
        <link href="assets/css/colors/blue.css" rel="alternate stylesheet" title="Blue color">
        <link href="assets/css/colors/red.css" rel="alternate stylesheet" title="Red color">
        <link href="assets/css/colors/orange.css" rel="alternate stylesheet" title="Orange color">
        <link href="assets/css/colors/black.css" rel="alternate stylesheet" title="Black color">
        <link href="assets/css/colors/gold.css" rel="alternate stylesheet" title="Gold color">
        <link href="assets/css/colors/yellow.css" rel="alternate stylesheet" title="Yellow color">
        <link href="assets/css/colors/flat-blue.css" rel="alternate stylesheet" title="Flat Blue color">
        <!-- Demo Purpose Only. Should be removed in production : END -->

        <link href='../../fonts.googleapis.com/css7372.css?family=Open+Sans:400,300,600,700,700italic,800,800italic,600italic,400italic,300italic' rel='stylesheet' type='text/css'>

        <link rel="shortcut icon" href="assets/images/fav-icon.png">
    </head>



<body class="single-product full-width extended">
        <div id="page" class="hfeed site">
            <a class="skip-link screen-reader-text" href="#site-navigation">Skip to navigation</a>
            <a class="skip-link screen-reader-text" href="#content">Skip to content</a>

             <div class="top-bar hidden-md-down">
                <div class="container">
                    <nav>
                        <ul id="menu-top-bar-left" class="nav nav-inline pull-left animate-dropdown flip">
                            <li class="menu-item animate-dropdown"><a title="Welcome to Worldwide Electronics Store" href="#">Welcome  @if(Auth::check())
{{auth()->user()->name}}
                            @endif</a></li>
                        </ul>
                    </nav>
                    
                    <nav>
                        <ul id="menu-top-bar-right" class="nav nav-inline pull-right animate-dropdown flip">
                            <li class="menu-item animate-dropdown"><a title="Store Locator" href="{{url('contact')}}"><i class="ec ec-map-pointer"></i>contact</a></li>
                            @if(Auth::check())
                            
                           
                            
                          <li class="menu-item animate-dropdown"><a title="My Account" href="{{url('profile')}}"><i class="ec ec-user"></i>My Account</a></li>
                          <li class="menu-item animate-dropdown"><a href="{{ route('logout') }}" title="My Account" onclick="event.preventDefault(); document.getElementById('frm-logout').submit();"><i class="ec ec-user"></i>Logout</a>
                           <form id="frm-logout" action="{{ route('logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form></li>
                          @else
                           
                            <li class="menu-item animate-dropdown">          
                            <a title="My Account" href="{{url('user/login')}}"><i class="ec ec-user"></i>Login/Signup</a></li>
                            @endif
                        </ul>
                    </nav>
                </div>
            </div><!-- /.top-bar -->

          @include('user.layout.header1')
           @include('user.layout.nav')

         @yield('content')

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

  
        <script type="text/javascript" src="{{asset('users/assets1/js/jquery.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('users/assets1/js/tether.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('users/assets1/js/bootstrap.min.js')}}"></script>
            <script type="text/javascript" src="{{asset('users/assets1/js/bootstrap-hover-dropdown.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('users/assets1/js/owl.carousel.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('users/assets1/js/echo.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('users/assets1/js/wow.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('users/assets1/js/jquery.easing.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('users/assets1/js/jquery.waypoints.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('users/assets1/js/electro.js')}}"></script>

        <!-- For demo purposes – can be removed on production -->

        <script src="{{asset('users/switchstylesheet/switchstylesheet.js')}}"></script>


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



<!-- Mirrored from transvelo.github.io/electro-html/single-product.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 04 Aug 2020 20:26:29 GMT -->
</html>
