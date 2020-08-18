
            <nav class="navbar navbar-primary navbar-full hidden-md-down">
                <div class="container">
                    <ul class="nav navbar-nav departments-menu animate-dropdown">
                        <li class="nav-item dropdown ">

                            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" id="departments-menu-toggle" >Shop by Department</a>
                            <ul id="menu-vertical-menu" class="dropdown-menu yamm departments-menu-dropdown">
                                <li class="highlight menu-item animate-dropdown active"><a title="Value of the Day" href="product-category.html">Value of the Day</a></li>
                                <li class="highlight menu-item animate-dropdown"><a title="Top 100 Offers" href="home-v3.html">Top 100 Offers</a></li>
                                <li class="highlight menu-item animate-dropdown"><a title="New Arrivals" href="home-v3-full-color-background.html">New Arrivals</a></li>
                                @foreach($categories as $category)

                                <li class="yamm-tfw menu-item menu-item-has-children animate-dropdown menu-item-2584 dropdown">
                                    <a title="Computers &amp; Accessories" href="product-category.html" data-toggle="dropdown" class="dropdown-toggle" aria-haspopup="true">{{$category->category}}</a>
                                    <ul role="menu" class=" dropdown-menu">
                                        <li class="menu-item animate-dropdown menu-item-object-static_block">
                                            <div class="yamm-content">
                                                <div class="vc_row row wpb_row vc_row-fluid bg-yamm-content bg-yamm-content-bottom bg-yamm-content-right">
                                                    <div class="wpb_column vc_column_container vc_col-sm-12 col-sm-12">
                                                        <div class="vc_column-inner ">
                                                            <div class="wpb_wrapper">
                                                                <div class="wpb_single_image wpb_content_element vc_align_left">
                                                                    <figure class="wpb_wrapper vc_figure">
                                                                    
                                                                    </figure>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="vc_row row wpb_row vc_row-fluid">
                                                    <div class="wpb_column vc_column_container vc_col-sm-6 col-sm-6">
                                                        <div class="vc_column-inner ">
                                                            <div class="wpb_wrapper">
                                                                <div class="wpb_text_column wpb_content_element ">
                                                                    <div class="wpb_wrapper">
                                                                        <ul>
                                                                            @foreach($category->subcategories as $subcat)
                                                                            <li class="nav-title">{{$subcat->subcategory}}</li>
                                                                            @endforeach
                                                                            
                                                        
                                                                        </ul>

                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </li>

                                @endforeach
                            </ul>
                        </li>
                    </ul>
                    <form class="navbar-search" method="post" action="{{route('user-search')}}">
                        @csrf
                        <label class="sr-only screen-reader-text" for="search">Search for:</label>
                        <div class="input-group">
                            <input type="text" id="search" class="form-control search-field" dir="ltr" value="" name="key" placeholder="Search for Services" />
                            <div class="input-group-addon search-categories">
                                <select name='product_cat' id='product_cat' class='postform resizeselect' >
                                    <option value='0' selected='selected'>All Categories</option>
                                    @foreach($categories as $category)
                                    <option class="level-0" value="{{$category->id}}">{{$category->category}}</option>
                                    @endforeach
                                
                                </select>
                            </div>
                            <div class="input-group-btn">
                                <input type="hidden" id="search-param" name="post_type" value="product" />
                                <button type="submit" class="btn btn-secondary"><i class="ec ec-search"></i></button>
                            </div>
                        </div>
                    </form>

                    <ul class="navbar-mini-cart navbar-nav animate-dropdown nav pull-right flip">
                        <li class="nav-item dropdown">
                            @if(\Auth::check())
                            <a href="cart.html" class="nav-link" data-toggle="dropdown">
                                <i class="ec ec-shopping-bag"></i>
                               
                                <span class="cart-items-total-price total-price"><span class="amount">Rs.{{auth()->user()->balance}}.00</span></span>
                            </a>
                            @endif
                            <ul class="dropdown-menu dropdown-menu-mini-cart">
                                <li>
                                    <div class="widget_shopping_cart_content">

                                        <ul class="cart_list product_list_widget ">


                                            <li class="mini_cart_item">
                                                <a title="Remove this item" class="remove" href="#">×</a>
                                                <a href="single-product.html">
                                                    <img class="attachment-shop_thumbnail size-shop_thumbnail wp-post-image" src="assets/images/products/mini-cart1.jpg" alt="">White lumia 9001&nbsp;
                                                </a>

                                                <span class="quantity">2 × <span class="amount">£150.00</span></span>
                                            </li>


                                            <li class="mini_cart_item">
                                                <a title="Remove this item" class="remove" href="#">×</a>
                                                <a href="single-product.html">
                                                    <img class="attachment-shop_thumbnail size-shop_thumbnail wp-post-image" src="assets/images/products/mini-cart2.jpg" alt="">PlayStation 4&nbsp;
                                                </a>

                                                <span class="quantity">1 × <span class="amount">£399.99</span></span>
                                            </li>

                                            <li class="mini_cart_item">
                                                <a data-product_sku="" data-product_id="34" title="Remove this item" class="remove" href="#">×</a>
                                                <a href="single-product.html">
                                                <img class="attachment-shop_thumbnail size-shop_thumbnail wp-post-image" src="assets/images/products/mini-cart3.jpg" alt="">POV Action Cam HDR-AS100V&nbsp;

                                                </a>

                                                <span class="quantity">1 × <span class="amount">£269.99</span></span>
                                            </li>


                                        </ul><!-- end product list -->


                                        <p class="total"><strong>Subtotal:</strong> <span class="amount">£969.98</span></p>


                                        <p class="buttons">
                                            <a class="button wc-forward" href="cart.html">View Cart</a>
                                            <a class="button checkout wc-forward" href="checkout.html">Checkout</a>
                                        </p>


                                    </div>
                                </li>
                            </ul>
                        </li>
                    </ul>

                 
                </div>
            </nav>