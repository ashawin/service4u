@extends('user.layout.app1')
@section('content')
 <body class="left-sidebar">
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

          
            <header id="masthead" class="site-header header-v2">
                <div class="container hidden-md-down">
                    <div class="row">

                        <!-- ============================================================= Header Logo ============================================================= -->
                        <div class="header-logo">
                            <a href="{{url('/')}}" class="header-logo-link">
                                <svg version="1.1" x="0px" y="0px" width="175.748px"
                                    height="42.52px" viewBox="0 0 175.748 42.52" enable-background="new 0 0 175.748 42.52">
                                    <ellipse class="ellipse-bg" fill-rule="evenodd" clip-rule="evenodd" fill="#FDD700" cx="170.05" cy="36.341" rx="5.32" ry="5.367"/>
                                    <path fill-rule="evenodd" clip-rule="evenodd" fill="#333E48" d="M30.514,0.71c-0.034,0.003-0.066,0.008-0.056,0.056
                                    C30.263,0.995,29.876,1.181,29.79,1.5c-0.148,0.548,0,1.568,0,2.427v36.459c0.265,0.221,0.506,0.465,0.725,0.734h6.187
                                    c0.2-0.25,0.423-0.477,0.669-0.678V1.387C37.124,1.185,36.9,0.959,36.701,0.71H30.514z M117.517,12.731
                                    c-0.232-0.189-0.439-0.64-0.781-0.734c-0.754-0.209-2.039,0-3.121,0h-3.176V4.435c-0.232-0.189-0.439-0.639-0.781-0.733
                                    c-0.719-0.2-1.969,0-3.01,0h-3.01c-0.238,0.273-0.625,0.431-0.725,0.847c-0.203,0.852,0,2.399,0,3.725
                                    c0,1.393,0.045,2.748-0.055,3.725h-6.41c-0.184,0.237-0.629,0.434-0.725,0.791c-0.178,0.654,0,1.813,0,2.765v2.766
                                    c0.232,0.188,0.439,0.64,0.779,0.733c0.777,0.216,2.109,0,3.234,0c1.154,0,2.291-0.045,3.176,0.057v21.277
                                    c0.232,0.189,0.439,0.639,0.781,0.734c0.719,0.199,1.969,0,3.01,0h3.01c1.008-0.451,0.725-1.889,0.725-3.443
                                    c-0.002-6.164-0.047-12.867,0.055-18.625h6.299c0.182-0.236,0.627-0.434,0.725-0.79c0.176-0.653,0-1.813,0-2.765V12.731z
                                    M135.851,18.262c0.201-0.746,0-2.029,0-3.104v-3.104c-0.287-0.245-0.434-0.637-0.781-0.733c-0.824-0.229-1.992-0.044-2.898,0
                                    c-2.158,0.104-4.506,0.675-5.74,1.411c-0.146-0.362-0.451-0.853-0.893-0.96c-0.693-0.169-1.859,0-2.842,0h-2.842
                                    c-0.258,0.319-0.625,0.42-0.725,0.79c-0.223,0.82,0,2.338,0,3.443c0,8.109-0.002,16.635,0,24.381
                                    c0.232,0.189,0.439,0.639,0.779,0.734c0.707,0.195,1.93,0,2.955,0h3.01c0.918-0.463,0.725-1.352,0.725-2.822V36.21
                                    c-0.002-3.902-0.242-9.117,0-12.473c0.297-4.142,3.836-4.877,8.527-4.686C135.312,18.816,135.757,18.606,135.851,18.262z
                                    M14.796,11.376c-5.472,0.262-9.443,3.178-11.76,7.056c-2.435,4.075-2.789,10.62-0.501,15.126c2.043,4.023,5.91,7.115,10.701,7.9
                                    c6.051,0.992,10.992-1.219,14.324-3.838c-0.687-1.1-1.419-2.664-2.118-3.951c-0.398-0.734-0.652-1.486-1.616-1.467
                                    c-1.942,0.787-4.272,2.262-7.134,2.145c-3.791-0.154-6.659-1.842-7.524-4.91h19.452c0.146-2.793,0.22-5.338-0.279-7.563
                                    C26.961,15.728,22.503,11.008,14.796,11.376z M9,23.284c0.921-2.508,3.033-4.514,6.298-4.627c3.083-0.107,4.994,1.976,5.685,4.627
                                    C17.119,23.38,12.865,23.38,9,23.284z M52.418,11.376c-5.551,0.266-9.395,3.142-11.76,7.056
                                    c-2.476,4.097-2.829,10.493-0.557,15.069c1.997,4.021,5.895,7.156,10.646,7.957c6.068,1.023,11-1.227,14.379-3.781
                                    c-0.479-0.896-0.875-1.742-1.393-2.709c-0.312-0.582-1.024-2.234-1.561-2.539c-0.912-0.52-1.428,0.135-2.23,0.508
                                    c-0.564,0.262-1.223,0.523-1.672,0.676c-4.768,1.621-10.372,0.268-11.537-4.176h19.451c0.668-5.443-0.419-9.953-2.73-13.037
                                    C61.197,13.388,57.774,11.12,52.418,11.376z M46.622,23.343c0.708-2.553,3.161-4.578,6.242-4.686
                                    c3.08-0.107,5.08,1.953,5.686,4.686H46.622z M160.371,15.497c-2.455-2.453-6.143-4.291-10.869-4.064
                                    c-2.268,0.109-4.297,0.65-6.02,1.524c-1.719,0.873-3.092,1.957-4.234,3.217c-2.287,2.519-4.164,6.004-3.902,11.007
                                    c0.248,4.736,1.979,7.813,4.627,10.326c2.568,2.439,6.148,4.254,10.867,4.064c4.457-0.18,7.889-2.115,10.199-4.684
                                    c2.469-2.746,4.012-5.971,3.959-11.063C164.949,21.134,162.732,17.854,160.371,15.497z M149.558,33.952
                                    c-3.246-0.221-5.701-2.615-6.41-5.418c-0.174-0.689-0.26-1.25-0.4-2.166c-0.035-0.234,0.072-0.523-0.045-0.77
                                    c0.682-3.698,2.912-6.257,6.799-6.547c2.543-0.189,4.258,0.735,5.52,1.863c1.322,1.182,2.303,2.715,2.451,4.967
                                    C157.789,30.669,154.185,34.267,149.558,33.952z M88.812,29.55c-1.232,2.363-2.9,4.307-6.13,4.402
                                    c-4.729,0.141-8.038-3.16-8.025-7.563c0.004-1.412,0.324-2.65,0.947-3.726c1.197-2.061,3.507-3.688,6.633-3.612
                                    c3.222,0.079,4.966,1.708,6.632,3.668c1.328-1.059,2.529-1.948,3.9-2.99c0.416-0.315,1.076-0.688,1.227-1.072
                                    c0.404-1.031-0.365-1.502-0.891-2.088c-2.543-2.835-6.66-5.377-11.704-5.137c-6.02,0.288-10.218,3.697-12.484,7.846
                                    c-1.293,2.365-1.951,5.158-1.729,8.408c0.209,3.053,1.191,5.496,2.619,7.508c2.842,4.004,7.385,6.973,13.656,6.377
                                    c5.976-0.568,9.574-3.936,11.816-8.354c-0.141-0.271-0.221-0.604-0.336-0.902C92.929,31.364,90.843,30.485,88.812,29.55z"/>
                                </svg>
                            </a>
                        </div>
                        <!-- ============================================================= Header Logo : End============================================================= -->

                        <div class="primary-nav animate-dropdown">
                            <div class="clearfix">
                                 <button class="navbar-toggler hidden-sm-up pull-right flip" type="button" data-toggle="collapse" data-target="#default-header">
                                        &#9776;
                                 </button>
                            </div>

                            <div class="collapse navbar-toggleable-xs" id="default-header">
                                <nav>
                                    <ul id="menu-main-menu" class="nav nav-inline yamm">
                                        <li class="menu-item menu-item-has-children animate-dropdown dropdown"><a title="Home" href="shop.html" data-toggle="dropdown" class="dropdown-toggle" aria-haspopup="true">Home</a>
                                            <ul role="menu" class=" dropdown-menu">
                                                <li class="menu-item animate-dropdown  "><a title="Home v1" href="home.html">Home v1</a></li>
                                                <li class="menu-item current-menu-item current_page_item animate-dropdown active"><a title="Home v2" href="home-v2.html">Home v2</a></li>
                                                <li class="menu-item animate-dropdown  "><a title="Home v3" href="home-v3.html">Home v3</a></li>
                                            </ul>
                                        </li>
                                        <li class="menu-item animate-dropdown"><a title="About Us" href="about.html">About Us</a></li>

                                        <li class="menu-item menu-item-has-children animate-dropdown dropdown"><a title="Blog" href="blog.html" data-toggle="dropdown" class="dropdown-toggle" aria-haspopup="true">Blog</a>
                                            <ul role="menu" class=" dropdown-menu">
                                                <li class="menu-item animate-dropdown"><a title="Blog v1" href="blog-v1.html">Blog v1</a></li>
                                                <li class="menu-item animate-dropdown"><a title="Blog v2" href="blog-v2.html">Blog v2</a></li>
                                                <li class="menu-item animate-dropdown"><a title="Blog v3" href="blog-v3.html">Blog v3</a></li>
                                            </ul>
                                        </li>
                                        <li class="yamm-fw menu-item menu-item-has-children animate-dropdown dropdown">
                                            <a title="Pages" href="#" data-toggle="dropdown" class="dropdown-toggle" aria-haspopup="true">Pages</a>
                                            <ul role="menu" class=" dropdown-menu">
                                                <li class="menu-item animate-dropdown">
                                                    <div class="yamm-content" style="display:inline-block; width: 100%;">
                                                        <div class="row">
                                                            <div class="wpb_column vc_column_container col-sm-4">
                                                                <div class="vc_column-inner ">
                                                                    <div class="wpb_wrapper">
                                                                        <div class="vc_wp_custommenu wpb_content_element">
                                                                            <div class="widget widget_nav_menu">
                                                                                <div class="menu-pages-menu-1-container">
                                                                                    <ul id="menu-pages-menu-1" class="menu">
                                                                                        <li class="nav-title menu-item"><a href="#">Home &#038; Static Pages</a></li>
                                                                                        <li class="menu-item"><a href="home.html">Home v1</a></li>
                                                                                        <li class="menu-item current-menu-item current_page_item"><a href="home-v2.html">Home v2</a></li>
                                                                                        <li class="menu-item"><a href="home-v3.html">Home v3</a></li>
                                                                                        <li class="menu-item"><a href="about.html">About</a></li>
                                                                                        <li class="menu-item"><a href="contact-v2.html">Contact v2</a></li>
                                                                                        <li class="menu-item"><a href="contact-v1.html">Contact v1</a></li>
                                                                                        <li class="menu-item"><a href="faq.html">FAQ</a></li>
                                                                                        <li class="menu-item"><a href="store-directory.html">Store Directory</a></li>
                                                                                        <li class="menu-item"><a href="terms-and-conditions.html">Terms and Conditions</a></li>
                                                                                        <li class="menu-item"><a href="404.html">404</a></li>
                                                                                        <li class="nav-title menu-item"><a href="#">Product Categories</a></li>
                                                                                        <li class="menu-item"><a href="cat-3-col.html">3 Column Sidebar</a></li>
                                                                                        <li class="menu-item"><a href="cat-4-col.html">4 Column Sidebar</a></li>
                                                                                        <li class="menu-item"><a href="cat-4-fw.html">4 Column Full width</a></li>
                                                                                        <li class="menu-item"><a href="product-category-6-column.html">6 Columns Full width</a></li>
                                                                                    </ul>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="wpb_column vc_column_container col-sm-4">
                                                                <div class="vc_column-inner ">
                                                                    <div class="wpb_wrapper">
                                                                        <div class="vc_wp_custommenu wpb_content_element">
                                                                            <div class="widget widget_nav_menu">
                                                                                <div class="menu-pages-menu-2-container">
                                                                                    <ul id="menu-pages-menu-2" class="menu">
                                                                                        <li class="nav-title menu-item"><a href="#">Shop Pages</a></li>
                                                                                        <li class="menu-item"><a href="shop.html#grid">Shop Grid</a></li>
                                                                                        <li class="menu-item"><a href="shop.html#grid-extended">Shop Grid Extended</a></li>
                                                                                        <li class="menu-item"><a href="shop.html#list-view">Shop List View</a></li>
                                                                                        <li class="menu-item"><a href="shop.html#list-view-small">Shop List View Small</a></li>
                                                                                        <li class="menu-item"><a href="shop.html">Shop Left Sidebar</a></li>
                                                                                        <li class="menu-item"><a href="shop-fw.html">Shop Full width</a></li>
                                                                                        <li class="menu-item"><a href="shop-right-side-bar.html">Shop Right Sidebar</a></li>
                                                                                        <li class="nav-title menu-item"><a href="#">Blog Pages</a></li>
                                                                                        <li class="menu-item"><a href="blog-v1.html">Blog v1</a></li>
                                                                                        <li class="menu-item"><a href="blog-v3.html">Blog v3</a></li>
                                                                                        <li class="menu-item"><a href="blog-v2.html">Blog v2</a></li>
                                                                                        <li class="menu-item"><a href="blog-fw.html">Blog Full Width</a></li>
                                                                                        <li class="menu-item"><a href="blog-single.html">Single Blog Post</a></li>

                                                                                    </ul>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="wpb_column vc_column_container col-sm-4">
                                                                <div class="vc_column-inner ">
                                                                    <div class="wpb_wrapper">
                                                                        <div class="vc_wp_custommenu wpb_content_element">
                                                                            <div class="widget widget_nav_menu">
                                                                                <div class="menu-pages-menu-3-container">
                                                                                    <ul id="menu-pages-menu-3" class="menu">
                                                                                        <li class="nav-title menu-item"><a href="single-product.html">Single Product Pages</a></li>
                                                                                        <li class="menu-item"><a href="single-product-extended.html">Single Product Extended</a></li>
                                                                                        <li class="menu-item"><a href="single-product.html">Single Product Fullwidth</a></li>
                                                                                        <li class="menu-item"><a href="single-product-sidebar.html">Single Product Sidebar</a></li>
                                                                                        <li class="menu-item"><a href="single-product-sidebar-accessories.html">Single Product Sidebar Accessories </a></li>
                                                                                        <li class="menu-item"><a href="single-product-sidebar-specification.html">Single Product Sidebar Specification </a></li>
                                                                                        <li class="menu-item"><a href="single-product-sidebar-reviews.html">Single Product Sidebar Reviews </a></li>
                                                                                        <li class="nav-title menu-item"><a href="#">Ecommerce Pages</a></li>
                                                                                        <li class="menu-item"><a href="shop.html">Shop</a></li>
                                                                                        <li class="menu-item"><a href="cart.html">Cart</a></li>
                                                                                        <li class="menu-item"><a href="checkout.html">Checkout</a></li>
                                                                                        <li class="menu-item"><a href="my-account.html">My Account</a></li>
                                                                                        <li class="menu-item"><a href="compare.html">Compare</a></li>
                                                                                        <li class="menu-item"><a href="wishlist.html">Wishlist</a></li>
                                                                                    </ul>
                                                                                </div>
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
                                        <li class="menu-item"><a title="Features" href="#">Features</a></li>
                                        <li class="menu-item"><a title="Contact Us" href="#">Contact Us</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>

                        <div class="header-support-info">
                            <div class="media">
                                <span class="media-left support-icon media-middle"><i class="ec ec-support"></i></span>
                                <div class="media-body">
                                    <span class="support-number"><strong>Support</strong> (+800) 856 800 604</span><br/>
                                    <span class="support-email">Email: info@electro.com</span>
                                </div>
                            </div>
                        </div>

                    </div><!-- /.row -->
                </div>

                <div class="container hidden-lg-up">
                    <div class="handheld-header">

                        <!-- ============================================================= Header Logo ============================================================= -->
                        <div class="header-logo">
                            <a href="home.html" class="header-logo-link">
                                <svg version="1.1" x="0px" y="0px" width="175.748px"
                                    height="42.52px" viewBox="0 0 175.748 42.52" enable-background="new 0 0 175.748 42.52">
                                    <ellipse class="ellipse-bg" fill-rule="evenodd" clip-rule="evenodd" fill="#FDD700" cx="170.05" cy="36.341" rx="5.32" ry="5.367"/>
                                    <path fill-rule="evenodd" clip-rule="evenodd" fill="#333E48" d="M30.514,0.71c-0.034,0.003-0.066,0.008-0.056,0.056
                                    C30.263,0.995,29.876,1.181,29.79,1.5c-0.148,0.548,0,1.568,0,2.427v36.459c0.265,0.221,0.506,0.465,0.725,0.734h6.187
                                    c0.2-0.25,0.423-0.477,0.669-0.678V1.387C37.124,1.185,36.9,0.959,36.701,0.71H30.514z M117.517,12.731
                                    c-0.232-0.189-0.439-0.64-0.781-0.734c-0.754-0.209-2.039,0-3.121,0h-3.176V4.435c-0.232-0.189-0.439-0.639-0.781-0.733
                                    c-0.719-0.2-1.969,0-3.01,0h-3.01c-0.238,0.273-0.625,0.431-0.725,0.847c-0.203,0.852,0,2.399,0,3.725
                                    c0,1.393,0.045,2.748-0.055,3.725h-6.41c-0.184,0.237-0.629,0.434-0.725,0.791c-0.178,0.654,0,1.813,0,2.765v2.766
                                    c0.232,0.188,0.439,0.64,0.779,0.733c0.777,0.216,2.109,0,3.234,0c1.154,0,2.291-0.045,3.176,0.057v21.277
                                    c0.232,0.189,0.439,0.639,0.781,0.734c0.719,0.199,1.969,0,3.01,0h3.01c1.008-0.451,0.725-1.889,0.725-3.443
                                    c-0.002-6.164-0.047-12.867,0.055-18.625h6.299c0.182-0.236,0.627-0.434,0.725-0.79c0.176-0.653,0-1.813,0-2.765V12.731z
                                    M135.851,18.262c0.201-0.746,0-2.029,0-3.104v-3.104c-0.287-0.245-0.434-0.637-0.781-0.733c-0.824-0.229-1.992-0.044-2.898,0
                                    c-2.158,0.104-4.506,0.675-5.74,1.411c-0.146-0.362-0.451-0.853-0.893-0.96c-0.693-0.169-1.859,0-2.842,0h-2.842
                                    c-0.258,0.319-0.625,0.42-0.725,0.79c-0.223,0.82,0,2.338,0,3.443c0,8.109-0.002,16.635,0,24.381
                                    c0.232,0.189,0.439,0.639,0.779,0.734c0.707,0.195,1.93,0,2.955,0h3.01c0.918-0.463,0.725-1.352,0.725-2.822V36.21
                                    c-0.002-3.902-0.242-9.117,0-12.473c0.297-4.142,3.836-4.877,8.527-4.686C135.312,18.816,135.757,18.606,135.851,18.262z
                                    M14.796,11.376c-5.472,0.262-9.443,3.178-11.76,7.056c-2.435,4.075-2.789,10.62-0.501,15.126c2.043,4.023,5.91,7.115,10.701,7.9
                                    c6.051,0.992,10.992-1.219,14.324-3.838c-0.687-1.1-1.419-2.664-2.118-3.951c-0.398-0.734-0.652-1.486-1.616-1.467
                                    c-1.942,0.787-4.272,2.262-7.134,2.145c-3.791-0.154-6.659-1.842-7.524-4.91h19.452c0.146-2.793,0.22-5.338-0.279-7.563
                                    C26.961,15.728,22.503,11.008,14.796,11.376z M9,23.284c0.921-2.508,3.033-4.514,6.298-4.627c3.083-0.107,4.994,1.976,5.685,4.627
                                    C17.119,23.38,12.865,23.38,9,23.284z M52.418,11.376c-5.551,0.266-9.395,3.142-11.76,7.056
                                    c-2.476,4.097-2.829,10.493-0.557,15.069c1.997,4.021,5.895,7.156,10.646,7.957c6.068,1.023,11-1.227,14.379-3.781
                                    c-0.479-0.896-0.875-1.742-1.393-2.709c-0.312-0.582-1.024-2.234-1.561-2.539c-0.912-0.52-1.428,0.135-2.23,0.508
                                    c-0.564,0.262-1.223,0.523-1.672,0.676c-4.768,1.621-10.372,0.268-11.537-4.176h19.451c0.668-5.443-0.419-9.953-2.73-13.037
                                    C61.197,13.388,57.774,11.12,52.418,11.376z M46.622,23.343c0.708-2.553,3.161-4.578,6.242-4.686
                                    c3.08-0.107,5.08,1.953,5.686,4.686H46.622z M160.371,15.497c-2.455-2.453-6.143-4.291-10.869-4.064
                                    c-2.268,0.109-4.297,0.65-6.02,1.524c-1.719,0.873-3.092,1.957-4.234,3.217c-2.287,2.519-4.164,6.004-3.902,11.007
                                    c0.248,4.736,1.979,7.813,4.627,10.326c2.568,2.439,6.148,4.254,10.867,4.064c4.457-0.18,7.889-2.115,10.199-4.684
                                    c2.469-2.746,4.012-5.971,3.959-11.063C164.949,21.134,162.732,17.854,160.371,15.497z M149.558,33.952
                                    c-3.246-0.221-5.701-2.615-6.41-5.418c-0.174-0.689-0.26-1.25-0.4-2.166c-0.035-0.234,0.072-0.523-0.045-0.77
                                    c0.682-3.698,2.912-6.257,6.799-6.547c2.543-0.189,4.258,0.735,5.52,1.863c1.322,1.182,2.303,2.715,2.451,4.967
                                    C157.789,30.669,154.185,34.267,149.558,33.952z M88.812,29.55c-1.232,2.363-2.9,4.307-6.13,4.402
                                    c-4.729,0.141-8.038-3.16-8.025-7.563c0.004-1.412,0.324-2.65,0.947-3.726c1.197-2.061,3.507-3.688,6.633-3.612
                                    c3.222,0.079,4.966,1.708,6.632,3.668c1.328-1.059,2.529-1.948,3.9-2.99c0.416-0.315,1.076-0.688,1.227-1.072
                                    c0.404-1.031-0.365-1.502-0.891-2.088c-2.543-2.835-6.66-5.377-11.704-5.137c-6.02,0.288-10.218,3.697-12.484,7.846
                                    c-1.293,2.365-1.951,5.158-1.729,8.408c0.209,3.053,1.191,5.496,2.619,7.508c2.842,4.004,7.385,6.973,13.656,6.377
                                    c5.976-0.568,9.574-3.936,11.816-8.354c-0.141-0.271-0.221-0.604-0.336-0.902C92.929,31.364,90.843,30.485,88.812,29.55z"/>
                                </svg>
                            </a>
                        </div>
                        <!-- ============================================================= Header Logo : End============================================================= -->

                        <div class="handheld-navigation-wrapper">   
                            <div class="handheld-navbar-toggle-buttons clearfix"> 
                                <button class="navbar-toggler navbar-toggle-hamburger hidden-lg-up pull-right flip" type="button"> 
                                    <i class="fa fa-bars" aria-hidden="true"></i> 
                                </button> 
                                <button class="navbar-toggler navbar-toggle-close hidden-lg-up pull-right flip" type="button"> 
                                    <i class="ec ec-close-remove"></i> 
                                </button>
                            </div>  
                            <div class="handheld-navigation hidden-lg-up" id="default-hh-header"> 
                                <span class="ehm-close">Close</span>
                                <ul id="menu-all-departments-menu-1" class="nav nav-inline yamm">
                                    <li class="highlight menu-item animate-dropdown ">
                                        <a title="Value of the Day" href="home-v2.html">Value of the Day</a>
                                    </li>
                                    <li class="highlight menu-item animate-dropdown ">
                                        <a title="Top 100 Offers" href="home-v3.html">Top 100 Offers</a>
                                    </li>
                                    <li class="highlight menu-item animate-dropdown ">
                                        <a title="New Arrivals" href="home-v3-full-color.html">New Arrivals</a>
                                    </li>
                                    <li class="yamm-tfw menu-item menu-item-has-children animate-dropdown dropdown">
                                        <a title="Computers &amp; Accessories" href="product-category.html" data-toggle="dropdown" class="dropdown-toggle" aria-haspopup="true">Computers &amp; Accessories</a>
                                        <ul role="menu" class=" dropdown-menu">
                                            <li class="menu-item animate-dropdown ">
                                                <div class="yamm-content">
                                                    <div class="col-sm-6">
                                                        <ul>
                                                            <li class="nav-title">Computers &amp; Accessories</li>
                                                            <li><a href="#">All Computers &amp; Accessories</a></li>
                                                            <li><a href="#">Laptops, Desktops &amp; Monitors</a></li>
                                                            <li><a href="#">Pen Drives, Hard Drives &amp; Memory Cards</a></li>
                                                            <li><a href="#">Printers &amp; Ink</a></li>
                                                            <li><a href="#">Networking &amp; Internet Devices</a></li>
                                                            <li><a href="#">Computer Accessories</a></li>
                                                            <li><a href="#">Software</a></li>
                                                            <li class="nav-divider"></li>
                                                            <li>
                                                                <a href="#">
                                                                    <span class="nav-text">All Electronics</span>
                                                                    <span class="nav-subtext">Discover more products</span>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <ul>
                                                            <li class="nav-title">Office &amp; Stationery</li>
                                                            <li><a href="#">All Office &amp; Stationery</a></li>
                                                            <li><a href="#">Pens &amp; Writing</a></li>
                                                        </ul>
                                                    </div>                              
                                                </div>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="yamm-tfw menu-item menu-item-has-children animate-dropdown dropdown">
                                        <a title="Cameras, Audio &amp; Video" href="product-category.html" data-toggle="dropdown" class="dropdown-toggle" aria-haspopup="true">Cameras, Audio &amp; Video</a>
                                        <ul role="menu" class=" dropdown-menu">
                                            <li class="menu-item animate-dropdown">
                                                <div class="yamm-content">
                                                    <div class="col-sm-6">
                                                        <ul>
                                                            <li class="nav-title">Cameras &amp; Photography</li>
                                                            <li><a href="#">All Cameras &amp; Photography</a></li>
                                                            <li><a href="#">Digital SLRs</a></li>
                                                            <li><a href="#">Point &amp; Shoot Cameras</a></li>
                                                            <li><a href="#">Lenses</a></li>
                                                            <li><a href="#">Camera Accessories</a></li>
                                                            <li><a href="#">Security &amp; Surveillance</a></li>
                                                            <li><a href="#">Binoculars &amp; Telescopes</a></li>
                                                            <li><a href="#">Camcorders</a></li>
                                                            <li class="nav-divider"></li>
                                                            <li>
                                                                <a href="#">
                                                                    <span class="nav-text">All Electronics</span>
                                                                    <span class="nav-subtext">Discover more products</span>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <ul>
                                                            <li class="nav-title">Audio &amp; Video</li>
                                                            <li><a href="#">All Audio &amp; Video</a></li>
                                                            <li><a href="#">Headphones &amp; Speakers</a></li>
                                                            <li><a href="#">Home Entertainment Systems</a></li>
                                                            <li><a href="#">MP3 &amp; Media Players</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="yamm-tfw menu-item menu-item-has-children animate-dropdown dropdown">
                                        <a title="Mobiles &amp; Tablets" href="product-category.html" data-toggle="dropdown" class="dropdown-toggle" aria-haspopup="true">Mobiles &amp; Tablets</a>
                                        <ul role="menu" class=" dropdown-menu">
                                            <li class="menu-item animate-dropdown ">
                                                <div class="yamm-content">
                                                    <div class="col-sm-6">
                                                        <ul>
                                                            <li class="nav-title">Mobiles &amp; Tablets</li>
                                                            <li><a href="#">All Mobile Phones</a></li>
                                                            <li><a href="#">Smartphones</a></li>
                                                            <li><a href="#">Android Mobiles</a></li>
                                                            <li><a href="#">Windows Mobiles</a></li>
                                                            <li><a href="#">Refurbished Mobiles</a></li>
                                                            <li class="nav-divider"></li>
                                                            <li><a href="#">All Mobile Accessories</a></li>
                                                            <li><a href="#">Cases &amp; Covers</a></li>
                                                            <li><a href="#">Screen Protectors</a></li>
                                                            <li><a href="#">Power Banks</a></li>
                                                            <li class="nav-divider"></li>
                                                            <li>
                                                                <a href="#">
                                                                    <span class="nav-text">All Electronics</span>
                                                                    <span class="nav-subtext">Discover more products</span>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <ul>
                                                            <li class="nav-title"></li>
                                                            <li><a href="#">All Tablets</a></li>
                                                            <li><a href="#">Tablet Accessories</a></li>
                                                            <li><a href="#">Landline Phones</a></li>
                                                            <li><a href="#">Wearable Devices</a></li>
                                                        </ul>
                                                    </div>                              
                                                </div>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="yamm-tfw menu-item menu-item-has-children animate-dropdown dropdown">
                                        <a title="Movies, Music &amp; Video Games" href="product-category.html" data-toggle="dropdown" class="dropdown-toggle" aria-haspopup="true">Movies, Music &amp; Video Games</a>
                                        <ul role="menu" class=" dropdown-menu">
                                            <li class="menu-item animate-dropdown ">
                                                <div class="yamm-content">                              
                                                    <div class="col-sm-6">
                                                        <ul>
                                                            <li class="nav-title">Movies &amp; TV Shows</li>
                                                            <li><a href="#">All Movies &amp; TV Shows</a></li>
                                                            <li><a href="#">Blu-ray</a></li>
                                                            <li><a href="#">All English</a></li>
                                                            <li><a href="#">All Hindi</a></li>
                                                            <li class="nav-divider"></li>
                                                            <li class="nav-title">Video Games</li>
                                                            <li><a href="#">All Consoles, Games &amp; Accessories</a></li>
                                                            <li><a href="#">PC Games</a></li>
                                                            <li><a href="#">Pre-orders &amp; New Releases</a></li>
                                                            <li><a href="#">Consoles</a></li>
                                                            <li><a href="#">Accessories</a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <ul>
                                                            <li class="nav-title">Music</li>
                                                            <li><a href="#">All Music</a></li>
                                                            <li><a href="#">International Music</a></li>
                                                            <li><a href="#">Film Songs</a></li>
                                                            <li><a href="#">Indian Classical</a></li>
                                                            <li><a href="#">Musical Instruments</a></li>
                                                        </ul>
                                                    </div>                          
                                                </div>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="yamm-tfw menu-item menu-item-has-children animate-dropdown dropdown">
                                        <a title="TV &amp; Audio" href="product-category.html" data-toggle="dropdown" class="dropdown-toggle" aria-haspopup="true">TV &amp; Audio</a>
                                        <ul role="menu" class=" dropdown-menu">
                                            <li class="menu-item animate-dropdown">
                                                <div class="yamm-content">
                                                    <div class="col-sm-6">
                                                        <ul>
                                                            <li class="nav-title">Audio &amp; Video</li>
                                                            <li><a href="#">All Audio &amp; Video</a></li>
                                                            <li><a href="#">Televisions</a></li>
                                                            <li><a href="#">Headphones</a></li>
                                                            <li><a href="#">Speakers</a></li>
                                                            <li><a href="#">Home Entertainment Systems</a></li>
                                                            <li><a href="#">MP3 &amp; Media Players</a></li>
                                                            <li><a href="#">Audio &amp; Video Accessories</a></li>
                                                            <li class="nav-divider"></li>
                                                            <li>
                                                                <a href="#">
                                                                    <span class="nav-text">Electro Home Appliances</span>
                                                                    <span class="nav-subtext">Available in select cities</span>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <ul>
                                                            <li class="nav-title">Music</li>
                                                            <li><a href="#">Televisions</a></li>
                                                            <li><a href="#">Headphones</a></li>
                                                            <li><a href="#">Speakers</a></li>
                                                            <li><a href="#">Media Players</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="yamm-tfw menu-item menu-item-has-children animate-dropdown dropdown">
                                        <a title="Watches &amp; Eyewear" href="product-category.html" data-toggle="dropdown" class="dropdown-toggle" aria-haspopup="true">Watches &amp; Eyewear</a>
                                        <ul role="menu" class=" dropdown-menu">
                                            <li class="menu-item animate-dropdown">
                                                <div class="yamm-content">
                                                    <div class="col-sm-6">
                                                        <ul>
                                                            <li class="nav-title">Watches</li>
                                                            <li><a href="#">All Watches</a></li>
                                                            <li><a href="#">Men&#8217;s Watches</a></li>
                                                            <li><a href="#">Women&#8217;s Watches</a></li>
                                                            <li><a href="#">Premium Watches</a></li>
                                                            <li><a href="#">Deals on Watches</a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <ul>
                                                            <li class="nav-title">Eyewear</li>
                                                            <li><a href="#">Men&#8217;s Sunglasses</a></li>
                                                            <li><a href="#">Women&#8217;s Sunglasses</a></li>
                                                            <li><a href="#">Spectacle Frames</a></li>
                                                            <li><a href="#">All Sunglasses</a></li>
                                                            <li><a href="#">Amazon Fashion</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="yamm-tfw menu-item menu-item-has-children animate-dropdown dropdown">
                                        <a title="Car, Motorbike &amp; Industrial" href="product-category.html" data-toggle="dropdown" class="dropdown-toggle" aria-haspopup="true">Car, Motorbike &amp; Industrial</a>
                                        <ul role="menu" class=" dropdown-menu">
                                            <li class="menu-item animate-dropdown">
                                                <div class="yamm-content">                              
                                                    <div class="col-sm-6">
                                                        <ul>
                                                            <li class="nav-title">Car &amp; Motorbike</li>
                                                            <li><a href="#">All Cars &amp; Bikes</a></li>
                                                            <li><a href="#">Car &amp; Bike Care</a></li>
                                                            <li><a href="#">Lubricants</a></li>
                                                            <li class="nav-divider"></li>
                                                            <li class="nav-title">Shop for Bike</li>
                                                            <li><a href="#">Helmets &amp; Gloves</a></li>
                                                            <li><a href="#">Bike Parts</a></li>
                                                            <li class="nav-title">Shop for Car</li>
                                                            <li><a href="#">Air Fresheners</a></li>
                                                            <li><a href="#">Car Parts</a></li>
                                                            <li><a href="#">Tyre Accessories</a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <ul>
                                                            <li class="nav-title">Industrial Supplies</li>
                                                            <li><a href="#">All Industrial Supplies</a></li>
                                                            <li><a href="#">Lab &amp; Scientific</a></li>
                                                            <li><a href="#">Janitorial &amp; Sanitation Supplies</a></li>
                                                            <li><a href="#">Test, Measure &amp; Inspect</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="menu-item menu-item-has-children animate-dropdown dropdown">
                                        <a title="Accessories" href="product-category.html" data-toggle="dropdown" class="dropdown-toggle" aria-haspopup="true">Accessories</a>
                                        <ul role="menu" class=" dropdown-menu">
                                            <li class="menu-item animate-dropdown ">
                                                <a title="Cases" href="product-category.html">Cases</a>
                                            </li>
                                            <li class="menu-item animate-dropdown ">
                                                <a title="Chargers" href="product-category.html">Chargers</a>
                                            </li>
                                            <li class="menu-item animate-dropdown ">
                                                <a title="Headphone Accessories" href="product-category.html">Headphone Accessories</a>
                                            </li>
                                            <li class="menu-item animate-dropdown ">
                                                <a title="Headphone Cases" href="product-category.html">Headphone Cases</a>
                                            </li>
                                            <li class="menu-item animate-dropdown ">
                                                <a title="Headphones" href="product-category.html">Headphones</a>
                                            </li>
                                            <li class="menu-item animate-dropdown ">
                                                <a title="Computer Accessories" href="product-category.html">Computer Accessories</a>
                                            </li>
                                            <li class="menu-item animate-dropdown ">
                                                <a title="Laptop Accessories" href="product-category.html">Laptop Accessories</a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

            </header><

            <nav class="navbar navbar-primary navbar-full hidden-md-down">
                <div class="container">
                    <ul class="nav navbar-nav departments-menu animate-dropdown">
                        <li class="nav-item dropdown ">

                            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" id="departments-menu-toggle" >Shop by Department</a>
                            <ul id="menu-vertical-menu" class="dropdown-menu yamm departments-menu-dropdown">
                                <li class="highlight menu-item animate-dropdown active"><a title="Value of the Day" href="product-category.html">Value of the Day</a></li>
                                <li class="highlight menu-item animate-dropdown"><a title="Top 100 Offers" href="home-v3.html">Top 100 Offers</a></li>
                                <li class="highlight menu-item animate-dropdown"><a title="New Arrivals" href="home-v3-full-color-background.html">New Arrivals</a></li>

                                <li class="yamm-tfw menu-item menu-item-has-children animate-dropdown menu-item-2584 dropdown">
                                    <a title="Computers &amp; Accessories" href="product-category.html" data-toggle="dropdown" class="dropdown-toggle" aria-haspopup="true">Computers &#038; Accessories</a>
                                    <ul role="menu" class=" dropdown-menu">
                                        <li class="menu-item animate-dropdown menu-item-object-static_block">
                                            <div class="yamm-content">
                                                <div class="vc_row row wpb_row vc_row-fluid bg-yamm-content bg-yamm-content-bottom bg-yamm-content-right">
                                                    <div class="wpb_column vc_column_container vc_col-sm-12 col-sm-12">
                                                        <div class="vc_column-inner ">
                                                            <div class="wpb_wrapper">
                                                                <div class="wpb_single_image wpb_content_element vc_align_left">
                                                                    <figure class="wpb_wrapper vc_figure">
                                                                        <div class="vc_single_image-wrapper   vc_box_border_grey"><img width="540" height="460" src="assets/images/megamenu-2.png" class="vc_single_image-img attachment-full" alt="megamenu-2"/></div>
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
                                                                            <li class="nav-title">Computers &amp; Accessories</li>
                                                                            <li><a href="#">All Computers &amp; Accessories</a></li>
                                                                            <li><a href="#">Laptops, Desktops &amp; Monitors</a></li>
                                                                            <li><a href="#">Pen Drives, Hard Drives &amp; Memory Cards</a></li>
                                                                            <li><a href="#">Printers &amp; Ink</a></li>
                                                                            <li><a href="#">Networking &amp; Internet Devices</a></li>
                                                                            <li><a href="#">Computer Accessories</a></li>
                                                                            <li><a href="#">Software</a></li>
                                                                            <li class="nav-divider"></li>
                                                                            <li><a href="#"><span class="nav-text">All Electronics</span><span class="nav-subtext">Discover more products</span></a></li>
                                                                        </ul>

                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="wpb_column vc_column_container vc_col-sm-6 col-sm-6">
                                                        <div class="vc_column-inner ">
                                                            <div class="wpb_wrapper">
                                                                <div class="wpb_text_column wpb_content_element ">
                                                                    <div class="wpb_wrapper">
                                                                        <ul>
                                                                            <li class="nav-title">Office &amp; Stationery</li>
                                                                            <li><a href="#">All Office &amp; Stationery</a></li>
                                                                            <li><a href="#">Pens &amp; Writing</a></li>
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

                                <li class="yamm-tfw menu-item menu-item-has-children animate-dropdown menu-item-2585 dropdown">
                                    <a title="Cameras, Audio &amp; Video" href="product-category.html" data-toggle="dropdown" class="dropdown-toggle" aria-haspopup="true">Cameras, Audio &#038; Video</a>
                                    <ul role="menu" class=" dropdown-menu">
                                        <li class="menu-item animate-dropdown menu-item-object-static_block">
                                            <div class="yamm-content">
                                                <div class="vc_row row wpb_row vc_row-fluid bg-yamm-content bg-yamm-content-bottom bg-yamm-content-right">
                                                    <div class="wpb_column vc_column_container vc_col-sm-12 col-sm-12">
                                                        <div class="vc_column-inner ">
                                                            <div class="wpb_wrapper">
                                                                <div class="wpb_single_image wpb_content_element vc_align_left">
                                                                    <figure class="wpb_wrapper vc_figure">
                                                                        <div class="vc_single_image-wrapper   vc_box_border_grey"><img width="540" height="460" src="assets/images/megamenu-2.png" class="vc_single_image-img attachment-full" alt="megamenu-2"/></div>
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
                                                                            <li class="nav-title">Computers &amp; Accessories</li>
                                                                            <li><a href="#">All Computers &amp; Accessories</a></li>
                                                                            <li><a href="#">Laptops, Desktops &amp; Monitors</a></li>
                                                                            <li><a href="#">Pen Drives, Hard Drives &amp; Memory Cards</a></li>
                                                                            <li><a href="#">Printers &amp; Ink</a></li>
                                                                            <li><a href="#">Networking &amp; Internet Devices</a></li>
                                                                            <li><a href="#">Computer Accessories</a></li>
                                                                            <li><a href="#">Software</a></li>
                                                                            <li class="nav-divider"></li>
                                                                            <li><a href="#"><span class="nav-text">All Electronics</span><span class="nav-subtext">Discover more products</span></a></li>
                                                                        </ul>

                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="wpb_column vc_column_container vc_col-sm-6 col-sm-6">
                                                        <div class="vc_column-inner ">
                                                            <div class="wpb_wrapper">
                                                                <div class="wpb_text_column wpb_content_element ">
                                                                    <div class="wpb_wrapper">
                                                                        <ul>
                                                                            <li class="nav-title">Office &amp; Stationery</li>
                                                                            <li><a href="#">All Office &amp; Stationery</a></li>
                                                                            <li><a href="#">Pens &amp; Writing</a></li>
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

                                <li class="yamm-tfw menu-item menu-item-has-children animate-dropdown menu-item-2586 dropdown">
                                    <a title="Mobiles &amp; Tablets" href="product-category.html" data-toggle="dropdown" class="dropdown-toggle" aria-haspopup="true">Mobiles &#038; Tablets</a>
                                    <ul role="menu" class=" dropdown-menu">
                                        <li class="menu-item animate-dropdown menu-item-object-static_block">
                                            <div class="yamm-content">
                                                <div class="vc_row row wpb_row vc_row-fluid bg-yamm-content bg-yamm-content-bottom bg-yamm-content-right">
                                                    <div class="wpb_column vc_column_container vc_col-sm-12 col-sm-12">
                                                        <div class="vc_column-inner ">
                                                            <div class="wpb_wrapper">
                                                                <div class="wpb_single_image wpb_content_element vc_align_left">
                                                                    <figure class="wpb_wrapper vc_figure">
                                                                        <div class="vc_single_image-wrapper   vc_box_border_grey"><img width="540" height="460" src="assets/images/megamenu-2.png" class="vc_single_image-img attachment-full" alt="megamenu-2"/></div>
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
                                                                            <li class="nav-title">Computers &amp; Accessories</li>
                                                                            <li><a href="#">All Computers &amp; Accessories</a></li>
                                                                            <li><a href="#">Laptops, Desktops &amp; Monitors</a></li>
                                                                            <li><a href="#">Pen Drives, Hard Drives &amp; Memory Cards</a></li>
                                                                            <li><a href="#">Printers &amp; Ink</a></li>
                                                                            <li><a href="#">Networking &amp; Internet Devices</a></li>
                                                                            <li><a href="#">Computer Accessories</a></li>
                                                                            <li><a href="#">Software</a></li>
                                                                            <li class="nav-divider"></li>
                                                                            <li><a href="#"><span class="nav-text">All Electronics</span><span class="nav-subtext">Discover more products</span></a></li>
                                                                        </ul>

                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="wpb_column vc_column_container vc_col-sm-6 col-sm-6">
                                                        <div class="vc_column-inner ">
                                                            <div class="wpb_wrapper">
                                                                <div class="wpb_text_column wpb_content_element ">
                                                                    <div class="wpb_wrapper">
                                                                        <ul>
                                                                            <li class="nav-title">Office &amp; Stationery</li>
                                                                            <li><a href="#">All Office &amp; Stationery</a></li>
                                                                            <li><a href="#">Pens &amp; Writing</a></li>
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


                                <li class="yamm-tfw menu-item menu-item-has-children animate-dropdown menu-item-2587 dropdown">
                                    <a title="Movies, Music &amp; Video Games" href="product-category.html" data-toggle="dropdown" class="dropdown-toggle" aria-haspopup="true">Movies, Music &#038; Video Games</a>
                                    <ul role="menu" class=" dropdown-menu">
                                        <li class="menu-item animate-dropdown menu-item-object-static_block">
                                            <div class="yamm-content">
                                                <div class="vc_row row wpb_row vc_row-fluid bg-yamm-content bg-yamm-content-bottom bg-yamm-content-right">
                                                    <div class="wpb_column vc_column_container vc_col-sm-12 col-sm-12">
                                                        <div class="vc_column-inner ">
                                                            <div class="wpb_wrapper">
                                                                <div class="wpb_single_image wpb_content_element vc_align_left">
                                                                    <figure class="wpb_wrapper vc_figure">
                                                                        <div class="vc_single_image-wrapper   vc_box_border_grey"><img width="540" height="460" src="assets/images/megamenu-2.png" class="vc_single_image-img attachment-full" alt="megamenu-2"/></div>
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
                                                                            <li class="nav-title">Computers &amp; Accessories</li>
                                                                            <li><a href="#">All Computers &amp; Accessories</a></li>
                                                                            <li><a href="#">Laptops, Desktops &amp; Monitors</a></li>
                                                                            <li><a href="#">Pen Drives, Hard Drives &amp; Memory Cards</a></li>
                                                                            <li><a href="#">Printers &amp; Ink</a></li>
                                                                            <li><a href="#">Networking &amp; Internet Devices</a></li>
                                                                            <li><a href="#">Computer Accessories</a></li>
                                                                            <li><a href="#">Software</a></li>
                                                                            <li class="nav-divider"></li>
                                                                            <li><a href="#"><span class="nav-text">All Electronics</span><span class="nav-subtext">Discover more products</span></a></li>
                                                                        </ul>

                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="wpb_column vc_column_container vc_col-sm-6 col-sm-6">
                                                        <div class="vc_column-inner ">
                                                            <div class="wpb_wrapper">
                                                                <div class="wpb_text_column wpb_content_element ">
                                                                    <div class="wpb_wrapper">
                                                                        <ul>
                                                                            <li class="nav-title">Office &amp; Stationery</li>
                                                                            <li><a href="#">All Office &amp; Stationery</a></li>
                                                                            <li><a href="#">Pens &amp; Writing</a></li>
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


                                <li class="yamm-tfw menu-item menu-item-has-children animate-dropdown menu-item-2588 dropdown">
                                    <a title="TV &amp; Audio" href="product-category.html" data-toggle="dropdown" class="dropdown-toggle" aria-haspopup="true">TV &#038; Audio</a>
                                    <ul role="menu" class=" dropdown-menu">
                                        <li class="menu-item animate-dropdown menu-item-object-static_block">
                                            <div class="yamm-content">
                                                <div class="vc_row row wpb_row vc_row-fluid bg-yamm-content bg-yamm-content-bottom bg-yamm-content-right">
                                                    <div class="wpb_column vc_column_container vc_col-sm-12 col-sm-12">
                                                        <div class="vc_column-inner ">
                                                            <div class="wpb_wrapper">
                                                                <div class="wpb_single_image wpb_content_element vc_align_left">
                                                                    <figure class="wpb_wrapper vc_figure">
                                                                        <div class="vc_single_image-wrapper   vc_box_border_grey"><img width="540" height="460" src="assets/images/megamenu-2.png" class="vc_single_image-img attachment-full" alt="megamenu-2"/></div>
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
                                                                            <li class="nav-title">Computers &amp; Accessories</li>
                                                                            <li><a href="#">All Computers &amp; Accessories</a></li>
                                                                            <li><a href="#">Laptops, Desktops &amp; Monitors</a></li>
                                                                            <li><a href="#">Pen Drives, Hard Drives &amp; Memory Cards</a></li>
                                                                            <li><a href="#">Printers &amp; Ink</a></li>
                                                                            <li><a href="#">Networking &amp; Internet Devices</a></li>
                                                                            <li><a href="#">Computer Accessories</a></li>
                                                                            <li><a href="#">Software</a></li>
                                                                            <li class="nav-divider"></li>
                                                                            <li><a href="#"><span class="nav-text">All Electronics</span><span class="nav-subtext">Discover more products</span></a></li>
                                                                        </ul>

                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="wpb_column vc_column_container vc_col-sm-6 col-sm-6">
                                                        <div class="vc_column-inner ">
                                                            <div class="wpb_wrapper">
                                                                <div class="wpb_text_column wpb_content_element ">
                                                                    <div class="wpb_wrapper">
                                                                        <ul>
                                                                            <li class="nav-title">Office &amp; Stationery</li>
                                                                            <li><a href="#">All Office &amp; Stationery</a></li>
                                                                            <li><a href="#">Pens &amp; Writing</a></li>
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


                                <li class="yamm-tfw menu-item menu-item-has-children animate-dropdown menu-item-2589 dropdown">

                                    <a title="Watches &amp; Eyewear" href="product-category.html" data-toggle="dropdown" class="dropdown-toggle" aria-haspopup="true">Watches &#038; Eyewear</a>
                                    <ul role="menu" class=" dropdown-menu">
                                        <li class="menu-item animate-dropdown menu-item-object-static_block">
                                            <div class="yamm-content">
                                                <div class="vc_row row wpb_row vc_row-fluid bg-yamm-content bg-yamm-content-bottom bg-yamm-content-right">
                                                    <div class="wpb_column vc_column_container vc_col-sm-12 col-sm-12">
                                                        <div class="vc_column-inner ">
                                                            <div class="wpb_wrapper">
                                                                <div class="wpb_single_image wpb_content_element vc_align_left">
                                                                    <figure class="wpb_wrapper vc_figure">
                                                                        <div class="vc_single_image-wrapper   vc_box_border_grey"><img width="540" height="460" src="assets/images/megamenu-2.png" class="vc_single_image-img attachment-full" alt="megamenu-2"/></div>
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
                                                                            <li class="nav-title">Computers &amp; Accessories</li>
                                                                            <li><a href="#">All Computers &amp; Accessories</a></li>
                                                                            <li><a href="#">Laptops, Desktops &amp; Monitors</a></li>
                                                                            <li><a href="#">Pen Drives, Hard Drives &amp; Memory Cards</a></li>
                                                                            <li><a href="#">Printers &amp; Ink</a></li>
                                                                            <li><a href="#">Networking &amp; Internet Devices</a></li>
                                                                            <li><a href="#">Computer Accessories</a></li>
                                                                            <li><a href="#">Software</a></li>
                                                                            <li class="nav-divider"></li>
                                                                            <li><a href="#"><span class="nav-text">All Electronics</span><span class="nav-subtext">Discover more products</span></a></li>
                                                                        </ul>

                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="wpb_column vc_column_container vc_col-sm-6 col-sm-6">
                                                        <div class="vc_column-inner ">
                                                            <div class="wpb_wrapper">
                                                                <div class="wpb_text_column wpb_content_element ">
                                                                    <div class="wpb_wrapper">
                                                                        <ul>
                                                                            <li class="nav-title">Office &amp; Stationery</li>
                                                                            <li><a href="#">All Office &amp; Stationery</a></li>
                                                                            <li><a href="#">Pens &amp; Writing</a></li>
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


                                <li class="yamm-tfw menu-item menu-item-has-children animate-dropdown menu-item-2590 dropdown">

                                    <a title="Car, Motorbike &amp; Industrial" href="product-category.html" data-toggle="dropdown" class="dropdown-toggle" aria-haspopup="true">Car, Motorbike &#038; Industrial</a>
                                    <ul role="menu" class=" dropdown-menu">
                                        <li class="menu-item animate-dropdown menu-item-object-static_block">
                                            <div class="yamm-content">
                                                <div class="vc_row row wpb_row vc_row-fluid bg-yamm-content bg-yamm-content-bottom bg-yamm-content-right">
                                                    <div class="wpb_column vc_column_container vc_col-sm-12 col-sm-12">
                                                        <div class="vc_column-inner ">
                                                            <div class="wpb_wrapper">
                                                                <div class="wpb_single_image wpb_content_element vc_align_left">
                                                                    <figure class="wpb_wrapper vc_figure">
                                                                        <div class="vc_single_image-wrapper   vc_box_border_grey"><img width="540" height="460" src="assets/images/megamenu-2.png" class="vc_single_image-img attachment-full" alt="megamenu-2"/></div>
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
                                                                            <li class="nav-title">Computers &amp; Accessories</li>
                                                                            <li><a href="#">All Computers &amp; Accessories</a></li>
                                                                            <li><a href="#">Laptops, Desktops &amp; Monitors</a></li>
                                                                            <li><a href="#">Pen Drives, Hard Drives &amp; Memory Cards</a></li>
                                                                            <li><a href="#">Printers &amp; Ink</a></li>
                                                                            <li><a href="#">Networking &amp; Internet Devices</a></li>
                                                                            <li><a href="#">Computer Accessories</a></li>
                                                                            <li><a href="#">Software</a></li>
                                                                            <li class="nav-divider"></li>
                                                                            <li><a href="#"><span class="nav-text">All Electronics</span><span class="nav-subtext">Discover more products</span></a></li>
                                                                        </ul>

                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="wpb_column vc_column_container vc_col-sm-6 col-sm-6">
                                                        <div class="vc_column-inner ">
                                                            <div class="wpb_wrapper">
                                                                <div class="wpb_text_column wpb_content_element ">
                                                                    <div class="wpb_wrapper">
                                                                        <ul>
                                                                            <li class="nav-title">Office &amp; Stationery</li>
                                                                            <li><a href="#">All Office &amp; Stationery</a></li>
                                                                            <li><a href="#">Pens &amp; Writing</a></li>
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

                                <li class="menu-item animate-dropdown"><a title="Accessories" href="product-category.html">Accessories</a></li>
                                <li class="menu-item animate-dropdown"><a title="Printers &amp; Ink" href="product-category.html">Printers &#038; Ink</a></li>
                                <li class="menu-item animate-dropdown"><a title="Software" href="product-category.html">Software</a></li>
                                <li class="menu-item animate-dropdown"><a title="Office Supplies" href="product-category.html">Office Supplies</a></li>
                                <li class="menu-item animate-dropdown"><a title="Computer Components" href="product-category.html">Computer Components</a></li>
                                <li class="menu-item animate-dropdown"><a title="Car Electronic &amp; GPS" href="product-category.html">Car Electronic &#038; GPS</a></li>
                                <li class="menu-item animate-dropdown"><a title="Accessories" href="product-category.html">Accessories</a></li>
                                <li class="menu-item animate-dropdown"><a title="Printers &amp; Ink" href="product-category.html">Printers &#038; Ink</a></li>
                            </ul>
                        </li>
                    </ul>
                    <form class="navbar-search" method="get" action="http://transvelo.github.io/">
                        <label class="sr-only screen-reader-text" for="search">Search for:</label>
                        <div class="input-group">
                            <input type="text" id="search" class="form-control search-field" dir="ltr" value="" name="s" placeholder="Search for products" />
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

                    <ul class="navbar-wishlist nav navbar-nav pull-right flip">
                        <li class="nav-item">
                            <a href="wishlist.html" class="nav-link"><i class="ec ec-favorites"></i></a>
                        </li>
                    </ul>
                    <ul class="navbar-compare nav navbar-nav pull-right flip">
                        <li class="nav-item">
                            <a href="compare.html" class="nav-link"><i class="ec ec-compare"></i></a>
                        </li>
                    </ul>
                </div>
            </nav>


            <div id="content" class="site-content" tabindex="-1">
                <div class="container">

                    <nav class="woocommerce-breadcrumb" ><a href="home.html">Home</a><span class="delimiter"><i class="fa fa-angle-right"></i></span>Smart Phones &amp; Tablets</nav>

                    <div id="primary" class="content-area">
                        <main id="main" class="site-main">

                            


                            <div class="shop-control-bar">
                                <ul class="shop-view-switcher nav nav-tabs" role="tablist">
                                    <li class="nav-item"><a class="nav-link active" data-toggle="tab" title="Grid View" href="#grid"><i class="fa fa-th"></i></a></li>
                                    <li class="nav-item"><a class="nav-link " data-toggle="tab" title="Grid Extended View" href="#grid-extended"><i class="fa fa-align-justify"></i></a></li>
                                    <li class="nav-item"><a class="nav-link " data-toggle="tab" title="List View" href="#list-view"><i class="fa fa-list"></i></a></li>
                                    <li class="nav-item"><a class="nav-link " data-toggle="tab" title="List View Small" href="#list-view-small"><i class="fa fa-th-list"></i></a></li>
                                </ul>
                                <form class="woocommerce-ordering" method="get">
                                    <select name="orderby" class="orderby">
                                        <option value="menu_order"  selected='selected'>Default sorting</option>
                                        <option value="popularity" >Sort by popularity</option>
                                        <option value="rating" >Sort by average rating</option>
                                        <option value="date" >Sort by newness</option>
                                        <option value="price" >Sort by price: low to high</option>
                                        <option value="price-desc" >Sort by price: high to low</option>
                                    </select>
                                </form>
                                <form class="form-electro-wc-ppp"><select name="ppp" onchange="this.form.submit()" class="electro-wc-wppp-select c-select"><option value="15"  selected='selected'>Show 15</option><option value="-1" >Show All</option></select></form>
                                <nav class="electro-advanced-pagination">
                                    <form method="post" class="form-adv-pagination"><input id="goto-page" size="2" min="1" max="2" step="1" type="number" class="form-control" value="1" /></form> of 2<a class="next page-numbers" href="#">&rarr;</a>         <script>
                                    jQuery(document).ready(function($){
                                        $( '.form-adv-pagination' ).on( 'submit', function() {
                                            var link        = '#',
                                            goto_page   = $( '#goto-page' ).val(),
                                            new_link    = link.replace( '%#%', goto_page );

                                            window.location.href = new_link;
                                            return false;
                                        });
                                    });
                                    </script>
                                </nav>
                            </div>

                                <div role="tabpanel" class="tab-pane active" id="grid" aria-expanded="true">

                                    <ul class="products columns-3">
                                        @foreach($services as $service)
                                            <?php
                                                $images= array();
                                                $images=explode('|',$service->images);
                                                ?>
                                        <li class="product first">
                                            <div class="product-outer">
                                                <div class="product-inner">
                                                    <span class="loop-product-categories"><a href="{{url('category/subcategory/'.$service->pro_slug)}}" rel="tag">{{$service->category}}</a></span>
                                                    <a href="{{url('category/subcategory/'.$service->pro_slug)}}">
                                                        <h3>{{$service->product}}</h3>
                                                        <div class="product-thumbnail">

                                                            <img src="{{asset('users/assets/products/images/'.$images[0])}}"  alt="">

                                                        </div>
                                                    </a>

                                                    <div class="price-add-to-cart">
                                                        <span class="price">
                                                            <span class="electro-price">
                                                                <ins><span class="amount">Rs.{{$service->price}}.00</span></ins>
                                                               
                                                            </span>
                                                        </span>
                                                        <a rel="nofollow" href="single-product.html" class="button add_to_cart_button">Book Now</a>
                                                    </div><!-- /.price-add-to-cart -->

                                                    <div class="hover-area">
                                                        <div class="action-buttons">
                                                            <a href="#" rel="nofollow" class="add_to_wishlist">Wishlist</a>
                                                            <a href="#" class="add-to-compare-link">Compare</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- /.product-inner -->
                                            </div><!-- /.product-outer -->
                                        </li>
                                        @endforeach
                                        
                                       
                                    

                                    </ul>
  @if(!$services->isEmpty())                                  
                            <div class="tab-content">

    
                                </div>
                                <div role="tabpanel" class="tab-pane" id="grid-extended" aria-expanded="true">

                                    <ul class="products columns-3">
                                        <li class="product first">
                                            <div class="product-outer">
                                                <div class="product-inner">
                                                    <span class="loop-product-categories"><a href="product-category.html" rel="tag">Smartphones</a></span>
                                                    <a href="single-product.html">
                                                        <h3>Notebook Black Spire V Nitro  VN7-591G</h3>
                                                        <div class="product-thumbnail">
                                                            <img class="wp-post-image" data-echo="assets/images/products/1.jpg" src="assets/images/blank.gif" alt="">
                                                        </div>

                                                        <div class="product-rating">
                                                            <div title="Rated 4 out of 5" class="star-rating"><span style="width:80%"><strong class="rating">4</strong> out of 5</span></div> (3)
                                                        </div>

                                                        <div class="product-short-description">
                                                            <ul>
                                                                <li><span class="a-list-item">Intel Core i5 processors (13-inch model)</span></li>
                                                                <li><span class="a-list-item">Intel Iris Graphics 6100 (13-inch model)</span></li>
                                                                <li><span class="a-list-item">Flash storage</span></li>
                                                                <li><span class="a-list-item">Up to 10 hours of battery life2 (13-inch model)</span></li>
                                                                <li><span class="a-list-item">Force Touch trackpad (13-inch model)</span></li>
                                                            </ul>
                                                        </div>

                                                        <div class="product-sku">SKU: 5487FB8/15</div>
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
                                        <li class="product ">
                                            <div class="product-outer">
                                                <div class="product-inner">
                                                    <span class="loop-product-categories"><a href="product-category.html" rel="tag">Smartphones</a></span>
                                                    <a href="single-product.html">
                                                        <h3>Notebook Black Spire V Nitro  VN7-591G</h3>
                                                        <div class="product-thumbnail">
                                                            <img class="wp-post-image" data-echo="assets/images/products/2.jpg" src="assets/images/blank.gif" alt="">
                                                        </div>

                                                        <div class="product-rating">
                                                            <div title="Rated 4 out of 5" class="star-rating"><span style="width:80%"><strong class="rating">4</strong> out of 5</span></div> (3)
                                                        </div>

                                                        <div class="product-short-description">
                                                            <ul>
                                                                <li><span class="a-list-item">Intel Core i5 processors (13-inch model)</span></li>
                                                                <li><span class="a-list-item">Intel Iris Graphics 6100 (13-inch model)</span></li>
                                                                <li><span class="a-list-item">Flash storage</span></li>
                                                                <li><span class="a-list-item">Up to 10 hours of battery life2 (13-inch model)</span></li>
                                                                <li><span class="a-list-item">Force Touch trackpad (13-inch model)</span></li>
                                                            </ul>
                                                        </div>

                                                        <div class="product-sku">SKU: 5487FB8/15</div>
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
                                                            <img class="wp-post-image" data-echo="assets/images/products/3.jpg" src="assets/images/blank.gif" alt="">
                                                        </div>

                                                        <div class="product-rating">
                                                            <div title="Rated 4 out of 5" class="star-rating"><span style="width:80%"><strong class="rating">4</strong> out of 5</span></div> (3)
                                                        </div>

                                                        <div class="product-short-description">
                                                            <ul>
                                                                <li><span class="a-list-item">Intel Core i5 processors (13-inch model)</span></li>
                                                                <li><span class="a-list-item">Intel Iris Graphics 6100 (13-inch model)</span></li>
                                                                <li><span class="a-list-item">Flash storage</span></li>
                                                                <li><span class="a-list-item">Up to 10 hours of battery life2 (13-inch model)</span></li>
                                                                <li><span class="a-list-item">Force Touch trackpad (13-inch model)</span></li>
                                                            </ul>
                                                        </div>

                                                        <div class="product-sku">SKU: 5487FB8/15</div>
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
                                        <li class="product first">
                                            <div class="product-outer">
                                                <div class="product-inner">
                                                    <span class="loop-product-categories"><a href="product-category.html" rel="tag">Smartphones</a></span>
                                                    <a href="single-product.html">
                                                        <h3>Notebook Black Spire V Nitro  VN7-591G</h3>
                                                        <div class="product-thumbnail">
                                                            <img class="wp-post-image" data-echo="assets/images/products/4.jpg" src="assets/images/blank.gif" alt="">
                                                        </div>

                                                        <div class="product-rating">
                                                            <div title="Rated 4 out of 5" class="star-rating"><span style="width:80%"><strong class="rating">4</strong> out of 5</span></div> (3)
                                                        </div>

                                                        <div class="product-short-description">
                                                            <ul>
                                                                <li><span class="a-list-item">Intel Core i5 processors (13-inch model)</span></li>
                                                                <li><span class="a-list-item">Intel Iris Graphics 6100 (13-inch model)</span></li>
                                                                <li><span class="a-list-item">Flash storage</span></li>
                                                                <li><span class="a-list-item">Up to 10 hours of battery life2 (13-inch model)</span></li>
                                                                <li><span class="a-list-item">Force Touch trackpad (13-inch model)</span></li>
                                                            </ul>
                                                        </div>

                                                        <div class="product-sku">SKU: 5487FB8/15</div>
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
                                        <li class="product ">
                                            <div class="product-outer">
                                                <div class="product-inner">
                                                    <span class="loop-product-categories"><a href="product-category.html" rel="tag">Smartphones</a></span>
                                                    <a href="single-product.html">
                                                        <h3>Notebook Black Spire V Nitro  VN7-591G</h3>
                                                        <div class="product-thumbnail">
                                                            <img class="wp-post-image" data-echo="assets/images/products/5.jpg" src="assets/images/blank.gif" alt="">
                                                        </div>

                                                        <div class="product-rating">
                                                            <div title="Rated 4 out of 5" class="star-rating"><span style="width:80%"><strong class="rating">4</strong> out of 5</span></div> (3)
                                                        </div>

                                                        <div class="product-short-description">
                                                            <ul>
                                                                <li><span class="a-list-item">Intel Core i5 processors (13-inch model)</span></li>
                                                                <li><span class="a-list-item">Intel Iris Graphics 6100 (13-inch model)</span></li>
                                                                <li><span class="a-list-item">Flash storage</span></li>
                                                                <li><span class="a-list-item">Up to 10 hours of battery life2 (13-inch model)</span></li>
                                                                <li><span class="a-list-item">Force Touch trackpad (13-inch model)</span></li>
                                                            </ul>
                                                        </div>

                                                        <div class="product-sku">SKU: 5487FB8/15</div>
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
                                                            <img class="wp-post-image" data-echo="assets/images/products/6.jpg" src="assets/images/blank.gif" alt="">
                                                        </div>

                                                        <div class="product-rating">
                                                            <div title="Rated 4 out of 5" class="star-rating"><span style="width:80%"><strong class="rating">4</strong> out of 5</span></div> (3)
                                                        </div>

                                                        <div class="product-short-description">
                                                            <ul>
                                                                <li><span class="a-list-item">Intel Core i5 processors (13-inch model)</span></li>
                                                                <li><span class="a-list-item">Intel Iris Graphics 6100 (13-inch model)</span></li>
                                                                <li><span class="a-list-item">Flash storage</span></li>
                                                                <li><span class="a-list-item">Up to 10 hours of battery life2 (13-inch model)</span></li>
                                                                <li><span class="a-list-item">Force Touch trackpad (13-inch model)</span></li>
                                                            </ul>
                                                        </div>

                                                        <div class="product-sku">SKU: 5487FB8/15</div>
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
                                        <li class="product first">
                                            <div class="product-outer">
                                                <div class="product-inner">
                                                    <span class="loop-product-categories"><a href="product-category.html" rel="tag">Smartphones</a></span>
                                                    <a href="single-product.html">
                                                        <h3>Notebook Black Spire V Nitro  VN7-591G</h3>
                                                        <div class="product-thumbnail">
                                                            <img class="wp-post-image" data-echo="assets/images/products/4.jpg" src="assets/images/blank.gif" alt="">
                                                        </div>

                                                        <div class="product-rating">
                                                            <div title="Rated 4 out of 5" class="star-rating"><span style="width:80%"><strong class="rating">4</strong> out of 5</span></div> (3)
                                                        </div>

                                                        <div class="product-short-description">
                                                            <ul>
                                                                <li><span class="a-list-item">Intel Core i5 processors (13-inch model)</span></li>
                                                                <li><span class="a-list-item">Intel Iris Graphics 6100 (13-inch model)</span></li>
                                                                <li><span class="a-list-item">Flash storage</span></li>
                                                                <li><span class="a-list-item">Up to 10 hours of battery life2 (13-inch model)</span></li>
                                                                <li><span class="a-list-item">Force Touch trackpad (13-inch model)</span></li>
                                                            </ul>
                                                        </div>

                                                        <div class="product-sku">SKU: 5487FB8/15</div>
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
                                        <li class="product ">
                                            <div class="product-outer">
                                                <div class="product-inner">
                                                    <span class="loop-product-categories"><a href="product-category.html" rel="tag">Smartphones</a></span>
                                                    <a href="single-product.html">
                                                        <h3>Notebook Black Spire V Nitro  VN7-591G</h3>
                                                        <div class="product-thumbnail">
                                                            <img class="wp-post-image" data-echo="assets/images/products/2.jpg" src="assets/images/blank.gif" alt="">
                                                        </div>

                                                        <div class="product-rating">
                                                            <div title="Rated 4 out of 5" class="star-rating"><span style="width:80%"><strong class="rating">4</strong> out of 5</span></div> (3)
                                                        </div>

                                                        <div class="product-short-description">
                                                            <ul>
                                                                <li><span class="a-list-item">Intel Core i5 processors (13-inch model)</span></li>
                                                                <li><span class="a-list-item">Intel Iris Graphics 6100 (13-inch model)</span></li>
                                                                <li><span class="a-list-item">Flash storage</span></li>
                                                                <li><span class="a-list-item">Up to 10 hours of battery life2 (13-inch model)</span></li>
                                                                <li><span class="a-list-item">Force Touch trackpad (13-inch model)</span></li>
                                                            </ul>
                                                        </div>

                                                        <div class="product-sku">SKU: 5487FB8/15</div>
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
                                                            <img class="wp-post-image" data-echo="assets/images/products/5.jpg" src="assets/images/blank.gif" alt="">
                                                        </div>

                                                        <div class="product-rating">
                                                            <div title="Rated 4 out of 5" class="star-rating"><span style="width:80%"><strong class="rating">4</strong> out of 5</span></div> (3)
                                                        </div>

                                                        <div class="product-short-description">
                                                            <ul>
                                                                <li><span class="a-list-item">Intel Core i5 processors (13-inch model)</span></li>
                                                                <li><span class="a-list-item">Intel Iris Graphics 6100 (13-inch model)</span></li>
                                                                <li><span class="a-list-item">Flash storage</span></li>
                                                                <li><span class="a-list-item">Up to 10 hours of battery life2 (13-inch model)</span></li>
                                                                <li><span class="a-list-item">Force Touch trackpad (13-inch model)</span></li>
                                                            </ul>
                                                        </div>

                                                        <div class="product-sku">SKU: 5487FB8/15</div>
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
                                        <li class="product first">
                                            <div class="product-outer">
                                                <div class="product-inner">
                                                    <span class="loop-product-categories"><a href="product-category.html" rel="tag">Smartphones</a></span>
                                                    <a href="single-product.html">
                                                        <h3>Notebook Black Spire V Nitro  VN7-591G</h3>
                                                        <div class="product-thumbnail">
                                                            <img class="wp-post-image" data-echo="assets/images/products/1.jpg" src="assets/images/blank.gif" alt="">
                                                        </div>

                                                        <div class="product-rating">
                                                            <div title="Rated 4 out of 5" class="star-rating"><span style="width:80%"><strong class="rating">4</strong> out of 5</span></div> (3)
                                                        </div>

                                                        <div class="product-short-description">
                                                            <ul>
                                                                <li><span class="a-list-item">Intel Core i5 processors (13-inch model)</span></li>
                                                                <li><span class="a-list-item">Intel Iris Graphics 6100 (13-inch model)</span></li>
                                                                <li><span class="a-list-item">Flash storage</span></li>
                                                                <li><span class="a-list-item">Up to 10 hours of battery life2 (13-inch model)</span></li>
                                                                <li><span class="a-list-item">Force Touch trackpad (13-inch model)</span></li>
                                                            </ul>
                                                        </div>

                                                        <div class="product-sku">SKU: 5487FB8/15</div>
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
                                        <li class="product ">
                                            <div class="product-outer">
                                                <div class="product-inner">
                                                    <span class="loop-product-categories"><a href="product-category.html" rel="tag">Smartphones</a></span>
                                                    <a href="single-product.html">
                                                        <h3>Notebook Black Spire V Nitro  VN7-591G</h3>
                                                        <div class="product-thumbnail">
                                                            <img class="wp-post-image" data-echo="assets/images/products/6.jpg" src="assets/images/blank.gif" alt="">
                                                        </div>

                                                        <div class="product-rating">
                                                            <div title="Rated 4 out of 5" class="star-rating"><span style="width:80%"><strong class="rating">4</strong> out of 5</span></div> (3)
                                                        </div>

                                                        <div class="product-short-description">
                                                            <ul>
                                                                <li><span class="a-list-item">Intel Core i5 processors (13-inch model)</span></li>
                                                                <li><span class="a-list-item">Intel Iris Graphics 6100 (13-inch model)</span></li>
                                                                <li><span class="a-list-item">Flash storage</span></li>
                                                                <li><span class="a-list-item">Up to 10 hours of battery life2 (13-inch model)</span></li>
                                                                <li><span class="a-list-item">Force Touch trackpad (13-inch model)</span></li>
                                                            </ul>
                                                        </div>

                                                        <div class="product-sku">SKU: 5487FB8/15</div>
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
                                                            <img class="wp-post-image" data-echo="assets/images/products/3.jpg" src="assets/images/blank.gif" alt="">
                                                        </div>

                                                        <div class="product-rating">
                                                            <div title="Rated 4 out of 5" class="star-rating"><span style="width:80%"><strong class="rating">4</strong> out of 5</span></div> (3)
                                                        </div>

                                                        <div class="product-short-description">
                                                            <ul>
                                                                <li><span class="a-list-item">Intel Core i5 processors (13-inch model)</span></li>
                                                                <li><span class="a-list-item">Intel Iris Graphics 6100 (13-inch model)</span></li>
                                                                <li><span class="a-list-item">Flash storage</span></li>
                                                                <li><span class="a-list-item">Up to 10 hours of battery life2 (13-inch model)</span></li>
                                                                <li><span class="a-list-item">Force Touch trackpad (13-inch model)</span></li>
                                                            </ul>
                                                        </div>

                                                        <div class="product-sku">SKU: 5487FB8/15</div>
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
                                        <li class="product first">
                                            <div class="product-outer">
                                                <div class="product-inner">
                                                    <span class="loop-product-categories"><a href="product-category.html" rel="tag">Smartphones</a></span>
                                                    <a href="single-product.html">
                                                        <h3>Notebook Black Spire V Nitro  VN7-591G</h3>
                                                        <div class="product-thumbnail">
                                                            <img class="wp-post-image" data-echo="assets/images/products/5.jpg" src="assets/images/blank.gif" alt="">
                                                        </div>

                                                        <div class="product-rating">
                                                            <div title="Rated 4 out of 5" class="star-rating"><span style="width:80%"><strong class="rating">4</strong> out of 5</span></div> (3)
                                                        </div>

                                                        <div class="product-short-description">
                                                            <ul>
                                                                <li><span class="a-list-item">Intel Core i5 processors (13-inch model)</span></li>
                                                                <li><span class="a-list-item">Intel Iris Graphics 6100 (13-inch model)</span></li>
                                                                <li><span class="a-list-item">Flash storage</span></li>
                                                                <li><span class="a-list-item">Up to 10 hours of battery life2 (13-inch model)</span></li>
                                                                <li><span class="a-list-item">Force Touch trackpad (13-inch model)</span></li>
                                                            </ul>
                                                        </div>

                                                        <div class="product-sku">SKU: 5487FB8/15</div>
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
                                        <li class="product ">
                                            <div class="product-outer">
                                                <div class="product-inner">
                                                    <span class="loop-product-categories"><a href="product-category.html" rel="tag">Smartphones</a></span>
                                                    <a href="single-product.html">
                                                        <h3>Notebook Black Spire V Nitro  VN7-591G</h3>
                                                        <div class="product-thumbnail">
                                                            <img class="wp-post-image" data-echo="assets/images/products/4.jpg" src="assets/images/blank.gif" alt="">
                                                        </div>

                                                        <div class="product-rating">
                                                            <div title="Rated 4 out of 5" class="star-rating"><span style="width:80%"><strong class="rating">4</strong> out of 5</span></div> (3)
                                                        </div>

                                                        <div class="product-short-description">
                                                            <ul>
                                                                <li><span class="a-list-item">Intel Core i5 processors (13-inch model)</span></li>
                                                                <li><span class="a-list-item">Intel Iris Graphics 6100 (13-inch model)</span></li>
                                                                <li><span class="a-list-item">Flash storage</span></li>
                                                                <li><span class="a-list-item">Up to 10 hours of battery life2 (13-inch model)</span></li>
                                                                <li><span class="a-list-item">Force Touch trackpad (13-inch model)</span></li>
                                                            </ul>
                                                        </div>

                                                        <div class="product-sku">SKU: 5487FB8/15</div>
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
                                                            <img class="wp-post-image" data-echo="assets/images/products/2.jpg" src="assets/images/blank.gif" alt="">
                                                        </div>

                                                        <div class="product-rating">
                                                            <div title="Rated 4 out of 5" class="star-rating"><span style="width:80%"><strong class="rating">4</strong> out of 5</span></div> (3)
                                                        </div>

                                                        <div class="product-short-description">
                                                            <ul>
                                                                <li><span class="a-list-item">Intel Core i5 processors (13-inch model)</span></li>
                                                                <li><span class="a-list-item">Intel Iris Graphics 6100 (13-inch model)</span></li>
                                                                <li><span class="a-list-item">Flash storage</span></li>
                                                                <li><span class="a-list-item">Up to 10 hours of battery life2 (13-inch model)</span></li>
                                                                <li><span class="a-list-item">Force Touch trackpad (13-inch model)</span></li>
                                                            </ul>
                                                        </div>

                                                        <div class="product-sku">SKU: 5487FB8/15</div>
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
                                    </ul>
                                </div>

                                <div role="tabpanel" class="tab-pane" id="list-view" aria-expanded="true">
                                    <ul class="products columns-3">
                                        <li class="product list-view">
                                            <div class="media">
                                                <div class="media-left">
                                                    <a href="single-product.html">
                                                        <img class="wp-post-image" data-echo="assets/images/products/1.jpg" src="assets/images/blank.gif" alt="">
                                                    </a>
                                                </div>
                                                <div class="media-body media-middle">
                                                    <div class="row">
                                                        <div class="col-xs-12">
                                                            <span class="loop-product-categories"><a rel="tag" href="#">Tablets</a></span><a href="single-product.html"><h3>Tablet Air 3 WiFi 64GB  Gold</h3>
                                                                <div class="product-rating">
                                                                    <div title="Rated 4 out of 5" class="star-rating"><span style="width:80%"><strong class="rating">4</strong> out of 5</span></div> (3)
                                                                </div>
                                                                <div class="product-short-description">
                                                                    <ul style="padding-left: 18px;">
                                                                        <li>4.5 inch HD Screen</li>
                                                                        <li>Android 4.4 KitKat OS</li>
                                                                        <li>1.4 GHz Quad Core&trade; Processor</li>
                                                                        <li>20 MP front Camera</li>
                                                                    </ul>
                                                                </div>
                                                            </a>
                                                        </div>
                                                        <div class="col-xs-12">

                                                            <div class="availability in-stock">Availablity: <span>In stock</span></div>

                                                            <span class="price"><span class="electro-price"><span class="amount">$629.00</span></span></span>
                                                            <a class="button product_type_simple add_to_cart_button ajax_add_to_cart" data-product_sku="5487FB8/35" data-product_id="2706" data-quantity="1" href="single-product.html" rel="nofollow">Add to cart</a>
                                                            <div class="hover-area">
                                                                <div class="action-buttons">
                                                                    <div class="yith-wcwl-add-to-wishlist add-to-wishlist-2706">
                                                                        <a class="add_to_wishlist" data-product-type="simple" data-product-id="2706" rel="nofollow" href="#">Wishlist</a>

                                                                        <div style="display:none;" class="yith-wcwl-wishlistaddedbrowse hide">
                                                                            <span class="feedback">Product added!</span>
                                                                            <a rel="nofollow" href="#">Wishlist</a>
                                                                        </div>

                                                                        <div style="display:none" class="yith-wcwl-wishlistexistsbrowse hide">
                                                                            <span class="feedback">The product is already in the wishlist!</span>
                                                                            <a rel="nofollow" href="#">Wishlist</a>
                                                                        </div>

                                                                        <div style="clear:both"></div>
                                                                        <div class="yith-wcwl-wishlistaddresponse"></div>

                                                                    </div>
                                                                    <div class="clear"></div>
                                                                    <a data-product_id="2706" class="add-to-compare-link" href="#">Compare</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="product list-view">
                                            <div class="media">
                                                <div class="media-left">
                                                    <a href="single-product.html">
                                                        <img class="wp-post-image" data-echo="assets/images/products/2.jpg" src="assets/images/blank.gif" alt="">
                                                    </a>
                                                </div>
                                                <div class="media-body media-middle">
                                                    <div class="row">
                                                        <div class="col-xs-12">
                                                            <span class="loop-product-categories"><a rel="tag" href="#">Tablets</a></span><a href="single-product.html"><h3>Tablet Air 3 WiFi 64GB  Gold</h3>
                                                                <div class="product-rating">
                                                                    <div title="Rated 4 out of 5" class="star-rating"><span style="width:80%"><strong class="rating">4</strong> out of 5</span></div> (3)
                                                                </div>
                                                                <div class="product-short-description">
                                                                    <ul style="padding-left: 18px;">
                                                                        <li>4.5 inch HD Screen</li>
                                                                        <li>Android 4.4 KitKat OS</li>
                                                                        <li>1.4 GHz Quad Core&trade; Processor</li>
                                                                        <li>20 MP front Camera</li>
                                                                    </ul>
                                                                </div>
                                                            </a>
                                                        </div>
                                                        <div class="col-xs-12">

                                                            <div class="availability in-stock">Availablity: <span>In stock</span></div>

                                                            <span class="price"><span class="electro-price"><span class="amount">$629.00</span></span></span>
                                                            <a class="button product_type_simple add_to_cart_button ajax_add_to_cart" data-product_sku="5487FB8/35" data-product_id="2706" data-quantity="1" href="single-product.html" rel="nofollow">Add to cart</a>
                                                            <div class="hover-area">
                                                                <div class="action-buttons">
                                                                    <div class="yith-wcwl-add-to-wishlist add-to-wishlist-2706">
                                                                        <a class="add_to_wishlist" data-product-type="simple" data-product-id="2706" rel="nofollow" href="#">Wishlist</a>

                                                                        <div style="display:none;" class="yith-wcwl-wishlistaddedbrowse hide">
                                                                            <span class="feedback">Product added!</span>
                                                                            <a rel="nofollow" href="#">Wishlist</a>
                                                                        </div>

                                                                        <div style="display:none" class="yith-wcwl-wishlistexistsbrowse hide">
                                                                            <span class="feedback">The product is already in the wishlist!</span>
                                                                            <a rel="nofollow" href="#">Wishlist</a>
                                                                        </div>

                                                                        <div style="clear:both"></div>
                                                                        <div class="yith-wcwl-wishlistaddresponse"></div>

                                                                    </div>
                                                                    <div class="clear"></div>
                                                                    <a data-product_id="2706" class="add-to-compare-link" href="#">Compare</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="product list-view">
                                            <div class="media">
                                                <div class="media-left">
                                                    <a href="single-product.html">
                                                        <img class="wp-post-image" data-echo="assets/images/products/3.jpg" src="assets/images/blank.gif" alt="">
                                                    </a>
                                                </div>
                                                <div class="media-body media-middle">
                                                    <div class="row">
                                                        <div class="col-xs-12">
                                                            <span class="loop-product-categories"><a rel="tag" href="#">Tablets</a></span><a href="single-product.html"><h3>Tablet Air 3 WiFi 64GB  Gold</h3>
                                                                <div class="product-rating">
                                                                    <div title="Rated 4 out of 5" class="star-rating"><span style="width:80%"><strong class="rating">4</strong> out of 5</span></div> (3)
                                                                </div>
                                                                <div class="product-short-description">
                                                                    <ul style="padding-left: 18px;">
                                                                        <li>4.5 inch HD Screen</li>
                                                                        <li>Android 4.4 KitKat OS</li>
                                                                        <li>1.4 GHz Quad Core&trade; Processor</li>
                                                                        <li>20 MP front Camera</li>
                                                                    </ul>
                                                                </div>
                                                            </a>
                                                        </div>
                                                        <div class="col-xs-12">

                                                            <div class="availability in-stock">Availablity: <span>In stock</span></div>

                                                            <span class="price"><span class="electro-price"><span class="amount">$629.00</span></span></span>
                                                            <a class="button product_type_simple add_to_cart_button ajax_add_to_cart" data-product_sku="5487FB8/35" data-product_id="2706" data-quantity="1" href="single-product.html" rel="nofollow">Add to cart</a>
                                                            <div class="hover-area">
                                                                <div class="action-buttons">
                                                                    <div class="yith-wcwl-add-to-wishlist add-to-wishlist-2706">
                                                                        <a class="add_to_wishlist" data-product-type="simple" data-product-id="2706" rel="nofollow" href="#">Wishlist</a>

                                                                        <div style="display:none;" class="yith-wcwl-wishlistaddedbrowse hide">
                                                                            <span class="feedback">Product added!</span>
                                                                            <a rel="nofollow" href="#">Wishlist</a>
                                                                        </div>

                                                                        <div style="display:none" class="yith-wcwl-wishlistexistsbrowse hide">
                                                                            <span class="feedback">The product is already in the wishlist!</span>
                                                                            <a rel="nofollow" href="#">Wishlist</a>
                                                                        </div>

                                                                        <div style="clear:both"></div>
                                                                        <div class="yith-wcwl-wishlistaddresponse"></div>

                                                                    </div>
                                                                    <div class="clear"></div>
                                                                    <a data-product_id="2706" class="add-to-compare-link" href="#">Compare</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="product list-view">
                                            <div class="media">
                                                <div class="media-left">
                                                    <a href="single-product.html">
                                                        <img class="wp-post-image" data-echo="assets/images/products/4.jpg" src="assets/images/blank.gif" alt="">
                                                    </a>
                                                </div>
                                                <div class="media-body media-middle">
                                                    <div class="row">
                                                        <div class="col-xs-12">
                                                            <span class="loop-product-categories"><a rel="tag" href="#">Tablets</a></span><a href="single-product.html"><h3>Tablet Air 3 WiFi 64GB  Gold</h3>
                                                                <div class="product-rating">
                                                                    <div title="Rated 4 out of 5" class="star-rating"><span style="width:80%"><strong class="rating">4</strong> out of 5</span></div> (3)
                                                                </div>
                                                                <div class="product-short-description">
                                                                    <ul style="padding-left: 18px;">
                                                                        <li>4.5 inch HD Screen</li>
                                                                        <li>Android 4.4 KitKat OS</li>
                                                                        <li>1.4 GHz Quad Core&trade; Processor</li>
                                                                        <li>20 MP front Camera</li>
                                                                    </ul>
                                                                </div>
                                                            </a>
                                                        </div>
                                                        <div class="col-xs-12">

                                                            <div class="availability in-stock">Availablity: <span>In stock</span></div>

                                                            <span class="price"><span class="electro-price"><span class="amount">$629.00</span></span></span>
                                                            <a class="button product_type_simple add_to_cart_button ajax_add_to_cart" data-product_sku="5487FB8/35" data-product_id="2706" data-quantity="1" href="single-product.html" rel="nofollow">Add to cart</a>
                                                            <div class="hover-area">
                                                                <div class="action-buttons">
                                                                    <div class="yith-wcwl-add-to-wishlist add-to-wishlist-2706">
                                                                        <a class="add_to_wishlist" data-product-type="simple" data-product-id="2706" rel="nofollow" href="#">Wishlist</a>

                                                                        <div style="display:none;" class="yith-wcwl-wishlistaddedbrowse hide">
                                                                            <span class="feedback">Product added!</span>
                                                                            <a rel="nofollow" href="#">Wishlist</a>
                                                                        </div>

                                                                        <div style="display:none" class="yith-wcwl-wishlistexistsbrowse hide">
                                                                            <span class="feedback">The product is already in the wishlist!</span>
                                                                            <a rel="nofollow" href="#">Wishlist</a>
                                                                        </div>

                                                                        <div style="clear:both"></div>
                                                                        <div class="yith-wcwl-wishlistaddresponse"></div>

                                                                    </div>
                                                                    <div class="clear"></div>
                                                                    <a data-product_id="2706" class="add-to-compare-link" href="#">Compare</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="product list-view">
                                            <div class="media">
                                                <div class="media-left">
                                                    <a href="single-product.html">
                                                        <img class="wp-post-image" data-echo="assets/images/products/5.jpg" src="assets/images/blank.gif" alt="">
                                                    </a>
                                                </div>
                                                <div class="media-body media-middle">
                                                    <div class="row">
                                                        <div class="col-xs-12">
                                                            <span class="loop-product-categories"><a rel="tag" href="#">Tablets</a></span><a href="single-product.html"><h3>Tablet Air 3 WiFi 64GB  Gold</h3>
                                                                <div class="product-rating">
                                                                    <div title="Rated 4 out of 5" class="star-rating"><span style="width:80%"><strong class="rating">4</strong> out of 5</span></div> (3)
                                                                </div>
                                                                <div class="product-short-description">
                                                                    <ul style="padding-left: 18px;">
                                                                        <li>4.5 inch HD Screen</li>
                                                                        <li>Android 4.4 KitKat OS</li>
                                                                        <li>1.4 GHz Quad Core&trade; Processor</li>
                                                                        <li>20 MP front Camera</li>
                                                                    </ul>
                                                                </div>
                                                            </a>
                                                        </div>
                                                        <div class="col-xs-12">

                                                            <div class="availability in-stock">Availablity: <span>In stock</span></div>

                                                            <span class="price"><span class="electro-price"><span class="amount">$629.00</span></span></span>
                                                            <a class="button product_type_simple add_to_cart_button ajax_add_to_cart" data-product_sku="5487FB8/35" data-product_id="2706" data-quantity="1" href="single-product.html" rel="nofollow">Add to cart</a>
                                                            <div class="hover-area">
                                                                <div class="action-buttons">
                                                                    <div class="yith-wcwl-add-to-wishlist add-to-wishlist-2706">
                                                                        <a class="add_to_wishlist" data-product-type="simple" data-product-id="2706" rel="nofollow" href="#">Wishlist</a>

                                                                        <div style="display:none;" class="yith-wcwl-wishlistaddedbrowse hide">
                                                                            <span class="feedback">Product added!</span>
                                                                            <a rel="nofollow" href="#">Wishlist</a>
                                                                        </div>

                                                                        <div style="display:none" class="yith-wcwl-wishlistexistsbrowse hide">
                                                                            <span class="feedback">The product is already in the wishlist!</span>
                                                                            <a rel="nofollow" href="#">Wishlist</a>
                                                                        </div>

                                                                        <div style="clear:both"></div>
                                                                        <div class="yith-wcwl-wishlistaddresponse"></div>

                                                                    </div>
                                                                    <div class="clear"></div>
                                                                    <a data-product_id="2706" class="add-to-compare-link" href="#">Compare</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="product list-view">
                                            <div class="media">
                                                <div class="media-left">
                                                    <a href="single-product.html">
                                                        <img class="wp-post-image" data-echo="assets/images/products/6.jpg" src="assets/images/blank.gif" alt="">
                                                    </a>
                                                </div>
                                                <div class="media-body media-middle">
                                                    <div class="row">
                                                        <div class="col-xs-12">
                                                            <span class="loop-product-categories"><a rel="tag" href="#">Tablets</a></span><a href="single-product.html"><h3>Tablet Air 3 WiFi 64GB  Gold</h3>
                                                                <div class="product-rating">
                                                                    <div title="Rated 4 out of 5" class="star-rating"><span style="width:80%"><strong class="rating">4</strong> out of 5</span></div> (3)
                                                                </div>
                                                                <div class="product-short-description">
                                                                    <ul style="padding-left: 18px;">
                                                                        <li>4.5 inch HD Screen</li>
                                                                        <li>Android 4.4 KitKat OS</li>
                                                                        <li>1.4 GHz Quad Core&trade; Processor</li>
                                                                        <li>20 MP front Camera</li>
                                                                    </ul>
                                                                </div>
                                                            </a>
                                                        </div>
                                                        <div class="col-xs-12">

                                                            <div class="availability in-stock">Availablity: <span>In stock</span></div>

                                                            <span class="price"><span class="electro-price"><span class="amount">$629.00</span></span></span>
                                                            <a class="button product_type_simple add_to_cart_button ajax_add_to_cart" data-product_sku="5487FB8/35" data-product_id="2706" data-quantity="1" href="single-product.html" rel="nofollow">Add to cart</a>
                                                            <div class="hover-area">
                                                                <div class="action-buttons">
                                                                    <div class="yith-wcwl-add-to-wishlist add-to-wishlist-2706">
                                                                        <a class="add_to_wishlist" data-product-type="simple" data-product-id="2706" rel="nofollow" href="#">Wishlist</a>

                                                                        <div style="display:none;" class="yith-wcwl-wishlistaddedbrowse hide">
                                                                            <span class="feedback">Product added!</span>
                                                                            <a rel="nofollow" href="#">Wishlist</a>
                                                                        </div>

                                                                        <div style="display:none" class="yith-wcwl-wishlistexistsbrowse hide">
                                                                            <span class="feedback">The product is already in the wishlist!</span>
                                                                            <a rel="nofollow" href="#">Wishlist</a>
                                                                        </div>

                                                                        <div style="clear:both"></div>
                                                                        <div class="yith-wcwl-wishlistaddresponse"></div>

                                                                    </div>
                                                                    <div class="clear"></div>
                                                                    <a data-product_id="2706" class="add-to-compare-link" href="#">Compare</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="product list-view">
                                            <div class="media">
                                                <div class="media-left">
                                                    <a href="single-product.html">
                                                        <img class="wp-post-image" data-echo="assets/images/products/4.jpg" src="assets/images/blank.gif" alt="">
                                                    </a>
                                                </div>
                                                <div class="media-body media-middle">
                                                    <div class="row">
                                                        <div class="col-xs-12">
                                                            <span class="loop-product-categories"><a rel="tag" href="#">Tablets</a></span><a href="single-product.html"><h3>Tablet Air 3 WiFi 64GB  Gold</h3>
                                                                <div class="product-rating">
                                                                    <div title="Rated 4 out of 5" class="star-rating"><span style="width:80%"><strong class="rating">4</strong> out of 5</span></div> (3)
                                                                </div>
                                                                <div class="product-short-description">
                                                                    <ul style="padding-left: 18px;">
                                                                        <li>4.5 inch HD Screen</li>
                                                                        <li>Android 4.4 KitKat OS</li>
                                                                        <li>1.4 GHz Quad Core&trade; Processor</li>
                                                                        <li>20 MP front Camera</li>
                                                                    </ul>
                                                                </div>
                                                            </a>
                                                        </div>
                                                        <div class="col-xs-12">

                                                            <div class="availability in-stock">Availablity: <span>In stock</span></div>

                                                            <span class="price"><span class="electro-price"><span class="amount">$629.00</span></span></span>
                                                            <a class="button product_type_simple add_to_cart_button ajax_add_to_cart" data-product_sku="5487FB8/35" data-product_id="2706" data-quantity="1" href="single-product.html" rel="nofollow">Add to cart</a>
                                                            <div class="hover-area">
                                                                <div class="action-buttons">
                                                                    <div class="yith-wcwl-add-to-wishlist add-to-wishlist-2706">
                                                                        <a class="add_to_wishlist" data-product-type="simple" data-product-id="2706" rel="nofollow" href="#">Wishlist</a>

                                                                        <div style="display:none;" class="yith-wcwl-wishlistaddedbrowse hide">
                                                                            <span class="feedback">Product added!</span>
                                                                            <a rel="nofollow" href="#">Wishlist</a>
                                                                        </div>

                                                                        <div style="display:none" class="yith-wcwl-wishlistexistsbrowse hide">
                                                                            <span class="feedback">The product is already in the wishlist!</span>
                                                                            <a rel="nofollow" href="#">Wishlist</a>
                                                                        </div>

                                                                        <div style="clear:both"></div>
                                                                        <div class="yith-wcwl-wishlistaddresponse"></div>

                                                                    </div>
                                                                    <div class="clear"></div>
                                                                    <a data-product_id="2706" class="add-to-compare-link" href="#">Compare</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="product list-view">
                                            <div class="media">
                                                <div class="media-left">
                                                    <a href="single-product.html">
                                                        <img class="wp-post-image" data-echo="assets/images/products/2.jpg" src="assets/images/blank.gif" alt="">
                                                    </a>
                                                </div>
                                                <div class="media-body media-middle">
                                                    <div class="row">
                                                        <div class="col-xs-12">
                                                            <span class="loop-product-categories"><a rel="tag" href="#">Tablets</a></span><a href="single-product.html"><h3>Tablet Air 3 WiFi 64GB  Gold</h3>
                                                                <div class="product-rating">
                                                                    <div title="Rated 4 out of 5" class="star-rating"><span style="width:80%"><strong class="rating">4</strong> out of 5</span></div> (3)
                                                                </div>
                                                                <div class="product-short-description">
                                                                    <ul style="padding-left: 18px;">
                                                                        <li>4.5 inch HD Screen</li>
                                                                        <li>Android 4.4 KitKat OS</li>
                                                                        <li>1.4 GHz Quad Core&trade; Processor</li>
                                                                        <li>20 MP front Camera</li>
                                                                    </ul>
                                                                </div>
                                                            </a>
                                                        </div>
                                                        <div class="col-xs-12">

                                                            <div class="availability in-stock">Availablity: <span>In stock</span></div>

                                                            <span class="price"><span class="electro-price"><span class="amount">$629.00</span></span></span>
                                                            <a class="button product_type_simple add_to_cart_button ajax_add_to_cart" data-product_sku="5487FB8/35" data-product_id="2706" data-quantity="1" href="single-product.html" rel="nofollow">Add to cart</a>
                                                            <div class="hover-area">
                                                                <div class="action-buttons">
                                                                    <div class="yith-wcwl-add-to-wishlist add-to-wishlist-2706">
                                                                        <a class="add_to_wishlist" data-product-type="simple" data-product-id="2706" rel="nofollow" href="#">Wishlist</a>

                                                                        <div style="display:none;" class="yith-wcwl-wishlistaddedbrowse hide">
                                                                            <span class="feedback">Product added!</span>
                                                                            <a rel="nofollow" href="#">Wishlist</a>
                                                                        </div>

                                                                        <div style="display:none" class="yith-wcwl-wishlistexistsbrowse hide">
                                                                            <span class="feedback">The product is already in the wishlist!</span>
                                                                            <a rel="nofollow" href="#">Wishlist</a>
                                                                        </div>

                                                                        <div style="clear:both"></div>
                                                                        <div class="yith-wcwl-wishlistaddresponse"></div>

                                                                    </div>
                                                                    <div class="clear"></div>
                                                                    <a data-product_id="2706" class="add-to-compare-link" href="#">Compare</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="product list-view">
                                            <div class="media">
                                                <div class="media-left">
                                                    <a href="single-product.html">
                                                        <img class="wp-post-image" data-echo="assets/images/products/5.jpg" src="assets/images/blank.gif" alt="">
                                                    </a>
                                                </div>
                                                <div class="media-body media-middle">
                                                    <div class="row">
                                                        <div class="col-xs-12">
                                                            <span class="loop-product-categories"><a rel="tag" href="#">Tablets</a></span><a href="single-product.html"><h3>Tablet Air 3 WiFi 64GB  Gold</h3>
                                                                <div class="product-rating">
                                                                    <div title="Rated 4 out of 5" class="star-rating"><span style="width:80%"><strong class="rating">4</strong> out of 5</span></div> (3)
                                                                </div>
                                                                <div class="product-short-description">
                                                                    <ul style="padding-left: 18px;">
                                                                        <li>4.5 inch HD Screen</li>
                                                                        <li>Android 4.4 KitKat OS</li>
                                                                        <li>1.4 GHz Quad Core&trade; Processor</li>
                                                                        <li>20 MP front Camera</li>
                                                                    </ul>
                                                                </div>
                                                            </a>
                                                        </div>
                                                        <div class="col-xs-12">

                                                            <div class="availability in-stock">Availablity: <span>In stock</span></div>

                                                            <span class="price"><span class="electro-price"><span class="amount">$629.00</span></span></span>
                                                            <a class="button product_type_simple add_to_cart_button ajax_add_to_cart" data-product_sku="5487FB8/35" data-product_id="2706" data-quantity="1" href="single-product.html" rel="nofollow">Add to cart</a>
                                                            <div class="hover-area">
                                                                <div class="action-buttons">
                                                                    <div class="yith-wcwl-add-to-wishlist add-to-wishlist-2706">
                                                                        <a class="add_to_wishlist" data-product-type="simple" data-product-id="2706" rel="nofollow" href="#">Wishlist</a>

                                                                        <div style="display:none;" class="yith-wcwl-wishlistaddedbrowse hide">
                                                                            <span class="feedback">Product added!</span>
                                                                            <a rel="nofollow" href="#">Wishlist</a>
                                                                        </div>

                                                                        <div style="display:none" class="yith-wcwl-wishlistexistsbrowse hide">
                                                                            <span class="feedback">The product is already in the wishlist!</span>
                                                                            <a rel="nofollow" href="#">Wishlist</a>
                                                                        </div>

                                                                        <div style="clear:both"></div>
                                                                        <div class="yith-wcwl-wishlistaddresponse"></div>

                                                                    </div>
                                                                    <div class="clear"></div>
                                                                    <a data-product_id="2706" class="add-to-compare-link" href="#">Compare</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="product list-view">
                                            <div class="media">
                                                <div class="media-left">
                                                    <a href="single-product.html">
                                                        <img class="wp-post-image" data-echo="assets/images/products/1.jpg" src="assets/images/blank.gif" alt="">
                                                    </a>
                                                </div>
                                                <div class="media-body media-middle">
                                                    <div class="row">
                                                        <div class="col-xs-12">
                                                            <span class="loop-product-categories"><a rel="tag" href="#">Tablets</a></span><a href="single-product.html"><h3>Tablet Air 3 WiFi 64GB  Gold</h3>
                                                                <div class="product-rating">
                                                                    <div title="Rated 4 out of 5" class="star-rating"><span style="width:80%"><strong class="rating">4</strong> out of 5</span></div> (3)
                                                                </div>
                                                                <div class="product-short-description">
                                                                    <ul style="padding-left: 18px;">
                                                                        <li>4.5 inch HD Screen</li>
                                                                        <li>Android 4.4 KitKat OS</li>
                                                                        <li>1.4 GHz Quad Core&trade; Processor</li>
                                                                        <li>20 MP front Camera</li>
                                                                    </ul>
                                                                </div>
                                                            </a>
                                                        </div>
                                                        <div class="col-xs-12">

                                                            <div class="availability in-stock">Availablity: <span>In stock</span></div>

                                                            <span class="price"><span class="electro-price"><span class="amount">$629.00</span></span></span>
                                                            <a class="button product_type_simple add_to_cart_button ajax_add_to_cart" data-product_sku="5487FB8/35" data-product_id="2706" data-quantity="1" href="single-product.html" rel="nofollow">Add to cart</a>
                                                            <div class="hover-area">
                                                                <div class="action-buttons">
                                                                    <div class="yith-wcwl-add-to-wishlist add-to-wishlist-2706">
                                                                        <a class="add_to_wishlist" data-product-type="simple" data-product-id="2706" rel="nofollow" href="#">Wishlist</a>

                                                                        <div style="display:none;" class="yith-wcwl-wishlistaddedbrowse hide">
                                                                            <span class="feedback">Product added!</span>
                                                                            <a rel="nofollow" href="#">Wishlist</a>
                                                                        </div>

                                                                        <div style="display:none" class="yith-wcwl-wishlistexistsbrowse hide">
                                                                            <span class="feedback">The product is already in the wishlist!</span>
                                                                            <a rel="nofollow" href="#">Wishlist</a>
                                                                        </div>

                                                                        <div style="clear:both"></div>
                                                                        <div class="yith-wcwl-wishlistaddresponse"></div>

                                                                    </div>
                                                                    <div class="clear"></div>
                                                                    <a data-product_id="2706" class="add-to-compare-link" href="#">Compare</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="product list-view">
                                            <div class="media">
                                                <div class="media-left">
                                                    <a href="single-product.html">
                                                        <img class="wp-post-image" data-echo="assets/images/products/6.jpg" src="assets/images/blank.gif" alt="">
                                                    </a>
                                                </div>
                                                <div class="media-body media-middle">
                                                    <div class="row">
                                                        <div class="col-xs-12">
                                                            <span class="loop-product-categories"><a rel="tag" href="#">Tablets</a></span><a href="single-product.html"><h3>Tablet Air 3 WiFi 64GB  Gold</h3>
                                                                <div class="product-rating">
                                                                    <div title="Rated 4 out of 5" class="star-rating"><span style="width:80%"><strong class="rating">4</strong> out of 5</span></div> (3)
                                                                </div>
                                                                <div class="product-short-description">
                                                                    <ul style="padding-left: 18px;">
                                                                        <li>4.5 inch HD Screen</li>
                                                                        <li>Android 4.4 KitKat OS</li>
                                                                        <li>1.4 GHz Quad Core&trade; Processor</li>
                                                                        <li>20 MP front Camera</li>
                                                                    </ul>
                                                                </div>
                                                            </a>
                                                        </div>
                                                        <div class="col-xs-12">

                                                            <div class="availability in-stock">Availablity: <span>In stock</span></div>

                                                            <span class="price"><span class="electro-price"><span class="amount">$629.00</span></span></span>
                                                            <a class="button product_type_simple add_to_cart_button ajax_add_to_cart" data-product_sku="5487FB8/35" data-product_id="2706" data-quantity="1" href="single-product.html" rel="nofollow">Add to cart</a>
                                                            <div class="hover-area">
                                                                <div class="action-buttons">
                                                                    <div class="yith-wcwl-add-to-wishlist add-to-wishlist-2706">
                                                                        <a class="add_to_wishlist" data-product-type="simple" data-product-id="2706" rel="nofollow" href="#">Wishlist</a>

                                                                        <div style="display:none;" class="yith-wcwl-wishlistaddedbrowse hide">
                                                                            <span class="feedback">Product added!</span>
                                                                            <a rel="nofollow" href="#">Wishlist</a>
                                                                        </div>

                                                                        <div style="display:none" class="yith-wcwl-wishlistexistsbrowse hide">
                                                                            <span class="feedback">The product is already in the wishlist!</span>
                                                                            <a rel="nofollow" href="#">Wishlist</a>
                                                                        </div>

                                                                        <div style="clear:both"></div>
                                                                        <div class="yith-wcwl-wishlistaddresponse"></div>

                                                                    </div>
                                                                    <div class="clear"></div>
                                                                    <a data-product_id="2706" class="add-to-compare-link" href="#">Compare</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="product list-view">
                                            <div class="media">
                                                <div class="media-left">
                                                    <a href="single-product.html">
                                                        <img class="wp-post-image" data-echo="assets/images/products/3.jpg" src="assets/images/blank.gif" alt="">
                                                    </a>
                                                </div>
                                                <div class="media-body media-middle">
                                                    <div class="row">
                                                        <div class="col-xs-12">
                                                            <span class="loop-product-categories"><a rel="tag" href="#">Tablets</a></span><a href="single-product.html"><h3>Tablet Air 3 WiFi 64GB  Gold</h3>
                                                                <div class="product-rating">
                                                                    <div title="Rated 4 out of 5" class="star-rating"><span style="width:80%"><strong class="rating">4</strong> out of 5</span></div> (3)
                                                                </div>
                                                                <div class="product-short-description">
                                                                    <ul style="padding-left: 18px;">
                                                                        <li>4.5 inch HD Screen</li>
                                                                        <li>Android 4.4 KitKat OS</li>
                                                                        <li>1.4 GHz Quad Core&trade; Processor</li>
                                                                        <li>20 MP front Camera</li>
                                                                    </ul>
                                                                </div>
                                                            </a>
                                                        </div>
                                                        <div class="col-xs-12">

                                                            <div class="availability in-stock">Availablity: <span>In stock</span></div>

                                                            <span class="price"><span class="electro-price"><span class="amount">$629.00</span></span></span>
                                                            <a class="button product_type_simple add_to_cart_button ajax_add_to_cart" data-product_sku="5487FB8/35" data-product_id="2706" data-quantity="1" href="single-product.html" rel="nofollow">Add to cart</a>
                                                            <div class="hover-area">
                                                                <div class="action-buttons">
                                                                    <div class="yith-wcwl-add-to-wishlist add-to-wishlist-2706">
                                                                        <a class="add_to_wishlist" data-product-type="simple" data-product-id="2706" rel="nofollow" href="#">Wishlist</a>

                                                                        <div style="display:none;" class="yith-wcwl-wishlistaddedbrowse hide">
                                                                            <span class="feedback">Product added!</span>
                                                                            <a rel="nofollow" href="#">Wishlist</a>
                                                                        </div>

                                                                        <div style="display:none" class="yith-wcwl-wishlistexistsbrowse hide">
                                                                            <span class="feedback">The product is already in the wishlist!</span>
                                                                            <a rel="nofollow" href="#">Wishlist</a>
                                                                        </div>

                                                                        <div style="clear:both"></div>
                                                                        <div class="yith-wcwl-wishlistaddresponse"></div>

                                                                    </div>
                                                                    <div class="clear"></div>
                                                                    <a data-product_id="2706" class="add-to-compare-link" href="#">Compare</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="product list-view">
                                            <div class="media">
                                                <div class="media-left">
                                                    <a href="single-product.html">
                                                        <img class="wp-post-image" data-echo="assets/images/products/5.jpg" src="assets/images/blank.gif" alt="">
                                                    </a>
                                                </div>
                                                <div class="media-body media-middle">
                                                    <div class="row">
                                                        <div class="col-xs-12">
                                                            <span class="loop-product-categories"><a rel="tag" href="#">Tablets</a></span><a href="single-product.html"><h3>Tablet Air 3 WiFi 64GB  Gold</h3>
                                                                <div class="product-rating">
                                                                    <div title="Rated 4 out of 5" class="star-rating"><span style="width:80%"><strong class="rating">4</strong> out of 5</span></div> (3)
                                                                </div>
                                                                <div class="product-short-description">
                                                                    <ul style="padding-left: 18px;">
                                                                        <li>4.5 inch HD Screen</li>
                                                                        <li>Android 4.4 KitKat OS</li>
                                                                        <li>1.4 GHz Quad Core&trade; Processor</li>
                                                                        <li>20 MP front Camera</li>
                                                                    </ul>
                                                                </div>
                                                            </a>
                                                        </div>
                                                        <div class="col-xs-12">

                                                            <div class="availability in-stock">Availablity: <span>In stock</span></div>

                                                            <span class="price"><span class="electro-price"><span class="amount">$629.00</span></span></span>
                                                            <a class="button product_type_simple add_to_cart_button ajax_add_to_cart" data-product_sku="5487FB8/35" data-product_id="2706" data-quantity="1" href="single-product.html" rel="nofollow">Add to cart</a>
                                                            <div class="hover-area">
                                                                <div class="action-buttons">
                                                                    <div class="yith-wcwl-add-to-wishlist add-to-wishlist-2706">
                                                                        <a class="add_to_wishlist" data-product-type="simple" data-product-id="2706" rel="nofollow" href="#">Wishlist</a>

                                                                        <div style="display:none;" class="yith-wcwl-wishlistaddedbrowse hide">
                                                                            <span class="feedback">Product added!</span>
                                                                            <a rel="nofollow" href="#">Wishlist</a>
                                                                        </div>

                                                                        <div style="display:none" class="yith-wcwl-wishlistexistsbrowse hide">
                                                                            <span class="feedback">The product is already in the wishlist!</span>
                                                                            <a rel="nofollow" href="#">Wishlist</a>
                                                                        </div>

                                                                        <div style="clear:both"></div>
                                                                        <div class="yith-wcwl-wishlistaddresponse"></div>

                                                                    </div>
                                                                    <div class="clear"></div>
                                                                    <a data-product_id="2706" class="add-to-compare-link" href="#">Compare</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="product list-view">
                                            <div class="media">
                                                <div class="media-left">
                                                    <a href="single-product.html">
                                                        <img class="wp-post-image" data-echo="assets/images/products/4.jpg" src="assets/images/blank.gif" alt="">
                                                    </a>
                                                </div>
                                                <div class="media-body media-middle">
                                                    <div class="row">
                                                        <div class="col-xs-12">
                                                            <span class="loop-product-categories"><a rel="tag" href="#">Tablets</a></span><a href="single-product.html"><h3>Tablet Air 3 WiFi 64GB  Gold</h3>
                                                                <div class="product-rating">
                                                                    <div title="Rated 4 out of 5" class="star-rating"><span style="width:80%"><strong class="rating">4</strong> out of 5</span></div> (3)
                                                                </div>
                                                                <div class="product-short-description">
                                                                    <ul style="padding-left: 18px;">
                                                                        <li>4.5 inch HD Screen</li>
                                                                        <li>Android 4.4 KitKat OS</li>
                                                                        <li>1.4 GHz Quad Core&trade; Processor</li>
                                                                        <li>20 MP front Camera</li>
                                                                    </ul>
                                                                </div>
                                                            </a>
                                                        </div>
                                                        <div class="col-xs-12">

                                                            <div class="availability in-stock">Availablity: <span>In stock</span></div>

                                                            <span class="price"><span class="electro-price"><span class="amount">$629.00</span></span></span>
                                                            <a class="button product_type_simple add_to_cart_button ajax_add_to_cart" data-product_sku="5487FB8/35" data-product_id="2706" data-quantity="1" href="single-product.html" rel="nofollow">Add to cart</a>
                                                            <div class="hover-area">
                                                                <div class="action-buttons">
                                                                    <div class="yith-wcwl-add-to-wishlist add-to-wishlist-2706">
                                                                        <a class="add_to_wishlist" data-product-type="simple" data-product-id="2706" rel="nofollow" href="#">Wishlist</a>

                                                                        <div style="display:none;" class="yith-wcwl-wishlistaddedbrowse hide">
                                                                            <span class="feedback">Product added!</span>
                                                                            <a rel="nofollow" href="#">Wishlist</a>
                                                                        </div>

                                                                        <div style="display:none" class="yith-wcwl-wishlistexistsbrowse hide">
                                                                            <span class="feedback">The product is already in the wishlist!</span>
                                                                            <a rel="nofollow" href="#">Wishlist</a>
                                                                        </div>

                                                                        <div style="clear:both"></div>
                                                                        <div class="yith-wcwl-wishlistaddresponse"></div>

                                                                    </div>
                                                                    <div class="clear"></div>
                                                                    <a data-product_id="2706" class="add-to-compare-link" href="#">Compare</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="product list-view">
                                            <div class="media">
                                                <div class="media-left">
                                                    <a href="single-product.html">
                                                        <img class="wp-post-image" data-echo="assets/images/products/2.jpg" src="assets/images/blank.gif" alt="">
                                                    </a>
                                                </div>
                                                <div class="media-body media-middle">
                                                    <div class="row">
                                                        <div class="col-xs-12">
                                                            <span class="loop-product-categories"><a rel="tag" href="#">Tablets</a></span><a href="single-product.html"><h3>Tablet Air 3 WiFi 64GB  Gold</h3>
                                                                <div class="product-rating">
                                                                    <div title="Rated 4 out of 5" class="star-rating"><span style="width:80%"><strong class="rating">4</strong> out of 5</span></div> (3)
                                                                </div>
                                                                <div class="product-short-description">
                                                                    <ul style="padding-left: 18px;">
                                                                        <li>4.5 inch HD Screen</li>
                                                                        <li>Android 4.4 KitKat OS</li>
                                                                        <li>1.4 GHz Quad Core&trade; Processor</li>
                                                                        <li>20 MP front Camera</li>
                                                                    </ul>
                                                                </div>
                                                            </a>
                                                        </div>
                                                        <div class="col-xs-12">

                                                            <div class="availability in-stock">Availablity: <span>In stock</span></div>

                                                            <span class="price"><span class="electro-price"><span class="amount">$629.00</span></span></span>
                                                            <a class="button product_type_simple add_to_cart_button ajax_add_to_cart" data-product_sku="5487FB8/35" data-product_id="2706" data-quantity="1" href="single-product.html" rel="nofollow">Add to cart</a>
                                                            <div class="hover-area">
                                                                <div class="action-buttons">
                                                                    <div class="yith-wcwl-add-to-wishlist add-to-wishlist-2706">
                                                                        <a class="add_to_wishlist" data-product-type="simple" data-product-id="2706" rel="nofollow" href="#">Wishlist</a>

                                                                        <div style="display:none;" class="yith-wcwl-wishlistaddedbrowse hide">
                                                                            <span class="feedback">Product added!</span>
                                                                            <a rel="nofollow" href="#">Wishlist</a>
                                                                        </div>

                                                                        <div style="display:none" class="yith-wcwl-wishlistexistsbrowse hide">
                                                                            <span class="feedback">The product is already in the wishlist!</span>
                                                                            <a rel="nofollow" href="#">Wishlist</a>
                                                                        </div>

                                                                        <div style="clear:both"></div>
                                                                        <div class="yith-wcwl-wishlistaddresponse"></div>

                                                                    </div>
                                                                    <div class="clear"></div>
                                                                    <a data-product_id="2706" class="add-to-compare-link" href="#">Compare</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div role="tabpanel" class="tab-pane" id="list-view-small" aria-expanded="true">

                                    <ul class="products columns-3">
                                        <li class="product list-view list-view-small">
                                            <div class="media">
                                                <div class="media-left">
                                                    <a href="single-product.html">
                                                        <img class="wp-post-image" data-echo="assets/images/products/1.jpg" src="assets/images/blank.gif" alt="">
                                                    </a>
                                                </div>
                                                <div class="media-body media-middle">
                                                    <div class="row">
                                                        <div class="col-xs-12">
                                                            <span class="loop-product-categories"><a rel="tag" href="product-category.html">Smartphones</a></span><a href="product-category.html"><h3>Ultrabook UX605CA-FC050T</h3>
                                                                <div class="product-short-description">
                                                                    <ul style="padding-left: 18px;">
                                                                        <li>4.5 inch HD Screen</li>
                                                                        <li>Android 4.4 KitKat OS</li>
                                                                        <li>1.4 GHz Quad Core&trade; Processor</li>
                                                                        <li>20 MP front Camera</li>
                                                                    </ul>
                                                                </div>
                                                                <div class="product-rating">
                                                                    <div title="Rated 4 out of 5" class="star-rating"><span style="width:80%"><strong class="rating">4</strong> out of 5</span></div> (3)
                                                                </div>
                                                            </a>
                                                        </div>
                                                        <div class="col-xs-12">
                                                            <div class="price-add-to-cart">
                                                                <span class="price"><span class="electro-price"><span class="amount">$1,218.00</span></span></span>
                                                                <a class="button add_to_cart_button" href="cart.html" rel="nofollow">Add to cart</a>
                                                            </div><!-- /.price-add-to-cart -->

                                                            <div class="hover-area">
                                                                <div class="action-buttons">
                                                                    <a href="#" rel="nofollow" class="add_to_wishlist">Wishlist</a>
                                                                    <a href="compare.html" class="add-to-compare-link">Compare</a>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="product list-view list-view-small">
                                            <div class="media">
                                                <div class="media-left">
                                                    <a href="single-product.html">
                                                        <img class="wp-post-image" data-echo="assets/images/products/2.jpg" src="assets/images/blank.gif" alt="">
                                                    </a>
                                                </div>
                                                <div class="media-body media-middle">
                                                    <div class="row">
                                                        <div class="col-xs-12">
                                                            <span class="loop-product-categories"><a rel="tag" href="product-category.html">Smartphones</a></span><a href="product-category.html"><h3>Ultrabook UX605CA-FC050T</h3>
                                                                <div class="product-short-description">
                                                                    <ul style="padding-left: 18px;">
                                                                        <li>4.5 inch HD Screen</li>
                                                                        <li>Android 4.4 KitKat OS</li>
                                                                        <li>1.4 GHz Quad Core&trade; Processor</li>
                                                                        <li>20 MP front Camera</li>
                                                                    </ul>
                                                                </div>
                                                                <div class="product-rating">
                                                                    <div title="Rated 4 out of 5" class="star-rating"><span style="width:80%"><strong class="rating">4</strong> out of 5</span></div> (3)
                                                                </div>
                                                            </a>
                                                        </div>
                                                        <div class="col-xs-12">
                                                            <div class="price-add-to-cart">
                                                                <span class="price"><span class="electro-price"><span class="amount">$1,218.00</span></span></span>
                                                                <a class="button add_to_cart_button" href="cart.html" rel="nofollow">Add to cart</a>
                                                            </div><!-- /.price-add-to-cart -->

                                                            <div class="hover-area">
                                                                <div class="action-buttons">
                                                                    <a href="#" rel="nofollow" class="add_to_wishlist">Wishlist</a>
                                                                    <a href="compare.html" class="add-to-compare-link">Compare</a>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="product list-view list-view-small">
                                            <div class="media">
                                                <div class="media-left">
                                                    <a href="single-product.html">
                                                        <img class="wp-post-image" data-echo="assets/images/products/3.jpg" src="assets/images/blank.gif" alt="">
                                                    </a>
                                                </div>
                                                <div class="media-body media-middle">
                                                    <div class="row">
                                                        <div class="col-xs-12">
                                                            <span class="loop-product-categories"><a rel="tag" href="product-category.html">Smartphones</a></span><a href="product-category.html"><h3>Ultrabook UX605CA-FC050T</h3>
                                                                <div class="product-short-description">
                                                                    <ul style="padding-left: 18px;">
                                                                        <li>4.5 inch HD Screen</li>
                                                                        <li>Android 4.4 KitKat OS</li>
                                                                        <li>1.4 GHz Quad Core&trade; Processor</li>
                                                                        <li>20 MP front Camera</li>
                                                                    </ul>
                                                                </div>
                                                                <div class="product-rating">
                                                                    <div title="Rated 4 out of 5" class="star-rating"><span style="width:80%"><strong class="rating">4</strong> out of 5</span></div> (3)
                                                                </div>
                                                            </a>
                                                        </div>
                                                        <div class="col-xs-12">
                                                            <div class="price-add-to-cart">
                                                                <span class="price"><span class="electro-price"><span class="amount">$1,218.00</span></span></span>
                                                                <a class="button add_to_cart_button" href="cart.html" rel="nofollow">Add to cart</a>
                                                            </div><!-- /.price-add-to-cart -->

                                                            <div class="hover-area">
                                                                <div class="action-buttons">
                                                                    <a href="#" rel="nofollow" class="add_to_wishlist">Wishlist</a>
                                                                    <a href="compare.html" class="add-to-compare-link">Compare</a>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="product list-view list-view-small">
                                            <div class="media">
                                                <div class="media-left">
                                                    <a href="single-product.html">
                                                        <img class="wp-post-image" data-echo="assets/images/products/4.jpg" src="assets/images/blank.gif" alt="">
                                                    </a>
                                                </div>
                                                <div class="media-body media-middle">
                                                    <div class="row">
                                                        <div class="col-xs-12">
                                                            <span class="loop-product-categories"><a rel="tag" href="product-category.html">Smartphones</a></span><a href="product-category.html"><h3>Ultrabook UX605CA-FC050T</h3>
                                                                <div class="product-short-description">
                                                                    <ul style="padding-left: 18px;">
                                                                        <li>4.5 inch HD Screen</li>
                                                                        <li>Android 4.4 KitKat OS</li>
                                                                        <li>1.4 GHz Quad Core&trade; Processor</li>
                                                                        <li>20 MP front Camera</li>
                                                                    </ul>
                                                                </div>
                                                                <div class="product-rating">
                                                                    <div title="Rated 4 out of 5" class="star-rating"><span style="width:80%"><strong class="rating">4</strong> out of 5</span></div> (3)
                                                                </div>
                                                            </a>
                                                        </div>
                                                        <div class="col-xs-12">
                                                            <div class="price-add-to-cart">
                                                                <span class="price"><span class="electro-price"><span class="amount">$1,218.00</span></span></span>
                                                                <a class="button add_to_cart_button" href="cart.html" rel="nofollow">Add to cart</a>
                                                            </div><!-- /.price-add-to-cart -->

                                                            <div class="hover-area">
                                                                <div class="action-buttons">
                                                                    <a href="#" rel="nofollow" class="add_to_wishlist">Wishlist</a>
                                                                    <a href="compare.html" class="add-to-compare-link">Compare</a>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="product list-view list-view-small">
                                            <div class="media">
                                                <div class="media-left">
                                                    <a href="single-product.html">
                                                        <img class="wp-post-image" data-echo="assets/images/products/5.jpg" src="assets/images/blank.gif" alt="">
                                                    </a>
                                                </div>
                                                <div class="media-body media-middle">
                                                    <div class="row">
                                                        <div class="col-xs-12">
                                                            <span class="loop-product-categories"><a rel="tag" href="product-category.html">Smartphones</a></span><a href="product-category.html"><h3>Ultrabook UX605CA-FC050T</h3>
                                                                <div class="product-short-description">
                                                                    <ul style="padding-left: 18px;">
                                                                        <li>4.5 inch HD Screen</li>
                                                                        <li>Android 4.4 KitKat OS</li>
                                                                        <li>1.4 GHz Quad Core&trade; Processor</li>
                                                                        <li>20 MP front Camera</li>
                                                                    </ul>
                                                                </div>
                                                                <div class="product-rating">
                                                                    <div title="Rated 4 out of 5" class="star-rating"><span style="width:80%"><strong class="rating">4</strong> out of 5</span></div> (3)
                                                                </div>
                                                            </a>
                                                        </div>
                                                        <div class="col-xs-12">
                                                            <div class="price-add-to-cart">
                                                                <span class="price"><span class="electro-price"><span class="amount">$1,218.00</span></span></span>
                                                                <a class="button add_to_cart_button" href="cart.html" rel="nofollow">Add to cart</a>
                                                            </div><!-- /.price-add-to-cart -->

                                                            <div class="hover-area">
                                                                <div class="action-buttons">
                                                                    <a href="#" rel="nofollow" class="add_to_wishlist">Wishlist</a>
                                                                    <a href="compare.html" class="add-to-compare-link">Compare</a>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="product list-view list-view-small">
                                            <div class="media">
                                                <div class="media-left">
                                                    <a href="single-product.html">
                                                        <img class="wp-post-image" data-echo="assets/images/products/6.jpg" src="assets/images/blank.gif" alt="">
                                                    </a>
                                                </div>
                                                <div class="media-body media-middle">
                                                    <div class="row">
                                                        <div class="col-xs-12">
                                                            <span class="loop-product-categories"><a rel="tag" href="product-category.html">Smartphones</a></span><a href="product-category.html"><h3>Ultrabook UX605CA-FC050T</h3>
                                                                <div class="product-short-description">
                                                                    <ul style="padding-left: 18px;">
                                                                        <li>4.5 inch HD Screen</li>
                                                                        <li>Android 4.4 KitKat OS</li>
                                                                        <li>1.4 GHz Quad Core&trade; Processor</li>
                                                                        <li>20 MP front Camera</li>
                                                                    </ul>
                                                                </div>
                                                                <div class="product-rating">
                                                                    <div title="Rated 4 out of 5" class="star-rating"><span style="width:80%"><strong class="rating">4</strong> out of 5</span></div> (3)
                                                                </div>
                                                            </a>
                                                        </div>
                                                        <div class="col-xs-12">
                                                            <div class="price-add-to-cart">
                                                                <span class="price"><span class="electro-price"><span class="amount">$1,218.00</span></span></span>
                                                                <a class="button add_to_cart_button" href="cart.html" rel="nofollow">Add to cart</a>
                                                            </div><!-- /.price-add-to-cart -->

                                                            <div class="hover-area">
                                                                <div class="action-buttons">
                                                                    <a href="#" rel="nofollow" class="add_to_wishlist">Wishlist</a>
                                                                    <a href="compare.html" class="add-to-compare-link">Compare</a>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="product list-view list-view-small">
                                            <div class="media">
                                                <div class="media-left">
                                                    <a href="single-product.html">
                                                        <img class="wp-post-image" data-echo="assets/images/products/4.jpg" src="assets/images/blank.gif" alt="">
                                                    </a>
                                                </div>
                                                <div class="media-body media-middle">
                                                    <div class="row">
                                                        <div class="col-xs-12">
                                                            <span class="loop-product-categories"><a rel="tag" href="product-category.html">Smartphones</a></span><a href="product-category.html"><h3>Ultrabook UX605CA-FC050T</h3>
                                                                <div class="product-short-description">
                                                                    <ul style="padding-left: 18px;">
                                                                        <li>4.5 inch HD Screen</li>
                                                                        <li>Android 4.4 KitKat OS</li>
                                                                        <li>1.4 GHz Quad Core&trade; Processor</li>
                                                                        <li>20 MP front Camera</li>
                                                                    </ul>
                                                                </div>
                                                                <div class="product-rating">
                                                                    <div title="Rated 4 out of 5" class="star-rating"><span style="width:80%"><strong class="rating">4</strong> out of 5</span></div> (3)
                                                                </div>
                                                            </a>
                                                        </div>
                                                        <div class="col-xs-12">
                                                            <div class="price-add-to-cart">
                                                                <span class="price"><span class="electro-price"><span class="amount">$1,218.00</span></span></span>
                                                                <a class="button add_to_cart_button" href="cart.html" rel="nofollow">Add to cart</a>
                                                            </div><!-- /.price-add-to-cart -->

                                                            <div class="hover-area">
                                                                <div class="action-buttons">
                                                                    <a href="#" rel="nofollow" class="add_to_wishlist">Wishlist</a>
                                                                    <a href="compare.html" class="add-to-compare-link">Compare</a>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="product list-view list-view-small">
                                            <div class="media">
                                                <div class="media-left">
                                                    <a href="single-product.html">
                                                        <img class="wp-post-image" data-echo="assets/images/products/2.jpg" src="assets/images/blank.gif" alt="">
                                                    </a>
                                                </div>
                                                <div class="media-body media-middle">
                                                    <div class="row">
                                                        <div class="col-xs-12">
                                                            <span class="loop-product-categories"><a rel="tag" href="product-category.html">Smartphones</a></span><a href="product-category.html"><h3>Ultrabook UX605CA-FC050T</h3>
                                                                <div class="product-short-description">
                                                                    <ul style="padding-left: 18px;">
                                                                        <li>4.5 inch HD Screen</li>
                                                                        <li>Android 4.4 KitKat OS</li>
                                                                        <li>1.4 GHz Quad Core&trade; Processor</li>
                                                                        <li>20 MP front Camera</li>
                                                                    </ul>
                                                                </div>
                                                                <div class="product-rating">
                                                                    <div title="Rated 4 out of 5" class="star-rating"><span style="width:80%"><strong class="rating">4</strong> out of 5</span></div> (3)
                                                                </div>
                                                            </a>
                                                        </div>
                                                        <div class="col-xs-12">
                                                            <div class="price-add-to-cart">
                                                                <span class="price"><span class="electro-price"><span class="amount">$1,218.00</span></span></span>
                                                                <a class="button add_to_cart_button" href="cart.html" rel="nofollow">Add to cart</a>
                                                            </div><!-- /.price-add-to-cart -->

                                                            <div class="hover-area">
                                                                <div class="action-buttons">
                                                                    <a href="#" rel="nofollow" class="add_to_wishlist">Wishlist</a>
                                                                    <a href="compare.html" class="add-to-compare-link">Compare</a>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="product list-view list-view-small">
                                            <div class="media">
                                                <div class="media-left">
                                                    <a href="single-product.html">
                                                        <img class="wp-post-image" data-echo="assets/images/products/5.jpg" src="assets/images/blank.gif" alt="">
                                                    </a>
                                                </div>
                                                <div class="media-body media-middle">
                                                    <div class="row">
                                                        <div class="col-xs-12">
                                                            <span class="loop-product-categories"><a rel="tag" href="product-category.html">Smartphones</a></span><a href="product-category.html"><h3>Ultrabook UX605CA-FC050T</h3>
                                                                <div class="product-short-description">
                                                                    <ul style="padding-left: 18px;">
                                                                        <li>4.5 inch HD Screen</li>
                                                                        <li>Android 4.4 KitKat OS</li>
                                                                        <li>1.4 GHz Quad Core&trade; Processor</li>
                                                                        <li>20 MP front Camera</li>
                                                                    </ul>
                                                                </div>
                                                                <div class="product-rating">
                                                                    <div title="Rated 4 out of 5" class="star-rating"><span style="width:80%"><strong class="rating">4</strong> out of 5</span></div> (3)
                                                                </div>
                                                            </a>
                                                        </div>
                                                        <div class="col-xs-12">
                                                            <div class="price-add-to-cart">
                                                                <span class="price"><span class="electro-price"><span class="amount">$1,218.00</span></span></span>
                                                                <a class="button add_to_cart_button" href="cart.html" rel="nofollow">Add to cart</a>
                                                            </div><!-- /.price-add-to-cart -->

                                                            <div class="hover-area">
                                                                <div class="action-buttons">
                                                                    <a href="#" rel="nofollow" class="add_to_wishlist">Wishlist</a>
                                                                    <a href="compare.html" class="add-to-compare-link">Compare</a>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="product list-view list-view-small">
                                            <div class="media">
                                                <div class="media-left">
                                                    <a href="single-product.html">
                                                        <img class="wp-post-image" data-echo="assets/images/products/1.jpg" src="assets/images/blank.gif" alt="">
                                                    </a>
                                                </div>
                                                <div class="media-body media-middle">
                                                    <div class="row">
                                                        <div class="col-xs-12">
                                                            <span class="loop-product-categories"><a rel="tag" href="product-category.html">Smartphones</a></span><a href="product-category.html"><h3>Ultrabook UX605CA-FC050T</h3>
                                                                <div class="product-short-description">
                                                                    <ul style="padding-left: 18px;">
                                                                        <li>4.5 inch HD Screen</li>
                                                                        <li>Android 4.4 KitKat OS</li>
                                                                        <li>1.4 GHz Quad Core&trade; Processor</li>
                                                                        <li>20 MP front Camera</li>
                                                                    </ul>
                                                                </div>
                                                                <div class="product-rating">
                                                                    <div title="Rated 4 out of 5" class="star-rating"><span style="width:80%"><strong class="rating">4</strong> out of 5</span></div> (3)
                                                                </div>
                                                            </a>
                                                        </div>
                                                        <div class="col-xs-12">
                                                            <div class="price-add-to-cart">
                                                                <span class="price"><span class="electro-price"><span class="amount">$1,218.00</span></span></span>
                                                                <a class="button add_to_cart_button" href="cart.html" rel="nofollow">Add to cart</a>
                                                            </div><!-- /.price-add-to-cart -->

                                                            <div class="hover-area">
                                                                <div class="action-buttons">
                                                                    <a href="#" rel="nofollow" class="add_to_wishlist">Wishlist</a>
                                                                    <a href="compare.html" class="add-to-compare-link">Compare</a>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="product list-view list-view-small">
                                            <div class="media">
                                                <div class="media-left">
                                                    <a href="single-product.html">
                                                        <img class="wp-post-image" data-echo="assets/images/products/6.jpg" src="assets/images/blank.gif" alt="">
                                                    </a>
                                                </div>
                                                <div class="media-body media-middle">
                                                    <div class="row">
                                                        <div class="col-xs-12">
                                                            <span class="loop-product-categories"><a rel="tag" href="product-category.html">Smartphones</a></span><a href="product-category.html"><h3>Ultrabook UX605CA-FC050T</h3>
                                                                <div class="product-short-description">
                                                                    <ul style="padding-left: 18px;">
                                                                        <li>4.5 inch HD Screen</li>
                                                                        <li>Android 4.4 KitKat OS</li>
                                                                        <li>1.4 GHz Quad Core&trade; Processor</li>
                                                                        <li>20 MP front Camera</li>
                                                                    </ul>
                                                                </div>
                                                                <div class="product-rating">
                                                                    <div title="Rated 4 out of 5" class="star-rating"><span style="width:80%"><strong class="rating">4</strong> out of 5</span></div> (3)
                                                                </div>
                                                            </a>
                                                        </div>
                                                        <div class="col-xs-12">
                                                            <div class="price-add-to-cart">
                                                                <span class="price"><span class="electro-price"><span class="amount">$1,218.00</span></span></span>
                                                                <a class="button add_to_cart_button" href="cart.html" rel="nofollow">Add to cart</a>
                                                            </div><!-- /.price-add-to-cart -->

                                                            <div class="hover-area">
                                                                <div class="action-buttons">
                                                                    <a href="#" rel="nofollow" class="add_to_wishlist">Wishlist</a>
                                                                    <a href="compare.html" class="add-to-compare-link">Compare</a>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="product list-view list-view-small">
                                            <div class="media">
                                                <div class="media-left">
                                                    <a href="single-product.html">
                                                        <img class="wp-post-image" data-echo="assets/images/products/3.jpg" src="assets/images/blank.gif" alt="">
                                                    </a>
                                                </div>
                                                <div class="media-body media-middle">
                                                    <div class="row">
                                                        <div class="col-xs-12">
                                                            <span class="loop-product-categories"><a rel="tag" href="product-category.html">Smartphones</a></span><a href="product-category.html"><h3>Ultrabook UX605CA-FC050T</h3>
                                                                <div class="product-short-description">
                                                                    <ul style="padding-left: 18px;">
                                                                        <li>4.5 inch HD Screen</li>
                                                                        <li>Android 4.4 KitKat OS</li>
                                                                        <li>1.4 GHz Quad Core&trade; Processor</li>
                                                                        <li>20 MP front Camera</li>
                                                                    </ul>
                                                                </div>
                                                                <div class="product-rating">
                                                                    <div title="Rated 4 out of 5" class="star-rating"><span style="width:80%"><strong class="rating">4</strong> out of 5</span></div> (3)
                                                                </div>
                                                            </a>
                                                        </div>
                                                        <div class="col-xs-12">
                                                            <div class="price-add-to-cart">
                                                                <span class="price"><span class="electro-price"><span class="amount">$1,218.00</span></span></span>
                                                                <a class="button add_to_cart_button" href="cart.html" rel="nofollow">Add to cart</a>
                                                            </div><!-- /.price-add-to-cart -->

                                                            <div class="hover-area">
                                                                <div class="action-buttons">
                                                                    <a href="#" rel="nofollow" class="add_to_wishlist">Wishlist</a>
                                                                    <a href="compare.html" class="add-to-compare-link">Compare</a>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="product list-view list-view-small">
                                            <div class="media">
                                                <div class="media-left">
                                                    <a href="single-product.html">
                                                        <img class="wp-post-image" data-echo="assets/images/products/5.jpg" src="assets/images/blank.gif" alt="">
                                                    </a>
                                                </div>
                                                <div class="media-body media-middle">
                                                    <div class="row">
                                                        <div class="col-xs-12">
                                                            <span class="loop-product-categories"><a rel="tag" href="product-category.html">Smartphones</a></span><a href="product-category.html"><h3>Ultrabook UX605CA-FC050T</h3>
                                                                <div class="product-short-description">
                                                                    <ul style="padding-left: 18px;">
                                                                        <li>4.5 inch HD Screen</li>
                                                                        <li>Android 4.4 KitKat OS</li>
                                                                        <li>1.4 GHz Quad Core&trade; Processor</li>
                                                                        <li>20 MP front Camera</li>
                                                                    </ul>
                                                                </div>
                                                                <div class="product-rating">
                                                                    <div title="Rated 4 out of 5" class="star-rating"><span style="width:80%"><strong class="rating">4</strong> out of 5</span></div> (3)
                                                                </div>
                                                            </a>
                                                        </div>
                                                        <div class="col-xs-12">
                                                            <div class="price-add-to-cart">
                                                                <span class="price"><span class="electro-price"><span class="amount">$1,218.00</span></span></span>
                                                                <a class="button add_to_cart_button" href="cart.html" rel="nofollow">Add to cart</a>
                                                            </div><!-- /.price-add-to-cart -->

                                                            <div class="hover-area">
                                                                <div class="action-buttons">
                                                                    <a href="#" rel="nofollow" class="add_to_wishlist">Wishlist</a>
                                                                    <a href="compare.html" class="add-to-compare-link">Compare</a>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="product list-view list-view-small">
                                            <div class="media">
                                                <div class="media-left">
                                                    <a href="single-product.html">
                                                        <img class="wp-post-image" data-echo="assets/images/products/4.jpg" src="assets/images/blank.gif" alt="">
                                                    </a>
                                                </div>
                                                <div class="media-body media-middle">
                                                    <div class="row">
                                                        <div class="col-xs-12">
                                                            <span class="loop-product-categories"><a rel="tag" href="product-category.html">Smartphones</a></span><a href="product-category.html"><h3>Ultrabook UX605CA-FC050T</h3>
                                                                <div class="product-short-description">
                                                                    <ul style="padding-left: 18px;">
                                                                        <li>4.5 inch HD Screen</li>
                                                                        <li>Android 4.4 KitKat OS</li>
                                                                        <li>1.4 GHz Quad Core&trade; Processor</li>
                                                                        <li>20 MP front Camera</li>
                                                                    </ul>
                                                                </div>
                                                                <div class="product-rating">
                                                                    <div title="Rated 4 out of 5" class="star-rating"><span style="width:80%"><strong class="rating">4</strong> out of 5</span></div> (3)
                                                                </div>
                                                            </a>
                                                        </div>
                                                        <div class="col-xs-12">
                                                            <div class="price-add-to-cart">
                                                                <span class="price"><span class="electro-price"><span class="amount">$1,218.00</span></span></span>
                                                                <a class="button add_to_cart_button" href="cart.html" rel="nofollow">Add to cart</a>
                                                            </div><!-- /.price-add-to-cart -->

                                                            <div class="hover-area">
                                                                <div class="action-buttons">
                                                                    <a href="#" rel="nofollow" class="add_to_wishlist">Wishlist</a>
                                                                    <a href="compare.html" class="add-to-compare-link">Compare</a>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="product list-view list-view-small">
                                            <div class="media">
                                                <div class="media-left">
                                                    <a href="single-product.html">
                                                        <img class="wp-post-image" data-echo="assets/images/products/2.jpg" src="assets/images/blank.gif" alt="">
                                                    </a>
                                                </div>
                                                <div class="media-body media-middle">
                                                    <div class="row">
                                                        <div class="col-xs-12">
                                                            <span class="loop-product-categories"><a rel="tag" href="product-category.html">Smartphones</a></span><a href="product-category.html"><h3>Ultrabook UX605CA-FC050T</h3>
                                                                <div class="product-short-description">
                                                                    <ul style="padding-left: 18px;">
                                                                        <li>4.5 inch HD Screen</li>
                                                                        <li>Android 4.4 KitKat OS</li>
                                                                        <li>1.4 GHz Quad Core&trade; Processor</li>
                                                                        <li>20 MP front Camera</li>
                                                                    </ul>
                                                                </div>
                                                                <div class="product-rating">
                                                                    <div title="Rated 4 out of 5" class="star-rating"><span style="width:80%"><strong class="rating">4</strong> out of 5</span></div> (3)
                                                                </div>
                                                            </a>
                                                        </div>
                                                        <div class="col-xs-12">
                                                            <div class="price-add-to-cart">
                                                                <span class="price"><span class="electro-price"><span class="amount">$1,218.00</span></span></span>
                                                                <a class="button add_to_cart_button" href="cart.html" rel="nofollow">Add to cart</a>
                                                            </div><!-- /.price-add-to-cart -->

                                                            <div class="hover-area">
                                                                <div class="action-buttons">
                                                                    <a href="#" rel="nofollow" class="add_to_wishlist">Wishlist</a>
                                                                    <a href="compare.html" class="add-to-compare-link">Compare</a>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="shop-control-bar-bottom">
                                <form class="form-electro-wc-ppp">
                                    <select class="electro-wc-wppp-select c-select" onchange="this.form.submit()" name="ppp"><option selected="selected" value="15">Show 15</option><option value="-1">Show All</option></select>
                                </form>
                                <p class="woocommerce-result-count">Showing 1&ndash;15 of 20 results</p>
                                <nav class="woocommerce-pagination">
                                    <ul class="page-numbers">
                                        <li><span class="page-numbers current">1</span></li>
                                        <li><a href="#" class="page-numbers">2</a></li>
                                        <li><a href="#" class="next page-numbers">→</a></li>
                                    </ul>
                                </nav>
                            </div>
                            @else
                            <h3 class="alert alert-danger" style="text-align: center">OOPS! No Service Found</h3>
                            @endif

                        </main><!-- #main -->
                    </div><!-- #primary -->

                    <div id="sidebar" class="sidebar" role="complementary">
                        <aside class="widget woocommerce widget_product_categories electro_widget_product_categories">
                            <ul class="product-categories category-single">
                                <li class="product_cat">
                                   
                                    
                                    <ul>
                                    	@foreach($categories as $category)
                                         <li class="cat-item current-cat"><a href="product-category.html">{{$category->category}}</a> <span class="count">({{count($category->subcategories)}})</span>
                                         		 @foreach($category->subcategories as $subcat)
                                            <ul class='children'>
                                            
                                                <li class="cat-item"><a href="product-category.html">  &nbsp;&nbsp;&nbsp;{{$subcat->subcategory}}</a><!--  <span class="count">(6)</span> --></li>
                                                
                                               
                                            </ul>
                                            @endforeach
                                        </li>
                                        @endforeach
                                    </ul>
                                    
                                </li>
                            </ul>
                        </aside>
                      <!--   <aside class="widget widget_electro_products_filter">
                            <h3 class="widget-title">Filters</h3>
                            <aside class="widget woocommerce widget_layered_nav">
                                <h3 class="widget-title">Brands</h3>
                                <ul>
                                    <li style=""><a href="#">Apple</a> <span class="count">(4)</span></li>
                                    <li style=""><a href="#">Gionee</a> <span class="count">(2)</span></li>
                                    <li style=""><a href="#">HTC</a> <span class="count">(2)</span></li>
                                    <li style=""><a href="#">LG</a> <span class="count">(2)</span></li>
                                    <li style=""><a href="#">Micromax</a> <span class="count">(1)</span></li>
                                </ul>
                                <p class="maxlist-more"><a href="#">+ Show more</a></p>
                            </aside>
                            <aside class="widget woocommerce widget_layered_nav">
                                <h3 class="widget-title">Color</h3>
                                <ul>
                                    <li style=""><a href="#">Black</a> <span class="count">(4)</span></li>
                                    <li style=""><a href="#">Black Leather</a> <span class="count">(2)</span></li>
                                    <li style=""><a href="#">Turquoise</a> <span class="count">(2)</span></li>
                                    <li style=""><a href="#">White</a> <span class="count">(4)</span></li>
                                    <li style=""><a href="#">Gold</a> <span class="count">(4)</span></li>
                                </ul>
                                <p class="maxlist-more"><a href="#">+ Show more</a></p>
                            </aside>
                            <aside class="widget woocommerce widget_price_filter">
                                <h3 class="widget-title">Price</h3>
                                <form action="#">
                                    <div class="price_slider_wrapper">
                                        <div style="" class="price_slider ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all">
                                            <div class="ui-slider-range ui-widget-header ui-corner-all" style="left: 0%; width: 100%;"></div>
                                            <span tabindex="0" class="ui-slider-handle ui-state-default ui-corner-all" style="left: 0%;"></span>
                                            <span tabindex="0" class="ui-slider-handle ui-state-default ui-corner-all" style="left: 100%;"></span>
                                        </div>
                                        <div class="price_slider_amount">
                                            <a href="#" class="button">Filter</a>
                                            <div style="" class="price_label">Price: <span class="from">$428</span> &mdash; <span class="to">$3485</span></div>
                                            <div class="clear"></div>
                                        </div>
                                    </div>
                                </form>
                            </aside>
                        </aside>
                        <aside class="widget widget_text">
                            <div class="textwidget">
                                <a href="#"><img src="assets/images/banner/ad-banner-sidebar.jpg" alt="Banner"></a>
                            </div>
                        </aside>
                        <aside class="widget widget_products">
                            <h3 class="widget-title">Latest Products</h3>
                            <ul class="product_list_widget">
                                <li>
                                    <a href="single-product.html" title="Notebook Black Spire V Nitro  VN7-591G">
                                        <img width="180" height="180" src="assets/images/product-category/1.jpg" class="wp-post-image" alt=""/><span class="product-title">Notebook Black Spire V Nitro  VN7-591G</span>
                                    </a>
                                    <span class="electro-price"><ins><span class="amount">&#36;1,999.00</span></ins> <del><span class="amount">&#36;2,299.00</span></del></span>
                                </li>

                                <li>
                                    <a href="single-product.html" title="Tablet Thin EliteBook  Revolve 810 G6">
                                        <img width="180" height="180" src="assets/images/product-category/2.jpg" class="wp-post-image" alt=""/><span class="product-title">Tablet Thin EliteBook  Revolve 810 G6</span>
                                    </a>
                                    <span class="electro-price"><span class="amount">&#36;1,300.00</span></span>
                                </li>

                                <li>
                                    <a href="single-product.html" title="Notebook Widescreen Z51-70  40K6013UPB">
                                        <img width="180" height="180" src="assets/images/product-category/3.jpg" class="wp-post-image" alt=""/><span class="product-title">Notebook Widescreen Z51-70  40K6013UPB</span>
                                    </a>
                                    <span class="electro-price"><span class="amount">&#36;1,100.00</span></span>
                                </li>

                                <li>
                                    <a href="single-product.html" title="Notebook Purple G952VX-T7008T">
                                        <img width="180" height="180" src="assets/images/product-category/4.jpg" class="wp-post-image" alt=""/><span class="product-title">Notebook Purple G952VX-T7008T</span>
                                    </a>
                                    <span class="electro-price"><span class="amount">&#36;2,780.00</span></span>
                                </li>
                            </ul>
                        </aside> -->
                    </div>

                </div><!-- .container -->
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

            <footer id="colophon" class="site-footer">
                <div class="footer-widgets">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-xs-12">
                                <aside class="widget clearfix">
                                    <div class="body">
                                        <h4 class="widget-title">Featured Products</h4>
                                        <ul class="product_list_widget">
                                            <li>
                                                <a href="single-product.html" title="Tablet Thin EliteBook  Revolve 810 G6">
                                                    <img class="wp-post-image" data-echo="assets/images/footer/1.jpg" src="assets/images/blank.gif" alt="">
                                                    <span class="product-title">Tablet Thin EliteBook  Revolve 810 G6</span>
                                                </a>
                                                <span class="electro-price"><span class="amount">&#36;1,300.00</span></span>
                                            </li>

                                            <li>
                                                <a href="single-product.html" title="Smartphone 6S 128GB LTE">
                                                    <img class="wp-post-image" data-echo="assets/images/footer/2.jpg" src="assets/images/blank.gif" alt=""><span class="product-title">Smartphone 6S 128GB LTE</span>
                                                </a>
                                                <span class="electro-price"><span class="amount">&#36;780.00</span></span>
                                            </li>

                                            <li>
                                                <a href="single-product.html" title="Smartphone 6S 64GB LTE">
                                                    <img class="wp-post-image" data-echo="assets/images/footer/3.jpg" src="assets/images/blank.gif" alt="">
                                                    <span class="product-title">Smartphone 6S 64GB LTE</span>
                                                </a>
                                                <span class="electro-price"><span class="amount">&#36;1,215.00</span></span>
                                            </li>
                                        </ul>
                                    </div>
                                </aside>
                            </div>
                            <div class="col-lg-4 col-md-4 col-xs-12">
                                <aside class="widget clearfix">
                                    <div class="body"><h4 class="widget-title">Onsale Products</h4>
                                        <ul class="product_list_widget">
                                            <li>
                                                <a href="single-product.html" title="Notebook Black Spire V Nitro  VN7-591G">
                                                    <img class="wp-post-image" data-echo="assets/images/footer/3.jpg" src="assets/images/blank.gif" alt="">
                                                    <span class="product-title">Notebook Black Spire V Nitro  VN7-591G</span>
                                                </a>
                                                <span class="electro-price"><ins><span class="amount">&#36;1,999.00</span></ins> <del><span class="amount">&#36;2,299.00</span></del></span>
                                            </li>

                                            <li>
                                                <a href="single-product.html" title="Tablet Red EliteBook  Revolve 810 G2">
                                                    <img class="wp-post-image" data-echo="assets/images/footer/4.jpg" src="assets/images/blank.gif" alt="">
                                                    <span class="product-title">Tablet Red EliteBook  Revolve 810 G2</span>
                                                </a>
                                                <span class="electro-price"><ins><span class="amount">&#36;1,999.00</span></ins> <del><span class="amount">&#36;2,299.00</span></del></span>
                                            </li>

                                            <li>
                                                <a href="single-product.html" title="Widescreen 4K SUHD TV">
                                                    <img class="wp-post-image" data-echo="assets/images/footer/5.jpg" src="assets/images/blank.gif" alt="">
                                                    <span class="product-title">Widescreen 4K SUHD TV</span>
                                                </a>
                                                <span class="electro-price"><ins><span class="amount">&#36;2,999.00</span></ins> <del><span class="amount">&#36;3,299.00</span></del></span>
                                            </li>
                                        </ul>
                                    </div>
                                </aside>
                            </div>
                            <div class="col-lg-4 col-md-4 col-xs-12">
                                <aside class="widget clearfix">
                                    <div class="body">
                                        <h4 class="widget-title">Top Rated Products</h4>
                                        <ul class="product_list_widget">
                                            <li>
                                                <a href="single-product.html" title="Notebook Black Spire V Nitro  VN7-591G">
                                                    <img class="wp-post-image" data-echo="assets/images/footer/6.jpg" src="assets/images/blank.gif" alt="">
                                                    <span class="product-title">Notebook Black Spire V Nitro  VN7-591G</span>
                                                </a>
                                                <div class="star-rating" title="Rated 5 out of 5"><span style="width:100%"><strong class="rating">5</strong> out of 5</span></div>      <span class="electro-price"><ins><span class="amount">&#36;1,999.00</span></ins> <del><span class="amount">&#36;2,299.00</span></del></span>
                                            </li>

                                            <li>
                                                <a href="single-product.html" title="Apple MacBook Pro MF841HN/A 13-inch Laptop">
                                                    <img class="wp-post-image" data-echo="assets/images/footer/7.jpg" src="assets/images/blank.gif" alt="">
                                                    <span class="product-title">Apple MacBook Pro MF841HN/A 13-inch Laptop</span>
                                                </a>
                                                <div class="star-rating" title="Rated 5 out of 5"><span style="width:100%"><strong class="rating">5</strong> out of 5</span></div>      <span class="electro-price"><span class="amount">&#36;1,800.00</span></span>
                                            </li>

                                            <li>
                                                <a href="single-product.html" title="Tablet White EliteBook Revolve  810 G2">
                                                    <img class="wp-post-image" data-echo="assets/images/footer/2.jpg" src="assets/images/blank.gif" alt="">
                                                    <span class="product-title">Tablet White EliteBook Revolve  810 G2</span>
                                                </a>
                                                <div class="star-rating" title="Rated 5 out of 5"><span style="width:100%"><strong class="rating">5</strong> out of 5</span></div>      <span class="electro-price"><span class="amount">&#36;1,999.00</span></span>
                                            </li>
                                        </ul>
                                    </div>
                                </aside>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="footer-newsletter">
                    <div class="container">
                        <div class="row">
                            <div class="col-xs-12 col-sm-7">
                                <h5 class="newsletter-title">Sign up to Newsletter</h5>
                                <span class="newsletter-marketing-text">...and receive <strong>$20 coupon for first shopping</strong></span>
                            </div>
                            <div class="col-xs-12 col-sm-5">
                                <form>
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="Enter your email address">
                                        <span class="input-group-btn">
                                            <button class="btn btn-secondary" type="button">Sign Up</button>
                                        </span>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="footer-bottom-widgets">
                    <div class="container">
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-7 col-md-push-5">
                                <div class="columns">
                                    <aside id="nav_menu-2" class="widget clearfix widget_nav_menu">
                                        <div class="body">
                                            <h4 class="widget-title">Find It Fast</h4>
                                            <div class="menu-footer-menu-1-container">
                                                <ul id="menu-footer-menu-1" class="menu">
                                                    <li class="menu-item"><a href="single-product.html">Laptops &#038; Computers</a></li>
                                                    <li class="menu-item"><a href="single-product.html">Cameras &#038; Photography</a></li>
                                                    <li class="menu-item"><a href="single-product.html">Smart Phones &#038; Tablets</a></li>
                                                    <li class="menu-item"><a href="single-product.html">Video Games &#038; Consoles</a></li>
                                                    <li class="menu-item"><a href="single-product.html">TV &#038; Audio</a></li>
                                                    <li class="menu-item"><a href="single-product.html">Gadgets</a></li>
                                                    <li class="menu-item "><a href="single-product.html">Car Electronic &#038; GPS</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </aside>
                                </div><!-- /.columns -->

                                <div class="columns">
                                    <aside id="nav_menu-3" class="widget clearfix widget_nav_menu">
                                        <div class="body">
                                            <h4 class="widget-title">&nbsp;</h4>
                                            <div class="menu-footer-menu-2-container">
                                                <ul id="menu-footer-menu-2" class="menu">
                                                    <li class="menu-item"><a href="single-product.html">Printers &#038; Ink</a></li>
                                                    <li class="menu-item "><a href="single-product.html">Software</a></li>
                                                    <li  class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-2742"><a href="single-product.html">Office Supplies</a></li>
                                                    <li  class="menu-item "><a href="single-product.html">Computer Components</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </aside>
                                </div><!-- /.columns -->

                                <div class="columns">
                                    <aside id="nav_menu-4" class="widget clearfix widget_nav_menu">
                                        <div class="body">
                                            <h4 class="widget-title">Customer Care</h4>
                                            <div class="menu-footer-menu-3-container">
                                                <ul id="menu-footer-menu-3" class="menu">
                                                    <li class="menu-item"><a href="single-product.html">My Account</a></li>
                                                    <li class="menu-item"><a href="single-product.html">Track your Order</a></li>
                                                    <li class="menu-item"><a href="single-product.html">Wishlist</a></li>
                                                    <li class="menu-item"><a href="single-product.html">Customer Service</a></li>
                                                    <li class="menu-item"><a href="single-product.html">Returns/Exchange</a></li>
                                                    <li class="menu-item"><a href="single-product.html">FAQs</a></li>
                                                    <li class="menu-item"><a href="hsingle-product.html">Product Support</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </aside>
                                </div><!-- /.columns -->

                            </div><!-- /.col -->

                            <div class="footer-contact col-xs-12 col-sm-12 col-md-5 col-md-pull-7">
                                <div class="footer-logo">
                                    <svg version="1.1" x="0px" y="0px" width="156px"
                                    height="37px" viewBox="0 0 175.748 42.52" enable-background="new 0 0 175.748 42.52">
                                    <ellipse fill-rule="evenodd" clip-rule="evenodd" fill="#FDD700" cx="170.05" cy="36.341" rx="5.32" ry="5.367"/>
                                    <path fill-rule="evenodd" clip-rule="evenodd" fill="#333E48" d="M30.514,0.71c-0.034,0.003-0.066,0.008-0.056,0.056
                                    C30.263,0.995,29.876,1.181,29.79,1.5c-0.148,0.548,0,1.568,0,2.427v36.459c0.265,0.221,0.506,0.465,0.725,0.734h6.187
                                    c0.2-0.25,0.423-0.477,0.669-0.678V1.387C37.124,1.185,36.9,0.959,36.701,0.71H30.514z M117.517,12.731
                                    c-0.232-0.189-0.439-0.64-0.781-0.734c-0.754-0.209-2.039,0-3.121,0h-3.176V4.435c-0.232-0.189-0.439-0.639-0.781-0.733
                                    c-0.719-0.2-1.969,0-3.01,0h-3.01c-0.238,0.273-0.625,0.431-0.725,0.847c-0.203,0.852,0,2.399,0,3.725
                                    c0,1.393,0.045,2.748-0.055,3.725h-6.41c-0.184,0.237-0.629,0.434-0.725,0.791c-0.178,0.654,0,1.813,0,2.765v2.766
                                    c0.232,0.188,0.439,0.64,0.779,0.733c0.777,0.216,2.109,0,3.234,0c1.154,0,2.291-0.045,3.176,0.057v21.277
                                    c0.232,0.189,0.439,0.639,0.781,0.734c0.719,0.199,1.969,0,3.01,0h3.01c1.008-0.451,0.725-1.889,0.725-3.443
                                    c-0.002-6.164-0.047-12.867,0.055-18.625h6.299c0.182-0.236,0.627-0.434,0.725-0.79c0.176-0.653,0-1.813,0-2.765V12.731z
                                    M135.851,18.262c0.201-0.746,0-2.029,0-3.104v-3.104c-0.287-0.245-0.434-0.637-0.781-0.733c-0.824-0.229-1.992-0.044-2.898,0
                                    c-2.158,0.104-4.506,0.675-5.74,1.411c-0.146-0.362-0.451-0.853-0.893-0.96c-0.693-0.169-1.859,0-2.842,0h-2.842
                                    c-0.258,0.319-0.625,0.42-0.725,0.79c-0.223,0.82,0,2.338,0,3.443c0,8.109-0.002,16.635,0,24.381
                                    c0.232,0.189,0.439,0.639,0.779,0.734c0.707,0.195,1.93,0,2.955,0h3.01c0.918-0.463,0.725-1.352,0.725-2.822V36.21
                                    c-0.002-3.902-0.242-9.117,0-12.473c0.297-4.142,3.836-4.877,8.527-4.686C135.312,18.816,135.757,18.606,135.851,18.262z
                                    M14.796,11.376c-5.472,0.262-9.443,3.178-11.76,7.056c-2.435,4.075-2.789,10.62-0.501,15.126c2.043,4.023,5.91,7.115,10.701,7.9
                                    c6.051,0.992,10.992-1.219,14.324-3.838c-0.687-1.1-1.419-2.664-2.118-3.951c-0.398-0.734-0.652-1.486-1.616-1.467
                                    c-1.942,0.787-4.272,2.262-7.134,2.145c-3.791-0.154-6.659-1.842-7.524-4.91h19.452c0.146-2.793,0.22-5.338-0.279-7.563
                                    C26.961,15.728,22.503,11.008,14.796,11.376z M9,23.284c0.921-2.508,3.033-4.514,6.298-4.627c3.083-0.107,4.994,1.976,5.685,4.627
                                    C17.119,23.38,12.865,23.38,9,23.284z M52.418,11.376c-5.551,0.266-9.395,3.142-11.76,7.056
                                    c-2.476,4.097-2.829,10.493-0.557,15.069c1.997,4.021,5.895,7.156,10.646,7.957c6.068,1.023,11-1.227,14.379-3.781
                                    c-0.479-0.896-0.875-1.742-1.393-2.709c-0.312-0.582-1.024-2.234-1.561-2.539c-0.912-0.52-1.428,0.135-2.23,0.508
                                    c-0.564,0.262-1.223,0.523-1.672,0.676c-4.768,1.621-10.372,0.268-11.537-4.176h19.451c0.668-5.443-0.419-9.953-2.73-13.037
                                    C61.197,13.388,57.774,11.12,52.418,11.376z M46.622,23.343c0.708-2.553,3.161-4.578,6.242-4.686
                                    c3.08-0.107,5.08,1.953,5.686,4.686H46.622z M160.371,15.497c-2.455-2.453-6.143-4.291-10.869-4.064
                                    c-2.268,0.109-4.297,0.65-6.02,1.524c-1.719,0.873-3.092,1.957-4.234,3.217c-2.287,2.519-4.164,6.004-3.902,11.007
                                    c0.248,4.736,1.979,7.813,4.627,10.326c2.568,2.439,6.148,4.254,10.867,4.064c4.457-0.18,7.889-2.115,10.199-4.684
                                    c2.469-2.746,4.012-5.971,3.959-11.063C164.949,21.134,162.732,17.854,160.371,15.497z M149.558,33.952
                                    c-3.246-0.221-5.701-2.615-6.41-5.418c-0.174-0.689-0.26-1.25-0.4-2.166c-0.035-0.234,0.072-0.523-0.045-0.77
                                    c0.682-3.698,2.912-6.257,6.799-6.547c2.543-0.189,4.258,0.735,5.52,1.863c1.322,1.182,2.303,2.715,2.451,4.967
                                    C157.789,30.669,154.185,34.267,149.558,33.952z M88.812,29.55c-1.232,2.363-2.9,4.307-6.13,4.402
                                    c-4.729,0.141-8.038-3.16-8.025-7.563c0.004-1.412,0.324-2.65,0.947-3.726c1.197-2.061,3.507-3.688,6.633-3.612
                                    c3.222,0.079,4.966,1.708,6.632,3.668c1.328-1.059,2.529-1.948,3.9-2.99c0.416-0.315,1.076-0.688,1.227-1.072
                                    c0.404-1.031-0.365-1.502-0.891-2.088c-2.543-2.835-6.66-5.377-11.704-5.137c-6.02,0.288-10.218,3.697-12.484,7.846
                                    c-1.293,2.365-1.951,5.158-1.729,8.408c0.209,3.053,1.191,5.496,2.619,7.508c2.842,4.004,7.385,6.973,13.656,6.377
                                    c5.976-0.568,9.574-3.936,11.816-8.354c-0.141-0.271-0.221-0.604-0.336-0.902C92.929,31.364,90.843,30.485,88.812,29.55z"/>
                                    </svg>
                                </div><!-- /.footer-contact -->

                                <div class="footer-call-us">
                                    <div class="media">
                                        <span class="media-left call-us-icon media-middle"><i class="ec ec-support"></i></span>
                                        <div class="media-body">
                                            <span class="call-us-text">Got Questions ? Call us 24/7!</span>
                                            <span class="call-us-number">(800) 8001-8588, (0600) 874 548</span>
                                        </div>
                                    </div>
                                </div><!-- /.footer-call-us -->


                                <div class="footer-address">
                                    <strong class="footer-address-title">Contact Info</strong>
                                    <address>17 Princess Road, London, Greater London NW1 8JR, UK</address>
                                </div><!-- /.footer-address -->

                                <div class="footer-social-icons">
                                    <ul class="social-icons list-unstyled">
                                        <li><a class="fa fa-facebook" href="http://themeforest.net/user/shaikrilwan/portfolio"></a></li>
                                        <li><a class="fa fa-twitter" href="http://themeforest.net/user/shaikrilwan/portfolio"></a></li>
                                        <li><a class="fa fa-pinterest" href="http://themeforest.net/user/shaikrilwan/portfolio"></a></li>
                                        <li><a class="fa fa-linkedin" href="http://themeforest.net/user/shaikrilwan/portfolio"></a></li>
                                        <li><a class="fa fa-google-plus" href="http://themeforest.net/user/shaikrilwan/portfolio"></a></li>
                                        <li><a class="fa fa-tumblr" href="http://themeforest.net/user/shaikrilwan/portfolio"></a></li>
                                        <li><a class="fa fa-instagram" href="http://themeforest.net/user/shaikrilwan/portfolio"></a></li>
                                        <li><a class="fa fa-youtube" href="http://themeforest.net/user/shaikrilwan/portfolio"></a></li>
                                        <li><a class="fa fa-rss" href="#"></a></li>
                                        </ul>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="copyright-bar">
                    <div class="container">
                        <div class="pull-left flip copyright">&copy; <a href="http://demo2.transvelo.in/html/electro/">Electro</a> - All Rights Reserved</div>
                        <div class="pull-right flip payment">
                            <div class="footer-payment-logo">
                                <ul class="cash-card card-inline">
                                    <li class="card-item"><img src="assets/images/footer/payment-icon/1.png" alt="" width="52"></li>
                                    <li class="card-item"><img src="assets/images/footer/payment-icon/2.png" alt="" width="52"></li>
                                    <li class="card-item"><img src="assets/images/footer/payment-icon/3.png" alt="" width="52"></li>
                                    <li class="card-item"><img src="assets/images/footer/payment-icon/4.png" alt="" width="52"></li>
                                    <li class="card-item"><img src="assets/images/footer/payment-icon/5.png" alt="" width="52"></li>
                                </ul>
                            </div><!-- /.payment-methods -->
                        </div>
                    </div><!-- /.container -->
                </div><!-- /.copyright-bar -->
            </footer><!-- #colophon -->

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