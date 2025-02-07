<!DOCTYPE html>
<html lang="en">
    
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head>
        
        <title>ServiceCenter4u</title>

        <!-- Required Meta Tags Always Come First -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Favicon -->
        <link rel="shortcut icon" href="../../favicon.png">

        <!-- Google Fonts -->
        <link href="../../../../../fonts.googleapis.com/cssd661.css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&amp;display=swap" rel="stylesheet">

        <!-- CSS Implementing Plugins -->
        <link rel="stylesheet" href="{{asset('users/assets/vendor/font-awesome/css/fontawesome-all.min.css')}}">
        <link rel="stylesheet" href="{{asset('users/assets/css/font-electro.css')}}">

        <link rel="stylesheet" href="{{asset('users/assets/vendor/animate.css/animate.min.css')}}">
        <link rel="stylesheet" href="{{asset('users/assets/vendor/hs-megamenu/src/hs.megamenu.css')}}">
        <link rel="stylesheet" href="{{asset('users/assets/vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.css')}}">
        <link rel="stylesheet" href="{{asset('users/assets/vendor/fancybox/jquery.fancybox.css')}}">
                <link rel="stylesheet" href="{{asset('users/assets/vendor/slick-carousel/slick/slick.css')}}">
        <link rel="stylesheet" href="{{asset('users/assets/vendor/bootstrap-select/dist/css/bootstrap-select.min.css')}}">

        <!-- CSS Electro Template -->
        <link rel="stylesheet" href="{{asset('users/assets/css/theme.css')}}">
    </head>

    <body>
        @if($errors->has('email'))
            <p style="text-align: center" class="alert alert-danger">{{$errors->first('email')}}</p>
        @endif
        @if(session()->has('msg'))

        <p style="text-align: center" class="alert alert-success">{{session()->get('msg')}}</p>
        @endif

        <!-- ========== HEADER ========== -->
       @include('user.layout.header')
        <!-- ========== END HEADER ========== -->

        <!-- ========== MAIN CONTENT ========== -->
        @yield('content')
        <!-- ========== END MAIN CONTENT ========== -->

        <!-- ========== FOOTER ========== -->
         @include('user.layout.footer')
        <!-- ========== END FOOTER ========== -->

        <!-- ========== SECONDARY CONTENTS ========== -->
        <!-- Account Sidebar Navigation -->
     @include('user.layout.sidebar')
        <!-- End Account Sidebar Navigation -->
        <!-- ========== END SECONDARY CONTENTS ========== -->

        <!-- Go to Top -->
        <a class="js-go-to u-go-to" href="#"
            data-position='{"bottom": 15, "right": 15 }'
            data-type="fixed"
            data-offset-top="400"
            data-compensation="#header"
            data-show-effect="slideInUp"
            data-hide-effect="slideOutDown">
            <span class="fas fa-arrow-up u-go-to__inner"></span>
        </a>
        <!-- End Go to Top -->

        <!-- JS Global Compulsory -->
        <script src="{{asset('users/assets/vendor/jquery/dist/jquery.min.js')}}"></script>
        <script src="{{asset('users/assets/vendor/jquery-migrate/dist/jquery-migrate.min.js')}}"></script>
        <script src="{{asset('users/assets/vendor/popper.js/dist/umd/popper.min.js')}}"></script>
        <script src="{{asset('users/assets/vendor/bootstrap/bootstrap.min.js')}}"></script>

        <!-- JS Implementing Plugins -->
        <script src="{{asset('users/assets/vendor/appear.js')}}"></script>
        <script src="{{asset('users/assets/vendor/jquery.countdown.min.js')}}"></script>
        <script src="{{asset('users/assets/vendor/hs-megamenu/src/hs.megamenu.js')}}"></script>
        <script src="{{asset('users/assets/vendor/svg-injector/dist/svg-injector.min.js')}}"></script>
        <script src="{{asset('users/assets/vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.concat.min.js')}}"></script>
        <script src="{{asset('users/assets/vendor/jquery-validation/dist/jquery.validate.min.js')}}"></script>
        <script src="{{asset('users/assets/vendor/fancybox/jquery.fancybox.min.js')}}"></script>
        <script src="{{asset('users/assets/vendor/typed.js/lib/typed.min.js')}}"></script>
        <script src="{{asset('users/assets/vendor/slick-carousel/slick/slick.js')}}"></script>
        <script src="{{asset('users/assets/vendor/bootstrap-select/dist/js/bootstrap-select.min.js')}}"></script>

        <!-- JS Electro -->
        <script src="{{asset('users/assets/js/hs.core.js')}}"></script>
        <script src="{{asset('users/assets/js/components/hs.countdown.js')}}"></script>
        <script src="{{asset('users/assets/js/components/hs.header.js')}}"></script>
        <script src="{{asset('users/assets/js/components/hs.hamburgers.js')}}"></script>
        <script src="{{asset('users/assets/js/components/hs.unfold.js')}}"></script>
        <script src="{{asset('users/assets/js/components/hs.focus-state.js')}}"></script>
        <script src="{{asset('users/assets/js/components/hs.malihu-scrollbar.js')}}"></script>
        <script src="{{asset('users/assets/js/components/hs.validation.js')}}"></script>
        <script src="{{asset('users/assets/js/components/hs.fancybox.js')}}"></script>
        <script src="{{asset('users/assets/js/components/hs.onscroll-animation.js')}}"></script>
        <script src="{{asset('users/assets/js/components/hs.slick-carousel.js')}}"></script>
        <script src="{{asset('users/assets/js/components/hs.show-animation.js')}}"></script>
        <script src="{{asset('users/assets/js/components/hs.svg-injector.js')}}"></script>
        <script src="{{asset('users/assets/js/components/hs.go-to.js')}}"></script>
        <script src="{{asset('users/assets/js/components/hs.selectpicker.js')}}"></script>

        <!-- JS Plugins Init. -->
        @yield('script')
        <script>
            $(window).on('load', function () {
                // initialization of HSMegaMenu component
                $('.js-mega-menu').HSMegaMenu({
                    event: 'hover',
                    direction: 'horizontal',
                    pageContainer: $('.container'),
                    breakpoint: 767.98,
                    hideTimeOut: 0
                });

                // initialization of svg injector module
                $.HSCore.components.HSSVGIngector.init('.js-svg-injector');
            });

            $(document).on('ready', function () {
                // initialization of header
                $.HSCore.components.HSHeader.init($('#header'));

                // initialization of animation
                $.HSCore.components.HSOnScrollAnimation.init('[data-animation]');

                // initialization of unfold component
                $.HSCore.components.HSUnfold.init($('[data-unfold-target]'), {
                    afterOpen: function () {
                        $(this).find('input[type="search"]').focus();
                    }
                });

                // initialization of popups
                $.HSCore.components.HSFancyBox.init('.js-fancybox');

                // initialization of countdowns
                var countdowns = $.HSCore.components.HSCountdown.init('.js-countdown', {
                    yearsElSelector: '.js-cd-years',
                    monthsElSelector: '.js-cd-months',
                    daysElSelector: '.js-cd-days',
                    hoursElSelector: '.js-cd-hours',
                    minutesElSelector: '.js-cd-minutes',
                    secondsElSelector: '.js-cd-seconds'
                });

                // initialization of malihu scrollbar
                $.HSCore.components.HSMalihuScrollBar.init($('.js-scrollbar'));

                // initialization of forms
                $.HSCore.components.HSFocusState.init();

                // initialization of form validation
                $.HSCore.components.HSValidation.init('.js-validate', {
                    rules: {
                        confirmPassword: {
                            equalTo: '#signupPassword'
                        }
                    }
                });

                // initialization of show animations
                $.HSCore.components.HSShowAnimation.init('.js-animation-link');

                // initialization of fancybox
                $.HSCore.components.HSFancyBox.init('.js-fancybox');

                // initialization of slick carousel
                $.HSCore.components.HSSlickCarousel.init('.js-slick-carousel');

                // initialization of go to
                $.HSCore.components.HSGoTo.init('.js-go-to');

                // initialization of hamburgers
                $.HSCore.components.HSHamburgers.init('#hamburgerTrigger');

                // initialization of unfold component
                $.HSCore.components.HSUnfold.init($('[data-unfold-target]'), {
                    beforeClose: function () {
                        $('#hamburgerTrigger').removeClass('is-active');
                    },
                    afterClose: function() {
                        $('#headerSidebarList .collapse.show').collapse('hide');
                    }
                });

                $('#headerSidebarList [data-toggle="collapse"]').on('click', function (e) {
                    e.preventDefault();

                    var target = $(this).data('target');

                    if($(this).attr('aria-expanded') === "true") {
                        $(target).collapse('hide');
                    } else {
                        $(target).collapse('show');
                    }
                });

                // initialization of unfold component
                $.HSCore.components.HSUnfold.init($('[data-unfold-target]'));

                // initialization of select picker
                $.HSCore.components.HSSelectPicker.init('.js-select');
            });
        </script>
    </body>

<!-- Mirrored from transvelo.github.io/electro-html/2.0/html/home/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 04 Aug 2020 07:17:11 GMT -->
</html>
