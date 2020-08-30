@extends('user.layout.app1')
@section('content')
 <div id="content" class="site-content" tabindex="-1">
                <div class="container">

                    <nav class="woocommerce-breadcrumb">
                        <a href="{{url('/')}}">Home</a>
                        <span class="delimiter"><i class="fa fa-angle-right"></i>
                        </span>
                        <a href="product-category.html">Subscription</a>
                        <span class="delimiter"><i class="fa fa-angle-right"></i>
                        </span>
                        <a href="product-category.html">Plan</a>
                        <span class="delimiter"><i class="fa fa-angle-right"></i>
                        </span>{{$plan->name}}
                    </nav>

                    <div id="primary" class="content-area">
                        <main id="main" class="site-main">
                            <div class="product">
                               

                                <div class="electro-tabs electro-tabs-wrapper wc-tabs-wrapper">
                                    <div class="electro-tab" id="tab-accessories">
                                        <div class="container">
                                            <div class="tab-content">
                                                <ul class="ec-tabs">
                                                    <li class="accessories_tab active">
                                                        <a href="#tab-accessories">Features</a>
                                                    </li>
                                                    <li class="description_tab">
                                                        <a href="#tab-description">Description</a>
                                                    </li>
                                                 <!--    <li class="specification_tab">
                                                        <a href="#tab-specification">Specification</a>
                                                    </li>
                                                    <li class="reviews_tab">
                                                        <a href="#tab-reviews">Reviews</a>
                                                    </li> -->
                                                </ul><!-- /.ec-tabs -->

                                                <div class="accessories">

                                                    <div class="electro-wc-message"></div>
                                                    <div class="row">
                                                        <div class="col-xs-12 col-sm-9 col-left">
                                                            <ul class="products columns-3">
                                                          @foreach($features as $fea)
                                                          <?php
                                                          $images=array();
                                                         $product= App\Models\Product::join('categories','categories.id','products.category_id')->select('categories.category','products.*')->where('products.id','=',$fea->product_id)->first();
                                                         $images=explode('|',$product->images);

                                                          ?>
                                                                <li class="product ">
                                                                    <div class="product-outer">
                                                                        <div class="product-inner">
                                                                            <span class="loop-product-categories"><a href="product-category.html" rel="tag">{{$product->category}}</a></span>
                                                                            <a href="single-product.html">
                                                                                <h3>{{$product->product}}</h3>
                                                                                <div class="product-thumbnail">
                                                                                    <img data-echo="{{asset('products/images/'.$images[0])}}" src="{{asset('products/images/'.$images[0])}}" alt="">
                                                                                </div>
                                                                            </a>

                                                                          

                                                                            <div class="hover-area">
                                                                                <div class="action-buttons">
                                                                                    <a href="#" rel="nofollow" class="add_to_wishlist">Wishlist</a>
                                                                                    <a href="#" class="add-to-compare-link">Compare</a>
                                                                                </div>
                                                                            </div>

                                                                        </div><!-- /.product-inner -->
                                                                    </div><!-- /.product-outer -->
                                                                </li>
                                                                @endforeach
                                                             

                                                            </ul><!-- /.products -->

                                                          <!-- /.check-products -->

                                                        </div><!-- /.col -->

                                                        <div class="col-xs-12 col-sm-3 col-right">
                                                            <div class="total-price">
                                                                <span class="total-price-html">
                                                                    <span class="amount">Rs.{{$plan->price}}</span>
                                                                </span>for <span class="total-products">{{count($features)}}</span>items
                                                            </div><!-- /.total-price -->

                                                            <div class="accessories-add-all-to-cart">
                                                                <a href="{{url('subscription/plans/'.$plan->slug.'/book')}}" class="button btn btn-primary add-all-to-cart">Book Now</a>
                                                            </div><!-- /.accessories-add-all-to-cart -->
                                                        </div><!-- /.col -->
                                                    </div><!-- /.row -->

                                                </div><!-- /.accessories -->
                                            </div>
                                        </div>
                                    </div><!-- /.electro-tab -->

                                    <div class="electro-tab" id="tab-description">
                                        <div class="container">
                                            <div class="tab-content">
                                                <ul class="ec-tabs">
                                                    <li class="accessories_tab">
                                                        <a href="#tab-accessories">Accessories</a>
                                                    </li>
                                                    <li class="description_tab active">
                                                        <a href="#tab-description">Description</a>
                                                    </li>
                                                   <!--  <li class="specification_tab">
                                                        <a href="#tab-specification">Specification</a>
                                                    </li>
                                                    <li class="reviews_tab">
                                                        <a href="#tab-reviews">Reviews</a>
                                                    </li> -->
                                                </ul>

                                                <div class="electro-description">
                                                    {{$plan->description}}

                                                  

                                                   
                                                </div><!-- /.electro-description -->

                                            </div>
                                        </div>
                                    </div><!-- /.electro-tab -->


                                
                                </div><!-- /.electro-tabs -->

                                <div class="related products">
                                    <h2>Related Products</h2>

                                    <ul class="products columns-5">

                                        <li class="product">
                                            <div class="product-outer">
                                                <div class="product-inner">
                                                    <span class="loop-product-categories"><a href="product-category.html" rel="tag">Smartphones</a></span>
                                                    <a href="single-product.html">
                                                        <h3>Notebook Black Spire V Nitro  VN7-591G</h3>
                                                        <div class="product-thumbnail">
                                                            <img data-echo="assets/images/products/1.jpg" src="assets/images/blank.gif" alt="">
                                                        </div>
                                                    </a>

                                                    <div class="price-add-to-cart">
                                                        <span class="price">
                                                            <span class="electro-price">
                                                                <ins><span class="amount">&#036;1,999.00</span></ins>
                                                            </span>
                                                        </span>
                                                        <a rel="nofollow" href="single-product.html" class="button add_to_cart_button">Add to cart</a>
                                                    </div><!-- /.price-add-to-cart -->

                                                    <div class="hover-area">
                                                        <div class="action-buttons">
                                                            <a href="#" rel="nofollow" class="add_to_wishlist"> Wishlist</a>
                                                            <a href="#" class="add-to-compare-link">Compare</a>
                                                        </div>
                                                    </div>
                                                </div><!-- /.product-inner -->
                                            </div><!-- /.product-outer -->
                                        </li>

                                        <li class="product">
                                            <div class="product-outer">
                                                <div class="product-inner">
                                                    <span class="loop-product-categories"><a href="product-category.html" rel="tag">Smartphones</a></span>
                                                    <a href="single-product.html">
                                                        <h3>Notebook Black Spire V Nitro  VN7-591G</h3>
                                                        <div class="product-thumbnail">
                                                            <img data-echo="assets/images/products/2.jpg" src="assets/images/blank.gif" alt="">
                                                        </div>
                                                    </a>

                                                    <div class="price-add-to-cart">
                                                        <span class="price">
                                                            <span class="electro-price">
                                                                <ins><span class="amount">&#036;1,999.00</span></ins>
                                                            </span>
                                                        </span>
                                                        <a rel="nofollow" href="single-product.html" class="button add_to_cart_button">Add to cart</a>
                                                    </div><!-- /.price-add-to-cart -->

                                                    <div class="hover-area">
                                                        <div class="action-buttons">
                                                            <a href="#" rel="nofollow" class="add_to_wishlist"> Wishlist</a>
                                                            <a href="#" class="add-to-compare-link">Compare</a>
                                                        </div>
                                                    </div>
                                                </div><!-- /.product-inner -->
                                            </div><!-- /.product-outer -->
                                        </li>

                                        <li class="product">
                                            <div class="product-outer">
                                                <div class="product-inner">
                                                    <span class="loop-product-categories"><a href="product-category.html" rel="tag">Smartphones</a></span>
                                                    <a href="single-product.html">
                                                        <h3>Notebook Black Spire V Nitro  VN7-591G</h3>
                                                        <div class="product-thumbnail">
                                                            <img data-echo="assets/images/products/3.jpg" src="assets/images/blank.gif" alt="">
                                                        </div>
                                                    </a>

                                                    <div class="price-add-to-cart">
                                                        <span class="price">
                                                            <span class="electro-price">
                                                                <ins><span class="amount">&#036;1,999.00</span></ins>
                                                            </span>
                                                        </span>
                                                        <a rel="nofollow" href="single-product.html" class="button add_to_cart_button">Add to cart</a>
                                                    </div><!-- /.price-add-to-cart -->

                                                    <div class="hover-area">
                                                        <div class="action-buttons">
                                                            <a href="#" rel="nofollow" class="add_to_wishlist"> Wishlist</a>
                                                            <a href="#" class="add-to-compare-link">Compare</a>
                                                        </div>
                                                    </div>
                                                </div><!-- /.product-inner -->
                                            </div><!-- /.product-outer -->
                                        </li>

                                        <li class="product">
                                            <div class="product-outer">
                                                <div class="product-inner">
                                                    <span class="loop-product-categories"><a href="product-category.html" rel="tag">Smartphones</a></span>
                                                    <a href="single-product.html">
                                                        <h3>Notebook Black Spire V Nitro  VN7-591G</h3>
                                                        <div class="product-thumbnail">
                                                            <img data-echo="assets/images/products/4.jpg" src="assets/images/blank.gif" alt="">
                                                        </div>
                                                    </a>

                                                    <div class="price-add-to-cart">
                                                        <span class="price">
                                                            <span class="electro-price">
                                                                <ins><span class="amount">&#036;1,999.00</span></ins>
                                                            </span>
                                                        </span>
                                                        <a rel="nofollow" href="single-product.html" class="button add_to_cart_button">Add to cart</a>
                                                    </div><!-- /.price-add-to-cart -->

                                                    <div class="hover-area">
                                                        <div class="action-buttons">
                                                            <a href="#" rel="nofollow" class="add_to_wishlist"> Wishlist</a>
                                                            <a href="#" class="add-to-compare-link">Compare</a>
                                                        </div>
                                                    </div>
                                                </div><!-- /.product-inner -->
                                            </div><!-- /.product-outer -->
                                        </li>
                                    </ul><!-- /.products -->
                                </div><!-- /.related -->
                            </div><!-- /.product -->
                        </main><!-- /.site-main -->
                    </div><!-- /.content-area -->
                </div><!-- /.container -->
            </div><!-- /.site-content -->
@endsection