@extends('app.app')
@section('content')
<div class="nk-content ">
                    <div class="container-fluid">
                        <div class="nk-content-inner">
                            <div class="nk-content-body">
                                <div class="nk-block-head nk-block-head-sm">
                                    <div class="nk-block-between">
                                        <div class="nk-block-head-content">
                                            <h3 class="nk-block-title page-title">Balance Reuests</h3>
                                        </div><!-- .nk-block-head-content -->
                                        
                                        <div class="nk-block-head-content">

                                            <div class="toggle-wrap nk-block-tools-toggle">
                                                <a href="#" class="btn btn-icon btn-trigger toggle-expand mr-n1" data-target="more-options"><em class="icon ni ni-more-v"></em></a>
                                                <div class="toggle-expand-content" data-content="more-options">
                                                    <ul class="nk-block-tools g-3">
                                                        <li>
                                                            <div class="form-control-wrap">
                                                                <div class="form-icon form-icon-right">
                                                                    <em class="icon ni ni-search"></em>
                                                                </div>
                                                                <input type="text" class="form-control" id="default-04" placeholder="Search by name">
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="drodown">
                                                                <a href="#" class="dropdown-toggle dropdown-indicator btn btn-outline-light btn-white" data-toggle="dropdown">Status</a>
                                                                <div class="dropdown-menu dropdown-menu-right">
                                                                    <ul class="link-list-opt no-bdr">
                                                                        <li><a href="#"><span>Actived</span></a></li>
                                                                        <li><a href="#"><span>Inactived</span></a></li>
                                                                        <li><a href="#"><span>Blocked</span></a></li>
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
                                  @if(session()->has('msg'))
                                        <h5 class="alert-success">{{session()->get('msg')}}</h5>
                                        @endif
                                <div class="nk-block">
                                    <div class="nk-tb-list is-separate mb-3">
                                        <div class="nk-tb-item nk-tb-head">
                                            <div class="nk-tb-col nk-tb-col-check">
                                               Id
                                            </div>
                                            <div class="nk-tb-col"><span class="sub-text">User</span></div>
                                            <div class="nk-tb-col "><span class="sub-text">Balance</span></div>
                                            <div class="nk-tb-col"><span class="sub-text">Phone</span></div>
                                        
                                            <div class="nk-tb-col "><span class="sub-text">Status</span></div>
                                            <div class="nk-tb-col "><span class="sub-text">Date</span></div>
                                            <div class="nk-tb-col"><span class="sub-text">Action</span></div>
                                           
                                            
                                      
                                        </div><!-- .nk-tb-item -->
                                        <?php
                                        $i=1;
                                        ?>
                                        @foreach($requests as $request)
                                        
                                        <div class="nk-tb-item">
                                            <div class="nk-tb-col ">
                                                <div class="custom-control custom-control-sm custom-checkbox notext">
                                                   {{$i}}
                                                </div>
                                            </div>
                                            <div class="nk-tb-col">
                                                <a href="html/ecommerce/customer-details.html">
                                                    <div class="user-card">
                                                        <div class="user-avatar bg-primary">
                                                            <span>AB</span>
                                                        </div>
                                                        <div class="user-info">{{$request->name}} <span class="dot dot-success d-md-none ml-1"></span></span>
                                                            <span>{{$request->email}}</span>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="nk-tb-col ">
                                                <span class="tb-amount">{{$request->balance}} <span class="currency">Rs</span></span>
                                            </div>
                                            <div class="nk-tb-col ">
                                                <span>{{$request->mobile}}</span>
                                            </div>
                                            <?php

                                            $status= $request->status ==1 ?'pending':'confirmed';
                                            $class= $request->status ==1 ?'danger':'success';
                                            ?>
                                            
                                             <div class="nk-tb-col ">
                                                <span class="tb-status text-{{$class}}">{{$status}}</span>
                                            </div>
                                            <div class="nk-tb-col ">
                                                <span>{{$request->created_at}}</span>
                                            </div>

                                            @if($request->status==1)
                                            <div class="nk-tb-col ">
                                                <form method="post" action="{{route('admin-transfer-balance',['id'=>$request->wal_id,'balance'=>$request->balance])}}">
                                                    @csrf
                                                    <input type="hidden" name="user_id" value="{{$request->user_id}}">
                                            
                                                            <button type="submit" class="btn btn-icon btn-primary d-md-none"><em class="icon ni ni-plus"></em><span>Confirm</span></button>
                                                            <button type="submit" class="btn btn-primary d-none d-md-inline-flex"><em class="icon ni ni-plus"></em><span>Confirm</span></button>
                                                </form>
                                             </div>
                                             @else
                                             
                                              <div class="nk-tb-col ">
                                               
                                                   <a href="{{url('wallet/request/delete/'.$request->wal_id)}}"  class="btn btn-icon btn-danger d-md-none"><em class="icon ni ni-plus"></em><span>delete</span></button>
                                                  </a>
                                                           
                                            
                                             </div>

                                             @endif
                                             <?php
                                             $i++;

                                             ?>
                                           
                                            
                                        </div><!-- .nk-tb-item -->
                                        @endforeach
                                      
                                       
                                   
                                        
                                    </div><!-- .nk-tb-list -->
                                    {{ $requests->links() }}
                                </div><!-- .nk-block -->
                            </div>
                        </div>
                    </div>
                </div>
@endsection