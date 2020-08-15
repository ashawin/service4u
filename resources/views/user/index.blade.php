@extends('user.layout.app')
@section('content')
<main id="content" role="main">
            <!-- Slider Section -->
            <div class="mb-5">
                <div class="bg-img-hero" style="background-image: url('users/assets/img/1920X422/img1.jpg');">
                    <div class="container min-height-420 overflow-hidden">
                        <div class="js-slick-carousel u-slick"
                            data-pagi-classes="text-center position-absolute right-0 bottom-0 left-0 u-slick__pagination u-slick__pagination--long justify-content-start mb-3 mb-md-4 offset-xl-3 pl-2 pb-1">
                            <div class="js-slide bg-img-hero-center">
                                <div class="row min-height-420 py-7 py-md-0">
                                    <div class="offset-xl-3 col-xl-4 col-6 mt-md-8">
                                        <h1 class="font-size-64 text-lh-57 font-weight-light"
                                            data-scs-animation-in="fadeInUp">
                                            THE NEW <span class="d-block font-size-55">STANDARD</span>
                                        </h1>
                                       
                                        <div class="mb-4"
                                            data-scs-animation-in="fadeInUp"
                                            data-scs-animation-delay="300">
                                            <span class="font-size-13">FROM</span>
                                            <div class="font-size-50 font-weight-bold text-lh-45">
                                                <sup class="">&#x20B9</sup>{{$mainBanner->price}}<sup class=""></sup>
                                            </div>
                                        </div>
                                        <a href="{{url('/services/'.$mainBanner->category)}}" class="btn btn-primary transition-3d-hover rounded-lg font-weight-normal py-2 px-md-7 px-3 font-size-16"
                                            data-scs-animation-in="fadeInUp"
                                            data-scs-animation-delay="400">
                                           Book Now
                                        </a>
                                    </div>
                                    <div class="col-xl-5 col-6  d-flex align-items-center"
                                        data-scs-animation-in="zoomIn"
                                        data-scs-animation-delay="500">
                                        <img class="img-fluid" src="{{asset('products/banners/'.$mainBanner->image)}}" alt="Image Description">
                                    </div>
                                </div>
                            </div>
                            <div class="js-slide bg-img-hero-center" data-animation-delay="0">
                                <div class="row min-height-420 py-7 py-md-0">
                                    <div class="offset-xl-3 col-xl-4 col-6 mt-md-8">
                                        <h1 class="font-size-64 text-lh-57 font-weight-light"
                                            data-scs-animation-in="fadeInUp">
                                            THE NEW <span class="d-block font-size-55">STANDARD</span>
                                        </h1>
                                        <h6 class="font-size-15 font-weight-bold mb-3"
                                            data-scs-animation-in="fadeInUp"
                                            data-scs-animation-delay="200">UNDER FAVORABLE SMARTWATCHES
                                        </h6>
                                        <div class="mb-4"
                                            data-scs-animation-in="fadeInUp"
                                            data-scs-animation-delay="300">
                                            <span class="font-size-13">FROM</span>
                                            <div class="font-size-50 font-weight-bold text-lh-45">
                                                <sup class="">$</sup>749<sup class="">99</sup>
                                            </div>
                                        </div>
                                        <a href="http://transvelo.github.io/electro-html/2.0/html/shop/single-product-fullwidth.html" class="btn btn-primary transition-3d-hover rounded-lg font-weight-normal py-2 px-md-7 px-3 font-size-16"
                                            data-scs-animation-in="fadeInUp"
                                            data-scs-animation-delay="400">
                                            Start Buying
                                        </a>
                                    </div>
                                    <div class="col-xl-5 col-6  d-flex align-items-center"
                                        data-scs-animation-in="fadeInUp"
                                        data-scs-animation-delay="500">
                                        <img class="img-fluid" src="{{asset('users/assets/img/416X420/img2.png')}}" alt="Image Description">
                                    </div>
                                </div>
                            </div>
                            <div class="js-slide bg-img-hero-center" data-animation-delay="0">
                                <div class="row min-height-420 py-7 py-md-0">
                                    <div class="offset-xl-3 col-xl-4 col-6 mt-md-8">
                                        <h1 class="font-size-64 text-lh-57 font-weight-light"
                                            data-scs-animation-in="fadeInUp">
                                            THE NEW <span class="d-block font-size-55">STANDARD</span>
                                        </h1>
                                        <h6 class="font-size-15 font-weight-bold mb-3"
                                            data-scs-animation-in="fadeInUp"
                                            data-scs-animation-delay="200">UNDER FAVORABLE SMARTWATCHES
                                        </h6>
                                        <div class="mb-4"
                                            data-scs-animation-in="fadeInUp"
                                            data-scs-animation-delay="300">
                                            <span class="font-size-13">FROM</span>
                                            <div class="font-size-50 font-weight-bold text-lh-45">
                                                <sup class="">$</sup>749<sup class="">99</sup>
                                            </div>
                                        </div>
                                        <a href="http://transvelo.github.io/electro-html/2.0/html/shop/single-product-fullwidth.html" class="btn btn-primary transition-3d-hover rounded-lg font-weight-normal py-2 px-md-7 px-3 font-size-15"
                                            data-scs-animation-in="fadeInUp"
                                            data-scs-animation-delay="400">
                                            Start Buying
                                        </a>
                                    </div>
                                    <div class="col-xl-5 col-6  d-flex align-items-center"
                                        data-scs-animation-in="fadeInRight"
                                        data-scs-animation-delay="500">
                                        <img class="img-fluid" src="{{asset('users/assets/img/416X420/img3.png')}}" alt="Image Description">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Slider Section -->
            <div class="container">
                <!-- Banner -->
                <div class="mb-5">
                    <div class="row">
                    	@foreach($services as $service)
                    	<?php
                                                $images= array();
                                                $images=explode('|',$service->images);
                                                ?>
                        <div class="col-md-6 mb-4 mb-xl-0 col-xl-3">
                            <a href="{{url('category/subcategory/'.$service->pro_slug)}}" class="d-black text-gray-90">
                                <div class="min-height-132 py-1 d-flex bg-gray-1 align-items-center">
                                    <div class="col-6 col-xl-5 col-wd-6 pr-0">
                                        <img class="img-fluid" src="{{asset('products/images/'.$images[0])}}" alt="Image Description">
                                    </div>
                                    <div class="col-6 col-xl-7 col-wd-6">
                                        <div class="mb-2 pb-1 font-size-18 font-weight-light text-ls-n1 text-lh-23">
                                           {{$service->product}}
                                        </div>
                                        <div class="link text-gray-90 font-weight-bold font-size-15" href="#">
                                            Book now
                                            <span class="link__icon ml-1">
                                                <span class="link__icon-inner"><i class="ec ec-arrow-right-categproes"></i></span>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        @endforeach
                      
                    </div>
                </div>
                <!-- End Banner -->
                <!-- Deals-and-tabs -->
                <div class="mb-5">
                    <div class="row">
                        <!-- Deal -->
                        <div class="col-md-auto mb-6 mb-md-0">
                            <div class="p-3 border border-width-2 border-primary borders-radius-20 bg-white min-width-370">
                                <div class="d-flex justify-content-between align-items-center m-1 ml-2">
                                    <h3 class="font-size-22 mb-0 font-weight-normal text-lh-28 max-width-120">Special Offer</h3>
                                    <div class="d-flex align-items-center flex-column justify-content-center bg-primary rounded-pill height-75 width-75 text-lh-1">
                                        <span class="font-size-12">Save</span>
                                        <div class="font-size-20 font-weight-bold">$120</div>
                                    </div>
                                </div>
                                <div class="mb-4">
                                    <a href="http://transvelo.github.io/electro-html/2.0/html/shop/single-product-fullwidth.html" class="d-block text-center"><img class="img-fluid" src="{{asset('users/assets/img/320X300/img1.jpg')}}" alt="Image Description"></a>
                                </div>
                                <h5 class="mb-2 font-size-14 text-center mx-auto max-width-180 text-lh-18"><a href="http://transvelo.github.io/electro-html/2.0/html/shop/single-product-fullwidth.html" class="text-blue font-weight-bold">Game Console Controller + USB 3.0 Cable</a></h5>
                                <div class="d-flex align-items-center justify-content-center mb-3">
                                    <del class="font-size-18 mr-2 text-gray-2">$99,00</del>
                                    <ins class="font-size-30 text-red text-decoration-none">$79,00</ins>
                                </div>
                                <div class="mb-3 mx-2">
                                    <div class="d-flex justify-content-between align-items-center mb-2">
                                        <span class="">Availavle: <strong>6</strong></span>
                                        <span class="">Already Sold: <strong>28</strong></span>
                                    </div>
                                    <div class="rounded-pill bg-gray-3 height-20 position-relative">
                                        <span class="position-absolute left-0 top-0 bottom-0 rounded-pill w-30 bg-primary"></span>
                                    </div>
                                </div>
                                <div class="mb-2">
                                    <h6 class="font-size-15 text-gray-2 text-center mb-3">Hurry Up! Offer ends in:</h6>
                                    <div class="js-countdown d-flex justify-content-center"
                                        data-end-date="2020/11/30"
                                        data-hours-format="%H"
                                        data-minutes-format="%M"
                                        data-seconds-format="%S">
                                        <div class="text-lh-1">
                                            <div class="text-gray-2 font-size-30 bg-gray-4 py-2 px-2 rounded-sm mb-2">
                                                <span class="js-cd-hours"></span>
                                            </div>
                                            <div class="text-gray-2 font-size-12 text-center">HOURS</div>
                                        </div>
                                        <div class="mx-1 pt-1 text-gray-2 font-size-24">:</div>
                                        <div class="text-lh-1">
                                            <div class="text-gray-2 font-size-30 bg-gray-4 py-2 px-2 rounded-sm mb-2">
                                                <span class="js-cd-minutes"></span>
                                            </div>
                                            <div class="text-gray-2 font-size-12 text-center">MINS</div>
                                        </div>
                                        <div class="mx-1 pt-1 text-gray-2 font-size-24">:</div>
                                        <div class="text-lh-1">
                                            <div class="text-gray-2 font-size-30 bg-gray-4 py-2 px-2 rounded-sm mb-2">
                                                <span class="js-cd-seconds"></span>
                                            </div>
                                            <div class="text-gray-2 font-size-12 text-center">SECS</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Deal -->
                        <!-- Tab Prodcut -->
                        <div class="col">
                            <!-- Features Section -->
                            <div class="">
                                <!-- Nav Classic -->
                                <div class="position-relative bg-white text-center z-index-2">
                                    <ul class="nav nav-classic nav-tab justify-content-center" id="pills-tab" role="tablist">
                                        @if(isset($categories[0]->category))
                                     <li class="nav-item">
                                            <a class="nav-link active " id="{{\Str::slug($categories[0]->category)}}-tab" data-toggle="pill" href="#{{\Str::slug($categories[0]->category)}}" role="tab" aria-controls="{{\Str::slug($categories[0]->category)}}" aria-selected="false">
                                                <div class="d-md-flex justify-content-md-center align-items-md-center">
                                                   {{$categories[0]->category}}
                                                </div>
                                            </a>
                                        </li>
                                        @endif
                                      @if(isset($categories[1]->category))
                                         <li class="nav-item">
                                            <a class="nav-link  " id="{{\Str::slug($categories[1]->category)}}-tab" data-toggle="pill" href="#{{\Str::slug($categories[1]->category)}}" role="tab" aria-controls="{{\Str::slug($categories[1]->category)}}" aria-selected="false">
                                                <div class="d-md-flex justify-content-md-center align-items-md-center">
                                                   {{$categories[1]->category}}
                                                </div>
                                            </a>
                                        </li>
                                        @endif
                                  
                                    
                                    </ul>
                                </div>
                                <!-- End Nav Classic -->
                                 @foreach($products as $product)
                                <!-- Tab Content -->
                                <?php
                                $active=$product->id==$categories[0]->id ?'show active':'';


                                ?>

                                      <div class="tab-content" id="pills-tabContent" >
                                    <div class="tab-pane fade pt-2 {{$active}}  " id="{{\Str::slug($product->category)}}" role="tabpanel" aria-labelledby="{{\Str::slug($product->category)}}-tab">
                                        <ul class="row list-unstyled products-group no-gutters">
                                             @foreach($product->products as $pro)
                                             <?php
                                              $service=App\Models\Service::join('products','products.id','=','services.product_id')
                                          ->select('products.product','products.images','products.slug as pro_slug','products.id as pro_id')
                                          ->where('services.product_id','=',$pro->product_id)
                                          ->first();

                                            
                                                $images= array();
                                                $images=explode('|',$service->images);
                                                

                                          ?>
                                            <li class="col-6 col-wd-3 col-md-4 ">
                                                <div class="product-item__outer h-100">
                                                    <div class="product-item__inner px-xl-4 p-3">
                                                        <div class="product-item__body pb-xl-2">
                                                            <div class="mb-2"><a href="{{url('category/subcategory/'.$service->pro_slug)}}" class="font-size-12 text-gray-5">{{$service->product}}</a></div>
                                                            <h5 class="mb-1 product-item__title"><a href="{{url('category/subcategory/'.$service->pro_slug)}}" class="text-blue font-weight-bold">{{$service->product}}</a></h5>
                                                            <div class="mb-2">
                                                                <a href="{{url('category/subcategory/'.$service->pro_slug)}}" class="d-block text-center"><img class="img-fluid" src="{{asset('products/images/'.$images[0])}}" alt="Image Description"></a>
                                                            </div>
                                                            <div class="flex-center-between mb-1">
                                                                <div class="prodcut-price">
                                                                    <div class="text-gray-100">Rs.{{$pro->price}}</div>
                                                                </div>
                                                                <div class="d-none d-xl-block prodcut-add-cart">
                                                                    <a href="{{url('category/subcategory/'.$service->pro_slug)}}" class="btn-add-cart btn-primary transition-3d-hover"><i class="ec ec-add-to-cart"></i></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                       <!--  <div class="product-item__footer">
                                                            <div class="border-top pt-2 flex-center-between flex-wrap">
                                                                <a href="http://transvelo.github.io/electro-html/2.0/html/shop/compare.html" class="text-gray-6 font-size-13"><i class="ec ec-compare mr-1 font-size-15"></i> Compare</a>
                                                                <a href="http://transvelo.github.io/electro-html/2.0/html/shop/wishlist.html" class="text-gray-6 font-size-13"><i class="ec ec-favorites mr-1 font-size-15"></i> Add to Wishlist</a>
                                                            </div>
                                                        </div> -->
                                                    </div>
                                                </div>
                                            </li>
                                            @endforeach
                                           
                                           
                                      
                                        </ul>
                                    </div>
                               
                                       </div>
                                @endforeach

                                <!-- End Tab Content -->
                            </div>
                            <!-- End Features Section -->
                        </div>
                        <!-- End Tab Prodcut -->
                    </div>
                </div>
                <!-- End Deals-and-tabs -->
            </div>
            <!-- Products-4-1-4 -->
            <div class="products-group-4-1-4 space-1 bg-gray-7">
                <h2 class="sr-only">Products Grid</h2>
                <div class="container">
                    <!-- Nav Classic -->
                    <div class="position-relative text-center z-index-2 mb-3">
                        <ul class="nav nav-classic nav-tab nav-tab-sm px-md-3 justify-content-start justify-content-lg-center flex-nowrap flex-lg-wrap overflow-auto overflow-lg-visble border-md-down-bottom-0 pb-1 pb-lg-0 mb-n1 mb-lg-0" id="pills-tab-1" role="tablist">
                             @if(isset($categories[0]->category))
                            <li class="nav-item flex-shrink-0 flex-lg-shrink-1">
                                <a class="nav-link active " id="{{\Str::slug($categories[0]->category)}}-2-tab" data-toggle="pill" href="#{{\Str::slug($categories[0]->category)}}-2" role="tab" aria-controls="Tpills-one-example1" aria-selected="true">
                                    <div class="d-md-flex justify-content-md-center align-items-md-center">
                                       {{$categories[0]->category}}
                                    </div>
                                </a>
                            </li>
                            @endif
                            
                    	 @if(isset($categories[1]->category))
                            <li class="nav-item flex-shrink-0 flex-lg-shrink-1">
                                <a class="nav-link " id="{{\Str::slug($categories[1]->category)}}-2-tab" data-toggle="pill" href="#{{\Str::slug($categories[1]->category)}}-2" role="tab" aria-controls="Tpills-two-example1" aria-selected="false">
                                    <div class="d-md-flex justify-content-md-center align-items-md-center">
                                      {{$categories[1]->category}}
                                    </div>
                                </a>
                            </li>
                            @endif
                            @if(isset($categories[2]->category))
                                 <li class="nav-item flex-shrink-0 flex-lg-shrink-1">
                                <a class="nav-link " id="{{\Str::slug($categories[2]->category)}}-2-tab" data-toggle="pill" href="#{{\Str::slug($categories[2]->category)}}-2" role="tab" aria-controls="Tpills-two-example1" aria-selected="false">
                                    <div class="d-md-flex justify-content-md-center align-items-md-center">
                                      {{$categories[2]->category}}
                                    </div>
                                </a>
                            </li>
                            @endif
                         
                                              
                        </ul>
                    </div>
                    <!-- End Nav Classic -->

                    <!-- Tab Content -->
                    <div class="tab-content" id="Tpills-tabContent">
                           @foreach($products as $product)
                                <!-- Tab Content -->
                                <?php
                                $active=$product->id==$categories[0]->id ?'show active':'';


                                ?>
                        <div class="tab-pane fade pt-2 {{$active}} " id="{{\Str::slug($product->category)}}-2" role="tabpanel" aria-labelledby="{{\Str::slug($product->category)}}-2-tab">
                            <div class="row no-gutters">
                                <div class="col-md-12 col-wd-4 d-md-flex d-wd-block">
                                    <ul class="row list-unstyled products-group no-gutters mb-0 flex-xl-column flex-wd-row">
                                        @foreach($product->products as $pro)
                                          <?php
                                              $service=App\Models\Service::join('products','products.id','=','services.product_id')
                                          ->select('products.product','products.images','products.slug as pro_slug','products.id as pro_id')
                                          ->where('services.product_id','=',$pro->product_id)
                                          ->first();

                                            
                                                $images= array();
                                                $images=explode('|',$service->images);
                                                

                                          ?>
                                        <li class="col-xl-12  remove-divider ">
                                            <div class="product-item__outer  w-100 prodcut-box-shadow">
                                                <div class="product-item__inner bg-white p-3">
                                                    <div class="product-item__body pb-xl-2">
                                                        <div class="mb-2"><a href="{{url('category/subcategory/'.$service->pro_slug)}}" class="font-size-12 text-gray-5">Speakers</a></div>
                                                        <h5 class="mb-1 product-item__title"><a href="http://transvelo.github.io/electro-html/2.0/html/shop/single-product-fullwidth.html" class="text-blue font-weight-bold">{{$service->product}}</a></h5>
                                                        <div class="mb-2">
                                                            <a href="{{url('category/subcategory/'.$service->pro_slug)}}" class="d-block text-center"><img class="img-fluid" src="{{asset('products/images/'.$images[0])}}" height="200px" width="200px" alt="Image Description"></a>
                                                        </div>
                                                        <div class="flex-center-between mb-1">
                                                            <div class="prodcut-price">
                                                                <div class="text-gray-100">{{$service->price}}</div>
                                                            </div>
                                                            <div class="d-none d-xl-block prodcut-add-cart">
                                                                <a href="{{url('category/subcategory/'.$service->pro_slug)}}" class="btn-add-cart btn-primary transition-3d-hover"><i class="ec ec-add-to-cart"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                            <!--         <div class="product-item__footer">
                                                        <div class="border-top pt-2 flex-center-between flex-wrap">
                                                            <a href="http://transvelo.github.io/electro-html/2.0/html/shop/compare.html" class="text-gray-6 font-size-13"><i class="ec ec-compare mr-1 font-size-15"></i> Compare</a>
                                                            <a href="http://transvelo.github.io/electro-html/2.0/html/shop/wishlist.html" class="text-gray-6 font-size-13"><i class="ec ec-favorites mr-1 font-size-15"></i> Add to Wishlist</a>
                                                        </div>
                                                    </div> -->
                                                </div>
                                            </div>
                                        </li>
                                        @endforeach
                                      
                                    </ul>
                                </div>
                                
                               
                            </div>
                        </div>

                        @endforeach
                     
                  
                    </div>
                    <!-- End Tab Content -->
                </div>

                <!-- Features Section -->
             
                <!-- End Features Section -->
            </div>
            <!-- End Products-4-1-4 -->
            <div class="container">
                <!-- Prodcut-cards-carousel -->
                <div class="space-top-2">
                    <dv class=" d-flex justify-content-between border-bottom border-color-1 flex-md-nowrap flex-wrap border-sm-bottom-0">
                        <h3 class="section-title mb-0 pb-2 font-size-22">Bestsellers</h3>
                        <ul class="nav nav-pills mb-2 pt-3 pt-md-0 mb-0 border-top border-color-1 border-md-top-0 align-items-center font-size-15 font-size-15-md flex-nowrap flex-md-wrap overflow-auto overflow-md-visble">
                            <li class="nav-item flex-shrink-0 flex-md-shrink-1">
                                <a class="text-gray-90 btn btn-outline-primary border-width-2 rounded-pill py-1 px-4 font-size-15 text-lh-19 font-size-15-md" href="#">Top 6</a>
                            </li>
                           <!--  <li class="nav-item flex-shrink-0 flex-md-shrink-1">
                                <a class="nav-link text-gray-8" href="#">Phones & Tablets</a>
                            </li>
                            <li class="nav-item flex-shrink-0 flex-md-shrink-1">
                                <a class="nav-link text-gray-8" href="#">Laptops & Computers</a>
                            </li>
                            <li class="nav-item flex-shrink-0 flex-md-shrink-1">
                                <a class="nav-link text-gray-8" href="#"> Video Cameras</a>
                            </li> -->
                        </ul>
                    </dv>
                    <div class="js-slick-carousel u-slick u-slick--gutters-2 overflow-hidden u-slick-overflow-visble pt-3 pb-6"
                        data-pagi-classes="text-center right-0 bottom-1 left-0 u-slick__pagination u-slick__pagination--long mb-0 z-index-n1 mt-4">
                        <div class="js-slide">
                            <ul class="row list-unstyled products-group no-gutters mb-0 overflow-visible">
                                @foreach($all as $pro)
                                  <?php
                             $images= array();
                                                $images=explode('|',$pro->images);
                                                
                                                
                                                ?>
                                <li class="col-wd-3 col-md-4 product-item product-item__card pb-2 mb-2 pb-md-0 mb-md-0 border-bottom border-md-bottom-0">
                                    <div class="product-item__outer h-100">
                                        <div class="product-item__inner p-md-3 row no-gutters">
                                            <div class="col col-lg-auto product-media-left">
                                                <a href="{{url('category/subcategory/'.$pro->pro_slug)}}" class="max-width-150 d-block"><img class="img-fluid" src=" {{asset('products/images/'.$images[0])}}" alt="Image Description"></a>
                                            </div>
                                            <div class="col product-item__body pl-2 pl-lg-3 mr-xl-2 mr-wd-1">
                                                <div class="mb-4">
                                                    <div class="mb-2"><a href="{{url('category/subcategory/'.$pro->pro_slug)}}" class="font-size-12 text-gray-5">{{$pro->subcategory}}</a></div>
                                                    <h5 class="product-item__title"><a href="{{url('category/subcategory/'.$pro->pro_slug)}}" class="text-blue font-weight-bold">{{$pro->product}}</a></h5>
                                                </div>
                                                <div class="flex-center-between mb-3">
                                                    <div class="prodcut-price">
                                                        <div class="text-gray-100">Rs.{{$pro->price}}</div>
                                                    </div>
                                                    <div class="d-none d-xl-block prodcut-add-cart">
                                                        <a href="{{url('category/subcategory/'.$pro->pro_slug)}}" class="btn-add-cart btn-primary transition-3d-hover"><i class="ec ec-add-to-cart"></i></a>
                                                    </div>
                                                </div>
                                                <div class="product-item__footer">
                                                    <div class="border-top pt-2 flex-center-between flex-wrap">
                                                        <a href="http://transvelo.github.io/electro-html/2.0/html/shop/compare.html" class="text-gray-6 font-size-13"><i class="ec ec-compare mr-1 font-size-15"></i> Compare</a>
                                                        <a href="http://transvelo.github.io/electro-html/2.0/html/shop/wishlist.html" class="text-gray-6 font-size-13"><i class="ec ec-favorites mr-1 font-size-15"></i> Wishlist</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                @endforeach
                             
                            </ul>
                        </div>
                       
                    </div>
                </div>
                <!-- End Prodcut-cards-carousel -->
                <!-- Full banner -->
             
                <!-- End Full banner -->
                <!-- Recently viewed -->
                <div class="mb-6">
                    <div class="position-relative">
                        <div class="border-bottom border-color-1 mb-2">
                            <h3 class="section-title mb-0 pb-2 font-size-22">All</h3>
                        </div>
                        <div class="js-slick-carousel u-slick position-static overflow-hidden u-slick-overflow-visble pb-7 pt-2 px-1"
                            data-pagi-classes="text-center right-0 bottom-1 left-0 u-slick__pagination u-slick__pagination--long mb-0 z-index-n1 mt-3 mt-md-0"
                            data-slides-show="7"
                            data-slides-scroll="1"
                            data-arrows-classes="position-absolute top-0 font-size-17 u-slick__arrow-normal top-10"
                            data-arrow-left-classes="fa fa-angle-left right-1"
                            data-arrow-right-classes="fa fa-angle-right right-0"
                            data-responsive='[{
                              "breakpoint": 1400,
                              "settings": {
                                "slidesToShow": 6
                              }
                            }, {
                                "breakpoint": 1200,
                                "settings": {
                                  "slidesToShow": 4
                                }
                            }, {
                              "breakpoint": 992,
                              "settings": {
                                "slidesToShow": 3
                              }
                            }, {
                              "breakpoint": 768,
                              "settings": {
                                "slidesToShow": 2
                              }
                            }, {
                              "breakpoint": 554,
                              "settings": {
                                "slidesToShow": 2
                              }
                            }]'>

                            


                            @foreach($all as $pro)
                            <?php
                             $images= array();
                                                $images=explode('|',$pro->images);


                                                ?>
                            <div class="js-slide products-group">
                                <div class="product-item">
                                    <div class="product-item__outer h-100">
                                        <div class="product-item__inner px-wd-4 p-2 p-md-3">
                                            <div class="product-item__body pb-xl-2">
                                                <div class="mb-2"><a href="{{url('category/subcategory/'.$pro->pro_slug)}}" class="font-size-12 text-gray-5"></a></div>
                                                <h5 class="mb-1 product-item__title"><a href="{{url('category/subcategory/'.$pro->pro_slug)}}" class="text-blue font-weight-bold">{{$pro->product}}</a></h5>
                                                <div class="mb-2">
                                                    <a href="{{url('category/subcategory/'.$pro->pro_slug)}}" class="d-block text-center"><img class="img-fluid" src="{{asset('products/images/'.$images[0])}}" alt="Image Description"></a>
                                                </div>
                                                <div class="flex-center-between mb-1">
                                                    <div class="prodcut-price">
                                                        <div class="text-gray-100">Rs.{{$pro->price}}</div>
                                                    </div>
                                                    <div class="d-none d-xl-block prodcut-add-cart">
                                                        <a href="{{url('category/subcategory/'.$pro->pro_slug)}}" class="btn-add-cart btn-primary transition-3d-hover"><i class="ec ec-add-to-cart"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-item__footer">
                                                <div class="border-top pt-2 flex-center-between flex-wrap">
                                                    <a href="http://transvelo.github.io/electro-html/2.0/html/shop/compare.html" class="text-gray-6 font-size-13"><i class="ec ec-compare mr-1 font-size-15"></i> Compare</a>
                                                    <a href="http://transvelo.github.io/electro-html/2.0/html/shop/wishlist.html" class="text-gray-6 font-size-13"><i class="ec ec-favorites mr-1 font-size-15"></i> Wishlist</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                       
                        </div>
                    </div>
                </div>
                <!-- End Recently viewed -->
                <!-- Brand Carousel -->
                
                <!-- End Brand Carousel -->
            </div>
        </main>
@endsection