@extends('app.app')
@section('content')
 <div class="nk-content ">
                    <div class="container-fluid">
                        <div class="nk-content-inner">
                            <div class="nk-content-body">
                                <div class="nk-block-head nk-block-head-sm">
                                    <div class="nk-block-between">
                                        <div class="nk-block-head-content">
                                            <h3 class="nk-block-title page-title">Service Requests</h3>
                                        </div><!-- .nk-block-head-content -->
                                        @if(session()->has('msg'))
                                        <h3 class="alert alert-success">Sucessfully Assigned</h3>
                                        @endif
                                        <div class="nk-block-head-content">
                                            <div class="toggle-wrap nk-block-tools-toggle">
                                                <a href="#" class="btn btn-icon btn-trigger toggle-expand mr-n1" data-target="pageMenu"><em class="icon ni ni-more-v"></em></a>
                                                <div class="toggle-expand-content" data-content="pageMenu">
                                                    <ul class="nk-block-tools g-3">
                                                        <li>
                                                            <div class="form-control-wrap">
                                                                <div class="form-icon form-icon-right">
                                                                    <em class="icon ni ni-search"></em>
                                                                </div>
                                                                <input type="text" class="form-control" id="default-04" placeholder="Quick search by id">
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="drodown">
                                                                <a href="#" class="dropdown-toggle dropdown-indicator btn btn-outline-light btn-white" data-toggle="dropdown">Status</a>
                                                                <div class="dropdown-menu dropdown-menu-right">
                                                                    <ul class="link-list-opt no-bdr">
                                                                        <li><a href="#"><span>On Hold</span></a></li>
                                                                        <li><a href="#"><span>Delevired</span></a></li>
                                                                        <li><a href="#"><span>Rejected</span></a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </li>
                                                     
                                                    </ul>
                                                </div>
                                            </div>
                                        </div><!-- .nk-block-head-content -->
                                    </div><!-- .nk-block-between -->
                                </div><!-- .nk-block-head -->
                                <div class="nk-block">
                                    <div class="nk-tb-list is-separate is-medium mb-3">
                                        <div class="nk-tb-item nk-tb-head">
                                           
                                            <div class="nk-tb-col"><span>Id</span></div>
                                            <div class="nk-tb-col tb-col-md"><span>Category</span></div>
                                            <div class="nk-tb-col"><span class=" d-mb-block">SubCategory</span></div>
                                            <div class="nk-tb-col "><span>Product</span></div>
                                            <div class="nk-tb-col "><span>Area</span></div>
                                            <div class="nk-tb-col"><span>User</span></div>
                                            <div class="nk-tb-col"><span>Price</span></div>
                                            <div class="nk-tb-col"><span>Action</span></div>
                                            
                                                
                                        </div><!-- .nk-tb-item -->
                                       
                                        @foreach($services as $service)
                                        <div class="nk-tb-item">
                                            
                                            <div class="nk-tb-col">
                                                <span class="tb-lead"><a href="#">{{$service->service_id}}</a></span>
                                            </div>
                                            <div class="nk-tb-col">
                                                <span class="tb-sub">{{$service->category}}</span>
                                            </div>
                                            <div class="nk-tb-col ">
                                                <span class="tb-sub">{{$service->subcategory}}</span>
                                            </div>
                                            <div class="nk-tb-col ">
                                                <span class="tb-sub">{{$service->product}}</span>
                                            </div>

                                            <div class="nk-tb-col">
                                                <span class="dot bg-success d-mb-none"></span>
                                                <span class="badge badge-sm badge-dot has-bg badge-success d-none d-mb-inline-flex">{{$service->area}},{{$service->district}},{{$service->state}},{{$service->country}}</span>
                                            </div>
                                            <div class="nk-tb-col ">
                                                <?php
                                                $type= $service->type=='1'?'Comercial':'Private';
                                                ?>
                                                <span class="tb-sub">{{$type}}</span>
                                            </div>
                                           
                                            <div class="nk-tb-col">
                                                <span class="tb-lead">{{$service->currency}} {{$service->price}}</span>
                                            </div>
                                             <div class="nk-tb-col">
                                                 <a href="#" class="btn btn-icon btn-primary d-md-none"><em class="icon ni ni-plus"></em></a>
                                                 <form method="post" action="{{route('admin-service-request-confirm')}}">
                                                    @csrf
                                                    <input type="hidden" name="service_id" value="{{$service->service_id}}">
                                                     <input type="hidden" name="user_id" value="{{$service->user_id}}">

                                                            <button href="" class="btn btn-primary d-none d-md-inline-flex"><span>Confirm </span></button>
                                                        </form>
                                            </div>
                                            
                                        </div><!-- .nk-tb-item -->
                                       @endforeach
                                    </div><!-- .nk-tb-list -->
                                    {{ $services->links() }}
                                </div><!-- .nk-block -->
                            </div>
                        </div>
                    </div>
                </div>
@endsection