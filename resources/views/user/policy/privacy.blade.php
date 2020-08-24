@extends('user.layout.app1')
@section('content')
      <div id="content" class="site-content" tabindex="-1">
                <div class="container">

                    <nav class="woocommerce-breadcrumb" >
                        <a href="{{url('/')}}">Home</a>
                        <span class="delimiter"><i class="fa fa-angle-right"></i></span>
                    Privacy Policy
                    </nav><!-- .woocommerce-breadcrumb -->


                    <div id="primary" class="content-area">
                        <main id="main" class="site-main">

                          <article id="post-2183" class="hentry">
                                @if(isset($text))

                                <header class="entry-header">
                                    <h1 class="entry-title">Privacy Policy</h1>
                                    <p class="entry-subtitle">This Agreement was last modified on {{$text->created_at}}</p>
                                </header><!-- .entry-header -->

                                <div class="entry-content">
                                  {!!$text->desc1!!}

                                </div><!-- .entry-content -->
                                @else
                                <div style="text-align: center" class="entry-content">
                                <h3>We will update it soon</h3>

                                </div>
                                @endif


                            </article><!-- #post-## -->

                        </main><!-- #main -->
                    </div><!-- #primary -->


                </div><!-- .col-full -->
            </div><!-- #content -->
@endsection