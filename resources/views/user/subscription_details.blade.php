@extends('user.layout.app1')
@section('content')
<body class="single-product full-width extended">
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

                    <nav class="woocommerce-breadcrumb">
                        <a href="home.html">Home</a>
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

                                                            <div class="check-products">
                                                                <div class="checkbox accessory-checkbox">
                                                                    <label>
                                                                        <input checked disabled type="checkbox" class="product-check">
                                                                        <span class="product-title">
                                                                            <strong>This product: </strong>Ultra Wireless S50 Headphones S50 with Bluetooth
                                                                        </span> -
                                                                        <span class="accessory-price">
                                                                            <span class="amount">&#36;1,215.00</span>
                                                                        </span>
                                                                    </label>
                                                                </div>

                                                                <div class="checkbox accessory-checkbox">
                                                                    <label>
                                                                        <input checked type="checkbox" class="product-check">
                                                                        <span class="product-title">Universal Headphones Case in Black</span> -
                                                                        <span class="accessory-price">
                                                                            <span class="amount">&#36;159.00</span>
                                                                        </span>
                                                                    </label>
                                                                </div>

                                                                <div class="checkbox accessory-checkbox">
                                                                    <label>
                                                                        <input checked type="checkbox" class="product-check">
                                                                        <span class="product-title">Headphones USB Wires</span> -
                                                                        <span class="accessory-price">
                                                                            <span class="amount">&#36;50.00</span>
                                                                        </span>
                                                                    </label>
                                                                </div>
                                                            </div><!-- /.check-products -->

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
        <div id="config" class="config">
            <div id="config_wrapper">



                                <div id="config_container">
<div class="style-main-title">Style Selector</div>
                    <div class="box-title">Choose Home &#038; Static Pages</div>
                    <div class="input-box">
                        <div class="input">
                            <select id="home-pages" name="home_page">
                                <option value="">Choose</option>
                                <option value="home.html">Home v1</option>
                                <option value="home-v2.html">Home v2</option>
                                <option value="home-v3.html">Home v3</option>
                                <option value="home-v3-full-color.html">Home v3 Full Color</option>
                                <option value="about.html">About</option>
                                <option value="cart.html">Cart</option>
                                <option value="contact-v1.html">contact-v1</option>
                                <option value="contact-v2.html">contact-v2</option>
                                <option value="faq.html">FAQ</option>
                                <option value="store-directory.html">Store Directory</option>
                                <option value="terms-and-conditions.html">Terms and Conditions</option>
                                <option value="404.html">404</option>
                            </select>
                        </div>
                    </div>

                    <div class="box-title">Choose Ecommerce Page</div>
                    <div class="input-box">
                        <div class="input">
                            <select id="demo-pages" name="demo-shop">
                                <option value="">Choose</option>
                                <option value="shop.html">Shop</option>
                                <option value="cart.html">Cart</option>
                                <option value="checkout.html">Checkout</option>
                                <option value="my-account.html">My Account</option>
                                <option value="compare.html">Compare</option>
                                <option value="wishlist.html">Wishlist</option>
                            </select>
                        </div>
                    </div>

                    <div class="box-title">Choose Blog Style</div>
                    <div class="input-box">
                        <div class="input">
                            <select id="header-style" name="header">
                                <option value="">Choose</option>
                                <option value="blog-v1.html">Blog v1</option>
                                <option value="blog-v2.html">Blog v2</option>
                                <option value="blog-v3.html">Blog v3</option>
                                <option value="blog-single.html">Blog Single Post</option>
                                <option value="blog-fw.html">Blog Full Width</option>
                            </select>
                        </div>
                    </div>

                    <div class="box-title">Choose Shop Pages</div>
                    <div class="input-box">
                        <div class="input">
                            <select id="shop-style" name="shop-style">
                                <option value="">Choose</option>
                                <option value="shop.html">Shop Grid</option>
                                <option value="shop.html#grid-extended">Shop Extended</option>
                                <option value="shop.html#list-view">Shop List View</option>
                                <option value="shop.html#list-view-small">Shop List View Small</option>
                                <option value="shop-fw.html">Shop Full Width</option>
                                <option value="shop-right-side-bar.html">Shop Right Sidebar</option>
                            </select>
                        </div>
                    </div>

                    <div class="box-title">Choose Single Product Pages</div>
                    <div class="input-box">
                        <div class="input">
                            <select id="single-products" name="single-product">
                                <option value="">Choose</option>
                                <option value="single-product.html">Single Product</option>
                                <option value="single-product-extended.html">Single Product Extended</option>
                                <option value="single-product-sidebar.html">Single Product Sidebar</option>
                            </select>
                        </div>
                    </div>

                    <div class="box-title">Choose Product Category </div>
                    <div class="input-box">
                        <div class="input">
                            <select id="product-category-col" name="product-category">
                                <option value="">Choose</option>
                                <option value="cat-3-col.html">3 Column Sidebar</option>
                                <option value="cat-4-col.html">4 Column Sidebar</option>
                                <option value="cat-4-fw.html">4 Column Full width</option>
                                <option value="product-category-6-column.html">6 Columns Full width</option>
                                <option value="shop-fw.html">Shop Full Width</option>
                            </select>
                        </div>
                    </div>

                    <div class="box-title">Colors</div>
                    <div id="colors" class="colors">
                        <a class="changecolor green" href="#" title="Green color">Green</a>
                        <a class="changecolor pink" href="#" title="Pink color">Pink</a>
                        <a class="changecolor black" href="#" title="Black color">Black</a>
                        <a class="changecolor gold" href="#" title="Gold color">Gold</a>
                        <a class="changecolor yellow" href="#" title="Yellow color">Yellow</a>
                        <a class="changecolor blue" href="#" title="Blue color">Blue</a>
                        <a class="changecolor red" href="#" title="Red color">Red</a>
                        <a class="changecolor orange" href="#" title="Orange color">Orange</a>
                        <a class="changecolor flat-blue" href="#" title="Flat Blue color">Flat Blue</a>
                    </div>
                    <div class="box-title-text"><strong>Tons</strong> of customization you can do through Sass...</div>
                </div>
            </div>

            <div class="style-toggle open"><i class="fa fa-wrench"></i></div>
        </div>
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