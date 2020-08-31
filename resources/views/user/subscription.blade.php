@extends('user.layout.app1')
@section('content')
  <div id="content" class="site-content" tabindex="-1">
                <div class="container">

                    <nav class="woocommerce-breadcrumb" ><a href="{{url('/')}}">Home</a><span class="delimiter"><i class="fa fa-angle-right"></i></span>Subscription Plans</nav>

                    <div id="primary" class="content-area">
                        <main id="main" class="site-main">

                           

                            <header class="page-header">
                                <h1 class="page-title">Subscription Plans</h1>
                                <p class="woocommerce-result-count">Showing 1&ndash;15 of 20 results</p>
                            </header>


                            <div class="shop-control-bar">
                                <ul class="shop-view-switcher nav nav-tabs" role="tablist">
                                   
                                   
                                    <li class="nav-item"><a class="nav-link active" data-toggle="tab" title="List View" href="#grid"><i class="fa fa-list"></i></a></li>
                                  
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

                            <div class="tab-content">



                                <div role="tabpanel" class="tab-pane active" id="grid" aria-expanded="true">

                                    <ul class="products columns-3">
                                        @foreach($plans as $plan)
                                        <li class="product list-view">
                                            <?php
                                             $images=array();
  $fearray=$plan->features;
  if(!$fearray->isEmpty()){
  
 $pro=App\Models\Product::where ('id','=',$fearray[0]->product_id)->first();
 
  $images=explode('|',$pro->images);
}
                                                                        ?>

                                                                        
                                            <div class="media">
                                                <div class="media-left">
                                                    <a href="{{url('subscription/plan/'.$plan->id.'/'.$plan->slug)}}">
                                                        @if(!$fearray->isEmpty())
                                                        <img class="wp-post-image" data-echo="{{asset('products/images/'.$images[0])}}" src="{{asset('products/images/'.$images[0])}}" alt="">
                                                        @endif
                                                    </a>
                                                </div>
                                                <div class="media-body media-middle">
                                                    <div class="row">
                                                        <div class="col-xs-12">
                                                            <span class="loop-product-categories"><a rel="tag" href="{{url('subscription/plan/'.$plan->id.'/'.$plan->slug)}}">{{$plan->name}}</a></span><a href="{{url('subscription/plan/'.$plan->id.'/'.$plan->slug)}}"><h3>{{$plan->name}}</h3>
                                                                <div class="product-rating">
                                                                    <div title="Rated 4 out of 5" class="star-rating"><span style="width:80%"><strong class="rating">4</strong> out of 5</span></div> (3)
                                                                </div>

                                                                <div class="product-short-description">
                                                                    <ul style="padding-left: 18px;">
                                                                        
                                                                        @foreach($fearray as $fea)
                                                                        <li>{{$fea->name}}</li>
                                                                        @endforeach
                                                                      
                                                                    </ul>
                                                                </div>
                                                            </a>
                                                        </div>
                                                      
                                                        <div class="col-xs-12">

                                                          

                                                            <span class="price"><span class="electro-price"><span class="amount">Rs.{{$plan->price}} for  {{$plan->invoice_period}} Days </span></span></span>
                                                            <a class="button single_add_to_cart_button button " data-product_sku="5487FB8/35" data-product_id="2706" data-quantity="1" href="{{url('subscription/plan/'.$plan->id.'/'.$plan->slug)}}" rel="nofollow">Book Now</a>
                                                            <div class="hover-area">
                                                                <div class="action-buttons">
                                                                    <div class="yith-wcwl-add-to-wishlist add-to-wishlist-2706">
                                                                        <a class="add_to_wishlist" data-product-type="simple" data-product-id="2706" rel="nofollow" href="{{url('subscription/plan/'.$plan->id.'/'.$plan->slug)}}">Wishlist</a>

                                                                        <div style="display:none;" class="yith-wcwl-wishlistaddedbrowse hide">
                                                                            <span class="feedback">Product added!</span>
                                                                            <a rel="nofollow" href="{{url('subscription/plan/'.$plan->slug)}}">Wishlist</a>
                                                                        </div>

                                                                        <div style="display:none" class="yith-wcwl-wishlistexistsbrowse hide">
                                                                            <span class="feedback">The product is already in the wishlist!</span>
                                                                            <a rel="nofollow" href="#">Wishlist</a>
                                                                        </div>

                                                                        <div style="clear:both"></div>
                                                                        <div class="yith-wcwl-wishlistaddresponse"></div>

                                                                    </div>
                                                                  
                                                                </div>
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

                        </main><!-- #main -->
                    </div><!-- #primary -->
                </div><!-- .container -->
            </div><!-- #content -->

@endsection