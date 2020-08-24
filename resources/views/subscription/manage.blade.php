@extends('app.app')
@section('content')
 <div class="nk-content ">
 <div class="nk-main ">
<div class="nk-wrap ">
 <div class="nk-block nk-block-lg">
     <div class="nk-block-head">
                                           
                                        </div>
                                        <div class="card card-preview">
                                        	@if(session()->has('msg'))
                                        	  <div class="example-alert">
                                                            <div class="alert alert-success alert-icon">
                                                                <em class="icon ni ni-check-circle"></em> <strong>{{session()->get('msg')}}</strong> </div>
                                                        </div>
                                        	@endif
                                            <div class="card-inner">
                                                <ul class="nav nav-tabs mt-n3">
                                                    <li class="nav-item">
                                                        <a class="nav-link active" data-toggle="tab" href="#tabItem5"><em class="icon ni ni-user"></em><span>Subscrption Request</span></a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" data-toggle="tab" href="#tabItem6"><em class="icon ni ni-lock-alt"></em><span>Subscription Plans</span></a>
                                                    </li>
                                                    <li>
                                                         <a href="{{route('admin-subsc-add')}}" class="btn btn-icon btn-primary d-md-none"><em class="icon ni ni-plus"></em><span>Add </span></a>
                                                            <a href="{{route('admin-service-add')}}" class="btn btn-primary d-none d-md-inline-flex"><em class="icon ni ni-plus"></em><span>Add </span></a>
                                                        </li>
                                                   
                                                </ul>
                                                 <div class="tab-content">
                                                                       
                                                  <div class="tab-pane" id="tabItem6">
                                                     <div class="nk-content ">
                    			                        <div class="nk-block">
                                                        <div class="nk-tb-list is-separate mb-3">
                                                            <div class="nk-tb-item nk-tb-head">
                                                              
                                                                
                                                                <div class="nk-tb-col "><span>Name</span></div>
                                                                <div class="nk-tb-col "><span>Price</span></div>
                                                                <div class="nk-tb-col "><span>Period</span></div>
                                                                <div class="nk-tb-col"><span>Description</span></div>
                                                                <div class="nk-tb-col"><span>Items</span></div>
                                                                
                                                                
                                                            </div><!-- .nk-tb-item -->
                                                            @foreach($plans as $item)
                                                            <div class="nk-tb-item">
                                                              
                                                                <div class="nk-tb-col">
                                                                  <!--  -->
                                                                    <span class="tb-product">
                                                                        <img src="{{asset('products/images/')}}" alt="" class="thumb">
                                                                        <span class="title">{{$item->name}}</span>
                                                                    </span>
                                                                </div>
                                                                <div class="nk-tb-col">
                                                                    <span class="tb-lead">{{$item->price}}</span>
                                                                </div>
                                                                <div class="nk-tb-col">
                                                                    <span class="tb-lead">{{$item->invoice_period}} Days</span>
                                                                </div>
                                                                
                                                               
                                                                <div class="nk-tb-col ">
                                                                    <span class="tb-sub">{{$item->description}}</span>
                                                                </div>

                                                                  <div class="nk-tb-col ">
                                                                    @if(!$item->features->isEmpty())
                                                                    @foreach($item->features as $fea)
                                                                    <span class="alert-info">{{$fea->name}}+</span>
                                                                    @endforeach
                                                                   
                                                                    @endif
                                                                </div>


                                                                
                                                               <!--   <div class="nk-tb-col ">
                                                                   <a href="{{route('admin-product-edit',['id'=>$item->id])}}"> <button class="btn btn-primary">Edit</button></a>
                                                                </div>
                                                                 <div class="nk-tb-col ">
                                                                   <a href="{{url('admin/product/delete/'.$item->id)}}"> <button class="btn btn-danger">Delete</button></a>
                                                                </div>
                                                                 -->
                                                              <!--   <div class="nk-tb-col ">
                                                                    <ul class="nk-tb-actions gx-1 my-n1">
                                                                        <li class="mr-n1">
                                                                            <div class="dropdown">
                                                                                <a href="#" class="dropdown-toggle btn btn-icon btn-trigger" data-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                                                
                                                                            </div>
                                                                        </li>
                                                                    </ul>
                                                                </div> -->
                                                            </div><!-- .nk-tb-item -->
                                                            @endforeach
                                                            
                                                          
                                                          
                                                        </div><!-- .nk-tb-list -->
                                                        <div class="card">
                                                            <div class="card-inner">
                                                                <div class="nk-block-between-md g-3">
                                                                    <div class="g">
                                                                        <ul class="pagination justify-content-center justify-content-md-start">
                                                                            <li class="page-item"><a class="page-link" href="#"><em class="icon ni ni-chevrons-left"></em></a></li>
                                                                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                                                                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                                                                            <li class="page-item"><span class="page-link"><em class="icon ni ni-more-h"></em></span></li>
                                                                            <li class="page-item"><a class="page-link" href="#">6</a></li>
                                                                            <li class="page-item"><a class="page-link" href="#">7</a></li>
                                                                            <li class="page-item"><a class="page-link" href="#"><em class="icon ni ni-chevrons-right"></em></a></li>
                                                                        </ul><!-- .pagination -->
                                                                    </div>
                                                                    <div class="g">
                                                                        <div class="pagination-goto d-flex justify-content-center justify-content-md-start gx-3">
                                                                            <div>Page</div>
                                                                            <div>
                                                                                <select class="form-select form-select-sm" data-search="on" data-dropdown="xs center">
                                                                                    <option value="page-1">1</option>
                                                                                    <option value="page-2">2</option>
                                                                                    <option value="page-4">4</option>
                                                                                    <option value="page-5">5</option>
                                                                                    <option value="page-6">6</option>
                                                                                    <option value="page-7">7</option>
                                                                                    <option value="page-8">8</option>
                                                                                    <option value="page-9">9</option>
                                                                                    <option value="page-10">10</option>
                                                                                    <option value="page-11">11</option>
                                                                                    <option value="page-12">12</option>
                                                                                    <option value="page-13">13</option>
                                                                                    <option value="page-14">14</option>
                                                                                    <option value="page-15">15</option>
                                                                                    <option value="page-16">16</option>
                                                                                    <option value="page-17">17</option>
                                                                                    <option value="page-18">18</option>
                                                                                    <option value="page-19">19</option>
                                                                                    <option value="page-20">20</option>
                                                                                </select>
                                                                            </div>
                                                                            <div>OF 102</div>
                                                                        </div>
                                                                    </div><!-- .pagination-goto -->
                                                                </div><!-- .nk-block-between -->
                                                            </div>
                                                        </div>
                                                      </div>
                    				                </div>
                                                    </div>
                                                    <div class="tab-pane active" id="tabItem5">
                                                     <div class="nk-content ">
                                                        <div class="nk-block">
                                                        <div class="nk-tb-list is-separate mb-3">
                                                            <div class="nk-tb-item nk-tb-head">
                                                              
                                                                
                                                                <div class="nk-tb-col "><span>Name</span></div>
                                                                <div class="nk-tb-col "><span>Price</span></div>
                                                                <div class="nk-tb-col "><span>Period</span></div>
                                                                <div class="nk-tb-col"><span>Description</span></div>
                                                                <div class="nk-tb-col"><span>Items</span></div>
                                                                 <div class="nk-tb-col"><span>Action</span></div>
                                                                
                                                                
                                                            </div><!-- .nk-tb-item -->
                                                            @foreach($planrequests as $item)
                                                            <div class="nk-tb-item">
                                                              
                                                                <div class="nk-tb-col">
                                                                  <!--  -->
                                                                    <span class="tb-product">
                                                                        <img src="{{asset('products/images/')}}" alt="" class="thumb">
                                                                        <span class="title">{{$item->name}}</span>
                                                                    </span>
                                                                </div>
                                                                <div class="nk-tb-col">
                                                                    <span class="tb-lead">{{$item->price}}</span>
                                                                </div>
                                                                <div class="nk-tb-col">
                                                                    <span class="tb-lead">{{$item->invoice_period}} Days</span>
                                                                </div>
                                                                
                                                               @if($item->status==0)
                                                                <div class="nk-tb-col ">
                                                                    <span class="tb-sub">{{$item->description}}</span>
                                                                </div>
                                                                 <div class="nk-tb-col ">
                                                                     <form method="post" action="{{route('admin-subscription-confirm',['id'=>$item->order_id])}}">
                                                        @csrf
                                                        <input type="hidden" name="user_id" value="{{$item->user_id}}">
                                                        <input type="hidden" name="plan_id" value="{{$item->id}}">
                                                
                                                                <button type="submit" class="btn btn-icon btn-primary d-md-none"><em class="icon ni ni-plus"></em><span>Confirm</span></button>
                                                                <button type="submit" class="btn btn-primary d-none d-md-inline-flex"><em class="icon ni ni-plus"></em><span>Confirm</span></button>
                                                    </form>
                                            </div>
                                            @endif



                                                                
                                                               <!--   <div class="nk-tb-col ">
                                                                   <a href="{{route('admin-product-edit',['id'=>$item->id])}}"> <button class="btn btn-primary">Edit</button></a>
                                                                </div>
                                                                 <div class="nk-tb-col ">
                                                                   <a href="{{url('admin/product/delete/'.$item->id)}}"> <button class="btn btn-danger">Delete</button></a>
                                                                </div>
                                                                 -->
                                                              <!--   <div class="nk-tb-col ">
                                                                    <ul class="nk-tb-actions gx-1 my-n1">
                                                                        <li class="mr-n1">
                                                                            <div class="dropdown">
                                                                                <a href="#" class="dropdown-toggle btn btn-icon btn-trigger" data-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                                                
                                                                            </div>
                                                                        </li>
                                                                    </ul>
                                                                </div> -->
                                                            </div><!-- .nk-tb-item -->
                                                            @endforeach
                                                            
                                                          
                                                          
                                                        </div><!-- .nk-tb-list -->
                                                        <div class="card">
                                                            <div class="card-inner">
                                                                <div class="nk-block-between-md g-3">
                                                                    <div class="g">
                                                                        <ul class="pagination justify-content-center justify-content-md-start">
                                                                            <li class="page-item"><a class="page-link" href="#"><em class="icon ni ni-chevrons-left"></em></a></li>
                                                                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                                                                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                                                                            <li class="page-item"><span class="page-link"><em class="icon ni ni-more-h"></em></span></li>
                                                                            <li class="page-item"><a class="page-link" href="#">6</a></li>
                                                                            <li class="page-item"><a class="page-link" href="#">7</a></li>
                                                                            <li class="page-item"><a class="page-link" href="#"><em class="icon ni ni-chevrons-right"></em></a></li>
                                                                        </ul><!-- .pagination -->
                                                                    </div>
                                                                    <div class="g">
                                                                        <div class="pagination-goto d-flex justify-content-center justify-content-md-start gx-3">
                                                                            <div>Page</div>
                                                                            <div>
                                                                                <select class="form-select form-select-sm" data-search="on" data-dropdown="xs center">
                                                                                    <option value="page-1">1</option>
                                                                                    <option value="page-2">2</option>
                                                                                    <option value="page-4">4</option>
                                                                                    <option value="page-5">5</option>
                                                                                    <option value="page-6">6</option>
                                                                                    <option value="page-7">7</option>
                                                                                    <option value="page-8">8</option>
                                                                                    <option value="page-9">9</option>
                                                                                    <option value="page-10">10</option>
                                                                                    <option value="page-11">11</option>
                                                                                    <option value="page-12">12</option>
                                                                                    <option value="page-13">13</option>
                                                                                    <option value="page-14">14</option>
                                                                                    <option value="page-15">15</option>
                                                                                    <option value="page-16">16</option>
                                                                                    <option value="page-17">17</option>
                                                                                    <option value="page-18">18</option>
                                                                                    <option value="page-19">19</option>
                                                                                    <option value="page-20">20</option>
                                                                                </select>
                                                                            </div>
                                                                            <div>OF 102</div>
                                                                        </div>
                                                                    </div><!-- .pagination-goto -->
                                                                </div><!-- .nk-block-between -->
                                                            </div>
                                                        </div>
                                                      </div>
                                                     </div>
                                                    </div>                                                     
                                                    </div>
                                            </div>
                                        </div><!-- .card-preview -->
                                        </div>
                                    </div>
                                   
							    </div>
							  
							  
							   
@endsection