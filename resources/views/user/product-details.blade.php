@extends('user.layout.app1')
@section('content')
  <div id="content" class="site-content" tabindex="-1">
                <div class="container">

                    <nav class="woocommerce-breadcrumb">
                        <a href="{{url('/')}}">Home</a>
                        <span class="delimiter"><i class="fa fa-angle-right"></i></span>
                        <a href="product-category.html">{{$service->category}}</a>
                        <span class="delimiter"><i class="fa fa-angle-right"></i></span>
                        <a href="product-category.html">{{$service->subcategory}}</a>
                        <span class="delimiter"><i class="fa fa-angle-right"></i>
                        </span>{{$service->pro_slug}}
                    </nav><!-- /.woocommerce-breadcrumb -->

                    <div id="primary" class="content-area">
                        <main id="main" class="site-main">
                                          <?php
                                                $images= array();
                                                $images=explode('|',$service->images);

                                                ?>

                            <div class="product">

                                <div class="single-product-wrapper">
                                    <div class="product-images-wrapper">
                                        <span class="onsale">Sale!</span>
                                        <div class="images electro-gallery">

                                            <div class="thumbnails-single owl-carousel">
                                                @foreach($images as $image)
                                               <a href="{{asset('products/images/'.$image)}}" class="zoom" title="" data-rel="prettyPhoto[product-gallery]"><img src="{{asset('products/images/'.$image)}}" data-echo="{{asset('products/images/'.$image)}}" class="wp-post-image" alt="no image"></a>
                                                @endforeach
                                            </div><!-- .thumbnails-single -->

                                            <div class="thumbnails-all columns-5 owl-carousel">
                                                 @foreach($images as $image)
                                                <a href="assets/images/single-product/single-thumb1.jpg" class="first" title=""><img src="{{asset('products/images/'.$image)}}" data-echo="{{asset('products/images/'.$image)}}" class="wp-post-image" alt=""></a>
                                                @endforeach

                                            </div><!-- .thumbnails-all -->
                                        </div><!-- .electro-gallery -->
                                    </div><!-- /.product-images-wrapper -->

                                    <div class="summary entry-summary">

                                        <span class="loop-product-categories">
                                            <a href="product-category.html" rel="tag">{{$service->category}}</a>
                                        </span><!-- /.loop-product-categories -->

                                        <h1 itemprop="name" class="product_title entry-title">{{$service->product}}</h1>

                                        <div class="woocommerce-product-rating">
                                            <div class="star-rating" title="Rated 4.33 out of 5">
                                                <span style="width:86.6%">
                                                    <strong itemprop="ratingValue" class="rating">4.33</strong>
                                                    out of <span itemprop="bestRating">5</span>             based on
                                                    <span itemprop="ratingCount" class="rating">3</span>
                                                    customer ratings
                                                </span>
                                            </div>

                                            <a href="#reviews" class="woocommerce-review-link">(<span itemprop="reviewCount" class="count">3</span> customer reviews)</a>
                                        </div><!-- .woocommerce-product-rating -->

                                      <!--   <div class="brand">
                                            <a href="product-category.html">
                                                <img src="assets/images/single-product/brand.png" alt="Gionee" />
                                            </a>
                                        </div> --><!-- .brand -->

                                        <!-- <div class="availability in-stock">Availablity: <span>In stock</span></div> --><!-- .availability -->

                                        <hr class="single-product-title-divider" />

                                      <!--   <div class="action-buttons">

                                            <a href="#" class="add_to_wishlist" >
                                                Wishlist
                                            </a>



                                            <a href="#" class="add-to-compare-link" data-product_id="2452">Compare</a>
                                        </div> --><!-- .action-buttons -->

                                        <div itemprop="description">
                                            {{$service->desc}}
                                          

                                        <!--     <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.</p>
                                            <p><strong>SKU</strong>: FW511948218</p> -->
                                        </div><!-- .description -->

                                        <div itemprop="offers" itemscope itemtype="http://schema.org/Offer">

                                            <p class="price"><span class="electro-price"><ins><span class="amount">Rs.{{$service->price}}</span></ins> <del></p>

                                            <meta itemprop="price" content="1215" />
                                            <meta itemprop="priceCurrency" content="USD" />
                                            <link itemprop="availability" href="https://schema.org/InStock" />

                                        </div><!-- /itemprop -->

                                        <form class="variations_form cart" method="post">

                                       <!--      <table class="variations">
                                                <tbody>
                                                    <tr>
                                                        <td class="label"><label>Color</label></td>
                                                        <td class="value">
                                                            <select class="" name="attribute_pa_color">
                                                                <option value="">Choose an option</option>
                                                                <option value="black-with-red" >Black with Red</option>
                                                                <option value="white-with-gold"  selected='selected'>White with Gold</option>
                                                            </select>
                                                            <a class="reset_variations" href="#">Clear</a>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table> -->


                                            <div class="single_variation_wrap">
                                                <div class="woocommerce-variation single_variation"></div>
                                                <div class="woocommerce-variation-add-to-cart variations_button">
                                                   <!--  <div class="quantity">
                                                        <label>Quantity:</label>
                                                        <input type="number" name="quantity" value="1" title="Qty" class="input-text qty text"/>
                                                    </div> -->
                                                    <a href="{{url('book/'.$service->pro_slug)}}"  class="single_add_to_cart_button button">Book Now</a>
                                                    <input type="hidden" name="add-to-cart" value="2452" />
                                                    <input type="hidden" name="product_id" value="2452" />
                                                    <input type="hidden" name="variation_id" class="variation_id" value="0" />
                                                </div>
                                            </div>
                                        </form>

                                    </div><!-- .summary -->
                                </div><!-- /.single-product-wrapper -->


                                <div class="woocommerce-tabs wc-tabs-wrapper">
                                    <ul class="nav nav-tabs electro-nav-tabs tabs wc-tabs" role="tablist">
                                       

                                        <li class="nav-item description_tab">
                                            <a href="#tab-description" class="active" data-toggle="tab">Description</a>
                                        </li>

                                              
                                    </ul>

                                    <div class="tab-content">
                                       

                                        <div class="tab-pane active in panel entry-content wc-tab" id="tab-description">
                                            <div class="electro-description">

                                                {{$service->desc}}
                                            </div><!-- /.electro-description -->

                                            <!-- /.product_meta -->
                                        </div>

                                     <!-- /.panel -->
                                    </div>
                                    
                                </div><!-- /.woocommerce-tabs -->

                                <div class="related products">
                                    <h2>Related Products</h2>

                                    <ul class="products columns-5">

                       @foreach($services as $ser)
                       <?php
                          $images=array();
                          $images=explode('|',$ser->images);

                       ?>

                                        <li class="product">
                                            <div class="product-outer">
                                                <div class="product-inner">
                                                    <span class="loop-product-categories"><a href="{{url('category/subcategory/'.$ser->pro_slug)}}" rel="tag">{{$ser->category}}</a></span>
                                                    <a href="{{url('category/subcategory/'.$ser->pro_slug)}}">
                                                        <h3>{{$ser->product}}</h3>
                                                        <div class="product-thumbnail">
                                                            <img data-echo="{{asset('products/images/'.$images[0])}}" src="{{asset('products/images/'.$images[0])}}" alt="">
                                                        </div>
                                                    </a>

                                                    <div class="price-add-to-cart">
                                                        <span class="price">
                                                            <span class="electro-price">
                                                                <ins><span class="amount">Rs.{{$ser->price}}</span></ins>
                                                            </span>
                                                        </span>
                                                       
                                                    </div><!-- /.price-add-to-cart -->

                                                    
                                                </div><!-- /.product-inner -->
                                            </div><!-- /.product-outer -->
                                        </li>
                                        @endforeach

                                    </ul><!-- /.products -->
                                </div><!-- /.related -->
                            </div><!-- /.product -->

                        </main><!-- /.site-main -->
                    </div><!-- /.content-area -->
                </div><!-- /.container -->
            </div><!-- /.site-content -->
@endsection