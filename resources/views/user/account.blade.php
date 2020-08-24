@extends('user.layout.app1')
@section('content')
     
 <div tabindex="-1" class="site-content" id="content">
                <div class="container">

                    <nav class="woocommerce-breadcrumb"><a href="{{url('/')}}">Home</a><span class="delimiter"><i class="fa fa-angle-right"></i></span>Account</nav>
                    <div class="content-area" id="primary">
                        <main class="site-main" id="main">
                            <article class="page type-page status-publish hentry">
                                <div itemprop="mainContentOfPage" class="entry-content">
                                    <div id="yith-wcwl-messages"></div>
                                    <form class="woocommerce" method="post" id="yith-wcwl-form">

                                        <input type="hidden" value="68bc4ab99c" name="yith_wcwl_form_nonce" id="yith_wcwl_form_nonce"><input type="hidden" value="/electro/wishlist/" name="_wp_http_referer">
                                        <!-- TITLE -->
                                        <div class="wishlist-title ">
                                            <h2>My Orders</h2>
                                        </div>

                                        <!-- WISHLIST TABLE -->
                                        <table data-token="" data-id="" data-page="1" data-per-page="5" data-pagination="no" class="shop_table cart wishlist_table">

                                            <thead>
                                                <tr>

                                                    

                                                    <th class="product-thumbnail"></th>

                                                    <th class="product-name">
                                                        <span class="nobr">Product Name</span>
                                                    </th>

                                                    <th class="product-price">
                                                        <span class="nobr"> Price</span>
                                                    </th>
                                                    <th class="product-stock-stauts">
                                                        <span class="nobr"> Status</span>
                                                    </th>

                                                    <th class="product-add-to-cart"></th>

                                                </tr>
                                            </thead>

                                            <tbody>
                                                @foreach($services as $service)
                                                <?php
                                                $images=array();
                                                $images=explode('|',$service->images);
                                                ?>
                                                <tr>
                                        
                                                    <td class="product-thumbnail">
                                                        <a href="#"><img width="180" height="180" alt="1" class="wp-post-image" src="{{asset('products/images/'.$images[0])}}"></a>
                                                    </td>

                                                    <td class="product-name">
                                                        <a href="single-product.html">{{$service->product}}</a>
                                                    </td>

                                                    <td class="product-price">
                                                        <span class="electro-price"><span class="amount">{{$service->price}}</span></span>
                                                    </td>
                                                    <?php
                                                    $status=$service->status==0 ?'pending':'confirm';
                                                    ?>

                                                    <td class="product-stock-status">
                                                        <span class="in-stock">{{$status}}</span>
                                                    </td>

                                                 
                                                  
                                                </tr>
                                                  @endforeach
                                                
                                            </tbody>

                                            <tfoot>
                                                <tr>
                                                    <td colspan="6"></td>
                                                </tr>
                                            </tfoot>

                                        </table>

                                        <input type="hidden" value="85fe311a9d" name="yith_wcwl_edit_wishlist" id="yith_wcwl_edit_wishlist"><input type="hidden" value="/electro/wishlist/" name="_wp_http_referer">

                                    </form>

                                </div><!-- .entry-content -->

                            </article><!-- #post-## -->

                        </main><!-- #main -->
                    </div><!-- #primary -->
                </div><!-- .col-full -->
            </div>
@endsection