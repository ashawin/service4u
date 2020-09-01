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
                        <a href="product-category.html">Plans</a>
                        
                    </nav>

                    <div id="primary" class="content-area">
                        <main id="main" class="site-main">
                             <div class="related products">
                                   

                                    <ul class="products columns-5">
                       @foreach($plans as $plan)
                      

                                        <li class="product" style="height:300px;border-style: groove;width:300px">
                                            <div class="product-outer">
                                                <div class="product-inner" style="padding: 40px">
                                                    <span class="loop-product-categories"><a href="" rel="tag">
                                                        {{$plan->name}}</a></span>
                                                        <h6>{{$plan->name}}</h6>
                                                        <h6>{{$plan->description}}</h6>
                                                        
                                                       <h6>Starting At <br></h6>

                                                    <div class="price-add-to-cart">

                                                        <span class="price">
                                                            <span class="electro-price">
                                                                <ins><span class="amount">Rs.{{$plan->price}}/{{$plan->invoice_period}}&nbsp;&nbsp;Month</span></ins>
                                                            </span>
                                                        </span>
                                                       
                                                    </div><!-- /.price-add-to-cart -->
                                                 <a href="{{url('subscription/plan/'.$plan->id.'/'.$plan->slug)}}" class="btn btn-outline-secondary">Purchase Now</a>
                                                    
                                                </div><!-- /.product-inner -->
                                            </div><!-- /.product-outer -->
                                        </li>
                                        @endforeach

                                    </ul><!-- /.products -->
                                </div><!-- /.related -->
                            </div><!-- /.product -->
                        </main><!-- /.site-main -->
                    </div><!-- /.content-area -->
                
            
@endsection