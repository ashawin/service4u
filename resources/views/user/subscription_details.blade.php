@extends('user.layout.app1')
@section('content')
 <div id="content" class="site-content" tabindex="-1">
                 
                    <nav class="woocommerce-breadcrumb">
                        <a href="{{url('/')}}">Home</a>
                        <span class="delimiter"><i class="fa fa-angle-right"></i>
                        </span>
                        <a href="{{route('user-subs-plan')}}">Subscription</a>
                        <span class="delimiter"><i class="fa fa-angle-right"></i>
                        </span>
                        <a href="#">Plans</a>
                        
                    </nav>
            <!-- End breadcrumb -->

            <div class="container">
                <div class="table-responsive table-bordered table-compare-list mb-10 border-0">
                    <table class="table">
                        <tbody>
                             <?php
                                $plan=DB::table('plans')
                                ->where('id','=',$plan_id)
                                ->first();
                                ?>
                            <tr>
                                <th class="min-width-200">Product</th>
                                @foreach($features as $feature)
                                <?php
                                $product=\DB::table('plan_features')
                                ->join('products','products.id','=','plan_features.product_id')
                                ->join('plans','plans.id','=','plan_features.plan_id')
                                ->where('plan_features.id','=',$feature->id)
                                ->select('products.images','products.desc','plans.price','plans.invoice_period','plans.description')
                                ->first();
                                $images=array();
                                $images=explode('|',$product->images);
                                ?>
                                <td>
                                    <a href="#" class="product d-block">
                                        <div class="product-compare-image">
                                            <div class="d-flex mb-3">
                                                <img class="img-fluid mx-auto" src="{{asset('products/images/'.$images[0])}}" alt="Image Description">
                                            </div>
                                        </div>
                                        <h3 class="product-item__title text-blue font-weight-bold mb-3">{{$feature->name}}</h3>
                                    </a>
                                 
                                </td>
                                @endforeach
                                
                                
                            </tr>

                            <tr>
                                <th>Price</th>
                                <?php
                                 $product=\DB::table('plan_features')
                                ->join('products','products.id','=','plan_features.product_id')
                                ->join('plans','plans.id','=','plan_features.plan_id')
                                ->where('plan_features.id','=',$feature->id)
                                ->select('products.images','products.desc','plans.price','plans.invoice_period','plans.description')
                                ->first();
                                ?>
                                <td>
                                    <div class="product-price">&#8377 {{$plan->price}}</div>
                                </td>
                                
                               
                            </tr>

                        

                            <tr>
                                <th>Description</th>
                                <?php
                                 $product=\DB::table('plan_features')
                                ->join('products','products.id','=','plan_features.product_id')
                                ->join('plans','plans.id','=','plan_features.plan_id')
                                ->where('plan_features.id','=',$feature->id)
                                ->select('products.images','products.desc','plans.price','plans.invoice_period','plans.description')
                                ->first();
                                ?>
                                @foreach($features as $feature)
                                <?php
                                 $product=\DB::table('plan_features')
                                ->join('products','products.id','=','plan_features.product_id')
                                ->join('plans','plans.id','=','plan_features.plan_id')
                                ->where('plan_features.id','=',$feature->id)
                                ->select('products.images','products.desc','plans.price','plans.invoice_period','plans.description')
                                ->first();
                                ?>
                                <td>
                                   {{$product->desc}}
                                </td>
                                @endforeach
                               
                            </tr>

                            <tr>
                                <th>Book Now</th>
                               
                                <td>
                                    <div class="">
                                    
                                         <a href="{{url('subscription/plans/'.$plan->slug.'/book')}}" class="btn btn-soft-secondary mb-3 mb-md-0 font-weight-normal px-5 px-md-3 px-xl-5">Book Now</a>
                                       
                                        </div>
                                </td>
                                
                            </tr>
                           
                        </tbody>
                    </table>
                </div>
            </div>
            </div><!-- /.site-content -->
@endsection