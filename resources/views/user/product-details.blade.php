@extends('user.layout.app1')
@section('content')
<body class="single-product full-width">
        <div id="page" class="hfeed site">
            <a class="skip-link screen-reader-text" href="#site-navigation">Skip to navigation</a>
            <a class="skip-link screen-reader-text" href="#content">Skip to content</a>

            <div class="top-bar hidden-md-down">
                <div class="container">
                    <nav>
                        <ul id="menu-top-bar-left" class="nav nav-inline pull-left animate-dropdown flip">
                            <li class="menu-item animate-dropdown"><a title="Welcome to Worldwide Electronics Store" href="#">Welcome </a></li>
                        </ul>
                    </nav>

                    <nav>
                        <ul id="menu-top-bar-right" class="nav nav-inline pull-right animate-dropdown flip">
                            
                            <li class="menu-item animate-dropdown"><a title="Track Your Order" href="{{url('contact')}}"><i class="ec ec-map-pointer"></i>Contact us</a></li>
                           
                            <li class="menu-item animate-dropdown"><a title="My Account" href="my-account.html"><i class="ec ec-user"></i>My Account</a></li>
                        </ul>
                    </nav>
                </div>
            </div>

        @include('user.layout.header1')      
        @include('user.layout.nav')


        <div id="content" class="site-content" tabindex="-1">
                <div class="container">

                    <nav class="woocommerce-breadcrumb">
                        <a href="home.html">Home</a>
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
                                        <li class="nav-item accessories_tab">
                                            <a href="#tab-accessories" data-toggle="tab">Accessories</a>
                                        </li>

                                        <li class="nav-item description_tab">
                                            <a href="#tab-description" class="active" data-toggle="tab">Description</a>
                                        </li>

                                        <li class="nav-item specification_tab">
                                            <a href="#tab-specification" data-toggle="tab">Specification</a>
                                        </li>

                                        <li class="nav-item reviews_tab">
                                            <a href="#tab-reviews" data-toggle="tab">Reviews</a>
                                        </li>
                                    </ul>

                                    <div class="tab-content">
                                        <div class="tab-pane panel entry-content wc-tab" id="tab-accessories">

                                            <div class="accessories">

                                                <div class="electro-wc-message"></div>
                                                <div class="row">
                                                    <div class="col-xs-12 col-sm-9 col-left">
                                                        <ul class="products columns-3">

                                                            <li class="product first">
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
                                                                                    <del><span class="amount">&#036;2,299.00</span></del>
                                                                                </span>
                                                                            </span>
                                                                            <a rel="nofollow" href="single-product.html" class="button add_to_cart_button">Add to cart</a>
                                                                        </div><!-- /.price-add-to-cart -->

                                                                      
                                                                    </div><!-- /.product-inner -->
                                                                </div><!-- /.product-outer -->
                                                            </li>
                                                            <li class="product ">
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
                                                                                    <del><span class="amount">&#036;2,299.00</span></del>
                                                                                </span>
                                                                            </span>
                                                                            <a rel="nofollow" href="single-product.html" class="button add_to_cart_button">Add to cart</a>
                                                                        </div><!-- /.price-add-to-cart -->

                                                                        <div class="hover-area">
                                                                            <div class="action-buttons">
                                                                                <a href="#" rel="nofollow" class="add_to_wishlist">Wishlist</a>
                                                                                <a href="#" class="add-to-compare-link">Compare</a>
                                                                            </div>
                                                                        </div>
                                                                    </div><!-- /.product-inner -->
                                                                </div><!-- /.product-outer -->
                                                            </li>
                                                            <li class="product last">
                                                                <div class="product-outer">
                                                                    <div class="product-inner">
                                                                        <span class="loop-product-categories"><a href="product-category.html" rel="tag">Smartphones</a></span>
                                                                        <a href="single-product.html">
                                                                            <h3>Notebook Black Spire V Nitro  VN7-591G</h3>
                                                                            <div class="product-thumbnail">
                                                                                <img data-echo="assets/images/products/5.jpg" src="assets/images/blank.gif" alt="">
                                                                            </div>
                                                                        </a>

                                                                        <div class="price-add-to-cart">
                                                                            <span class="price">
                                                                                <span class="electro-price">
                                                                                    <ins><span class="amount">&#036;1,999.00</span></ins>
                                                                                    <del><span class="amount">&#036;2,299.00</span></del>
                                                                                </span>
                                                                            </span>
                                                                            <a rel="nofollow" href="single-product.html" class="button add_to_cart_button">Add to cart</a>
                                                                        </div><!-- /.price-add-to-cart -->

                                                                        <div class="hover-area">
                                                                            <div class="action-buttons">
                                                                                <a href="#" rel="nofollow" class="add_to_wishlist">Wishlist</a>
                                                                                <a href="#" class="add-to-compare-link">Compare</a>
                                                                            </div>
                                                                        </div>
                                                                    </div><!-- /.product-inner -->
                                                                </div><!-- /.product-outer -->
                                                            </li>

                                                        </ul><!-- /.products -->

                                                        <div class="check-products">
                                                            <div class="checkbox accessory-checkbox">
                                                                <label>
                                                                    <input checked disabled type="checkbox" class="product-check">
                                                                    <span class="product-title">
                                                                        <strong>This product: </strong>Ultra Wireless S50 Headphones S50 with Bluetooth
                                                                    </span>
                                                                    -
                                                                    <span class="accessory-price">
                                                                        <span class="amount">&#36;1,215.00</span>
                                                                    </span>
                                                                </label>
                                                            </div>

                                                            <div class="checkbox accessory-checkbox">
                                                                <label>
                                                                    <input checked type="checkbox" class="product-check">
                                                                    <span class="product-title">Universal Headphones Case in Black</span>
                                                                    -
                                                                    <span class="accessory-price">
                                                                        <span class="amount">&#36;159.00</span>
                                                                    </span>
                                                                </label>
                                                            </div>

                                                            <div class="checkbox accessory-checkbox">
                                                                <label>
                                                                    <input checked type="checkbox" class="product-check">
                                                                    <span class="product-title">Headphones USB Wires</span>
                                                                    -
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
                                                                <span class="amount">&#036;1,424.00</span>
                                                            </span>
                                                            for <span class="total-products">3</span>
                                                            items
                                                        </div><!-- /.total-price -->

                                                        <div class="accessories-add-all-to-cart">
                                                            <button type="button" class="button btn btn-primary add-all-to-cart">Add all to cart</button>
                                                        </div><!-- /.accessories-add-all-to-cart -->
                                                    </div><!-- /.col -->
                                                </div><!-- /.row -->

                                            </div><!-- /.accessories -->
                                        </div>

                                        <div class="tab-pane active in panel entry-content wc-tab" id="tab-description">
                                            <div class="electro-description">

                                                <h3>Perfectly Done</h3>
                                                <p>Praesent ornare, ex a interdum consectetur, lectus diam sodales elit, vitae egestas est enim ornare nisl. Nullam in lectus nec sem semper viverra. In lobortis egestas massa. Nam nec massa nisi. Suspendisse potenti. Quisque suscipit vulputate dui quis volutpat. Ut id elit facilisis, feugiat est in, tempus lacus. Ut ultrices dictum metus, a ultricies ex vulputate ac. Ut id cursus tellus, non tempor quam. Morbi porta diam nisi, id finibus nunc tincidunt eu.</p>
                                                <table class="layout">
                                                    <tbody>
                                                        <tr>
                                                            <td>
                                                                <h3>Wireless</h3>
                                                                <p>Fusce vitae nibh mi. Integer posuere, libero et ullamcorper facilisis, enim eros tincidunt orci, eget vestibulum sapien nisi ut leo. Cras finibus vel est ut mollis. Donec luctus condimentum ante et euismod.</p>
                                                                <h3>Fresh Design</h3>
                                                                <p>Integer bibendum aliquet ipsum, in ultrices enim sodales sed. Quisque ut urna vitae lacus laoreet malesuada eu at massa. Pellentesque nibh augue, pellentesque nec dictum vel, pretium a arcu. Duis eu urna suscipit, lobortis elit quis, ullamcorper massa.</p>
                                                                <h3>Fabolous Sound</h3>
                                                                <p>Cras rutrum, nibh a sodales accumsan, elit sapien ultrices sapien, eget semper lectus ex congue elit. Nullam dui elit, fermentum a varius at, iaculis non dolor. In hac habitasse platea dictumst.
                                                            </td>

                                                            <td>
                                                                <img class="alignright" data-echo="assets/images/single-product/ForDescription.jpg" src="assets/images/blank.gif" alt="">

                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>

                                                <table class="layout">
                                                    <tbody>
                                                        <tr>
                                                            <td>
                                                                <img class="alignnone" data-echo="assets/images/single-product/ForDescription-1.png" src="assets/images/blank.gif" alt="">
                                                            </td>

                                                            <td>
                                                                <h3 style="text-align: right;">Inteligent Bass</h3>
                                                                <p style="text-align: right;">Fusce vitae nibh mi. Integer posuere, libero et ullamcorper facilisis, enim eros tincidunt orci, eget vestibulum sapien nisi ut leo. Cras finibus vel est ut mollis. Donec luctus condimentum ante et euismod.</p>
                                                                <h3 style="text-align: right;">Battery Life</h3>
                                                                <p style="text-align: right;">Integer bibendum aliquet ipsum, in ultrices enim sodales sed. Quisque ut urna vitae lacus laoreet malesuada eu at massa. Pellentesque nibh augue, pellentesque nec dictum vel, pretium a arcu. Duis eu urna suscipit, lobortis elit quis, ullamcorper massa.</p>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div><!-- /.electro-description -->

                                            <div class="product_meta">
                                                <span class="sku_wrapper">SKU: <span class="sku" itemprop="sku">FW511948218</span></span>


                                                <span class="posted_in">Category:
                                                    <a href="product-category.html" rel="tag">Headphones</a>
                                                </span>

                                                <span class="tagged_as">Tags:
                                                    <a href="product-category.html" rel="tag">Fast</a>,
                                                    <a href="product-category.html" rel="tag">Gaming</a>, <a href="product-category.html" rel="tag">Strong</a>
                                                </span>

                                            </div><!-- /.product_meta -->
                                        </div>

                                        <div class="tab-pane panel entry-content wc-tab" id="tab-specification">
                                            <h3>Technical Specifications</h3>
                                            <table class="table">
                                                <tbody>
                                                    <tr>
                                                        <td>Brand</td>
                                                        <td>Apple</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Item Height</td>
                                                        <td>18 Millimeters</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Item Width</td>
                                                        <td>31.4 Centimeters</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Screen Size</td>
                                                        <td>13 Inches</td>
                                                    </tr>
                                                    <tr class="size-weight">
                                                        <td>Item Weight</td>
                                                        <td>1.6 Kg</td>
                                                    </tr>
                                                    <tr class="size-weight">
                                                        <td>Product Dimensions</td>
                                                        <td>21.9 x 31.4 x 1.8 cm</td>
                                                    </tr>
                                                    <tr class="item-model-number">
                                                        <td>Item model number</td>
                                                        <td>MF841HN/A</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Processor Brand</td>
                                                        <td>Intel</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Processor Type</td>
                                                        <td>Core i5</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Processor Speed</td>
                                                        <td>2.9 GHz</td>
                                                    </tr>
                                                    <tr>
                                                        <td>RAM Size</td>
                                                        <td>8 GB</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Hard Drive Size</td>
                                                        <td>512 GB</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Hard Disk Technology</td>
                                                        <td>Solid State Drive</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Graphics Coprocessor</td>
                                                        <td>Intel Integrated Graphics</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Graphics Card Description</td>
                                                        <td>Integrated Graphics Card</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Hardware Platform</td>
                                                        <td>Mac</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Operating System</td>
                                                        <td>Mac OS</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Average Battery Life (in hours)</td>
                                                        <td>9</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div><!-- /.panel -->

                                        <div class="tab-pane panel entry-content wc-tab" id="tab-reviews">
                                            <div id="reviews" class="electro-advanced-reviews">
                                                <div class="advanced-review row">
                                                    <div class="col-xs-12 col-md-6">
                                                        <h2 class="based-title">Based on 3 reviews</h2>
                                                        <div class="avg-rating">
                                                            <span class="avg-rating-number">4.3</span> overall
                                                        </div>

                                                        <div class="rating-histogram">
                                                            <div class="rating-bar">
                                                                <div class="star-rating" title="Rated 5 out of 5">
                                                                    <span style="width:100%"></span>
                                                                </div>
                                                                <div class="rating-percentage-bar">
                                                                    <span style="width:33%" class="rating-percentage">

                                                                    </span>
                                                                </div>
                                                                <div class="rating-count">1</div>
                                                            </div><!-- .rating-bar -->

                                                            <div class="rating-bar">
                                                                <div class="star-rating" title="Rated 4 out of 5">
                                                                    <span style="width:80%"></span>
                                                                </div>
                                                                <div class="rating-percentage-bar">
                                                                    <span style="width:67%" class="rating-percentage"></span>
                                                                </div>
                                                                <div class="rating-count">2</div>
                                                            </div><!-- .rating-bar -->

                                                            <div class="rating-bar">
                                                                <div class="star-rating" title="Rated 3 out of 5">
                                                                    <span style="width:60%"></span>
                                                                </div>
                                                                <div class="rating-percentage-bar">
                                                                    <span style="width:0%" class="rating-percentage"></span>
                                                                </div>
                                                                <div class="rating-count zero">0</div>
                                                            </div><!-- .rating-bar -->

                                                            <div class="rating-bar">
                                                                <div class="star-rating" title="Rated 2 out of 5">
                                                                    <span style="width:40%"></span>
                                                                </div>
                                                                <div class="rating-percentage-bar">
                                                                    <span style="width:0%" class="rating-percentage"></span>
                                                                </div>
                                                                <div class="rating-count zero">0</div>
                                                            </div><!-- .rating-bar -->

                                                            <div class="rating-bar">
                                                                <div class="star-rating" title="Rated 1 out of 5">
                                                                    <span style="width:20%"></span>
                                                                </div>
                                                                <div class="rating-percentage-bar">
                                                                    <span style="width:0%" class="rating-percentage"></span>
                                                                </div>
                                                                <div class="rating-count zero">0</div>
                                                            </div><!-- .rating-bar -->
                                                        </div>
                                                    </div><!-- /.col -->

                                                    <div class="col-xs-12 col-md-6">
                                                        <div id="review_form_wrapper">
                                                            <div id="review_form">
                                                                <div id="respond" class="comment-respond">
                                                                    <h3 id="reply-title" class="comment-reply-title">Add a review
                                                                        <small><a rel="nofollow" id="cancel-comment-reply-link" href="#" style="display:none;">Cancel reply</a>
                                                                        </small>
                                                                    </h3>

                                                                    <form action="#" method="post" id="commentform" class="comment-form">
                                                                        <p class="comment-form-rating">
                                                                            <label>Your Rating</label>
                                                                        </p>

                                                                        <p class="stars">
                                                                            <span><a class="star-1" href="#">1</a>
                                                                                <a class="star-2" href="#">2</a>
                                                                                <a class="star-3" href="#">3</a>
                                                                                <a class="star-4" href="#">4</a>
                                                                                <a class="star-5" href="#">5</a>
                                                                            </span>
                                                                        </p>

                                                                        <p class="comment-form-comment">
                                                                            <label for="comment">Your Review</label>
                                                                            <textarea id="comment" name="comment" cols="45" rows="8" aria-required="true"></textarea>
                                                                        </p>

                                                                        <p class="form-submit">
                                                                            <input name="submit" type="submit" id="submit" class="submit" value="Add Review" />
                                                                            <input type='hidden' name='comment_post_ID' value='2452' id='comment_post_ID' />
                                                                            <input type='hidden' name='comment_parent' id='comment_parent' value='0' />
                                                                        </p>

                                                                        <input type="hidden" id="_wp_unfiltered_html_comment_disabled" name="_wp_unfiltered_html_comment_disabled" value="c7106f1f46" />
                                                                        <script>(function(){if(window===window.parent){document.getElementById('_wp_unfiltered_html_comment_disabled').name='_wp_unfiltered_html_comment';}})();</script>
                                                                    </form><!-- form -->
                                                                </div><!-- #respond -->
                                                            </div>
                                                        </div>

                                                    </div><!-- /.col -->
                                                </div><!-- /.row -->

                                                <div id="comments">

                                                    <ol class="commentlist">
                                                        <li itemprop="review" class="comment even thread-even depth-1">

                                                            <div id="comment-390" class="comment_container">

                                                                <img alt='' src="assets/images/blog/avatar.jpg" class="avatar" height='60' width='60' />
                                                                <div class="comment-text">

                                                                    <div class="star-rating" title="Rated 4 out of 5">
                                                                        <span style="width:80%"><strong itemprop="ratingValue">4</strong> out of 5</span>
                                                                    </div>


                                                                    <p class="meta">
                                                                        <strong>John Doe</strong> &ndash;
                                                                        <time itemprop="datePublished" datetime="2016-03-03T14:13:48+00:00">March 3, 2016</time>:
                                                                    </p>



                                                                    <div itemprop="description" class="description">
                                                                        <p>Fusce vitae nibh mi. Integer posuere, libero et ullamcorper facilisis, enim eros tincidunt orci, eget vestibulum sapien nisi ut leo. Cras finibus vel est ut mollis. Donec luctus condimentum ante et euismod.
                                                                        </p>
                                                                    </div>


                                                                    <p class="meta">
                                                                        <strong itemprop="author">John Doe</strong> &ndash; <time itemprop="datePublished" datetime="2016-03-03T14:13:48+00:00">March 3, 2016</time>
                                                                    </p>


                                                                </div>
                                                            </div>
                                                        </li><!-- #comment-## -->

                                                        <li class="comment odd alt thread-odd thread-alt depth-1">

                                                            <div class="comment_container">

                                                                <img alt='' src="assets/images/blog/avatar.jpg" class="avatar" height='60' width='60' />
                                                                <div class="comment-text">

                                                                    <div itemprop="reviewRating" itemscope itemtype="http://schema.org/Rating" class="star-rating" title="Rated 5 out of 5">
                                                                        <span style="width:100%"><strong itemprop="ratingValue">5</strong> out of 5</span>
                                                                    </div>

                                                                    <p class="meta">
                                                                        <strong>Anna Kowalsky</strong> &ndash;
                                                                        <time itemprop="datePublished" datetime="2016-03-03T14:14:47+00:00">March 3, 2016</time>:
                                                                    </p>


                                                                    <div itemprop="description" class="description">
                                                                        <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Suspendisse eget facilisis odio. Duis sodales augue eu tincidunt faucibus. Etiam justo ligula, placerat ac augue id, volutpat porta dui.
                                                                        </p>
                                                                    </div>

                                                                    <p class="meta">
                                                                        <strong itemprop="author">Anna Kowalsky</strong> &ndash; <time itemprop="datePublished" datetime="2016-03-03T14:14:47+00:00">March 3, 2016</time>
                                                                    </p>

                                                                </div>
                                                            </div>
                                                        </li><!-- #comment-## -->

                                                        <li class="comment odd alt thread-odd thread-alt depth-1">

                                                            <div class="comment_container">

                                                                <img alt='' src="assets/images/blog/avatar.jpg" class="avatar" height='60' width='60' />
                                                                <div class="comment-text">

                                                                    <div itemprop="reviewRating" class="star-rating" title="Rated 5 out of 5">
                                                                        <span style="width:100%"><strong itemprop="ratingValue">5</strong> out of 5</span>
                                                                    </div>

                                                                    <p class="meta">
                                                                        <strong>Anna Kowalsky</strong> &ndash;
                                                                        <time itemprop="datePublished" datetime="2016-03-03T14:14:47+00:00">March 3, 2016</time>:
                                                                    </p>


                                                                    <div itemprop="description" class="description">
                                                                        <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Suspendisse eget facilisis odio. Duis sodales augue eu tincidunt faucibus. Etiam justo ligula, placerat ac augue id, volutpat porta dui.
                                                                        </p>
                                                                    </div>

                                                                    <p class="meta">
                                                                        <strong itemprop="author">Anna Kowalsky</strong> &ndash; <time itemprop="datePublished" datetime="2016-03-03T14:14:47+00:00">March 3, 2016</time>
                                                                    </p>

                                                                </div>
                                                            </div>
                                                        </li><!-- #comment-## -->
                                                    </ol><!-- /.commentlist -->

                                                </div><!-- /#comments -->

                                                <div class="clear"></div>
                                            </div><!-- /.electro-advanced-reviews -->
                                        </div><!-- /.panel -->
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
                                                    <span class="loop-product-categories"><a href="product-category.html" rel="tag">{{$ser->category}}</a></span>
                                                    <a href="single-product.html">
                                                        <h3>{{$ser->product}}</h3>
                                                        <div class="product-thumbnail">
                                                            <img data-echo="{{asset('products/images/'.$images[0])}}" src="{{asset('products/images/'.$images[0])}}" alt="">
                                                        </div>
                                                    </a>

                                                    <div class="price-add-to-cart">
                                                        <span class="price">
                                                            <span class="electro-price">
                                                                <ins><span class="amount">&#036;{{$ser->price}}</span></ins>
                                                            </span>
                                                        </span>
                                                        <a rel="nofollow" href="single-product.html" class="button add_to_cart_button">Add to cart</a>
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
@endsection