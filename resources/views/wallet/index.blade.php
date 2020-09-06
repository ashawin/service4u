@extends('app.app')
@section('content')
   <div class="nk-content ">
                                            <div class="container-fluid">
                                                <div class="card-inner">
                                                    <div class="card-title-group">
                                                        <div class="card-title">
                                                            <h6 class="title"><span class="mr-2">Transaction</span> <a href="#" class="link d-none d-sm-inline">See History</a></h6>
                                                        </div>
                                                          <div class="card-tools">
                                                          	
                                                          	<ul>
                                                          	 <li class="nk-block-tools-opt">
                                                          
                                                               <a href="#" class="btn btn-icon btn-primary d-md-none" data-toggle="modal" data-target="#categoryForm"><em class="icon ni ni-plus"></em><span>Wallet Rs.{{auth()->user()->balance}}</span></a>
                                                            <a href="#" class="btn btn-primary d-none d-md-inline-flex" data-toggle="modal" data-target="#categoryForm"><em class="icon ni ni-plus"></em><span>Wallet Rs.{{auth()->user()->balance}}</span></a>
                                                        </li>
                                                    </ul>
                                                      &nbsp;&nbsp;
                                                          </div>

                                                        <div class="card-tools">
                                                            <ul class="card-tools-nav">
                                                                <li><a href="#"><span>Paid</span></a></li>
                                                                <li><a href="#"><span>Pending</span></a></li>
                                                                <li class="active"><a href="#"><span>All</span></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card-inner p-0 border-top">
                                                    <div class="nk-tb-list nk-tb-orders">
                                                        <div class="nk-tb-item nk-tb-head">
                                                            <div class="nk-tb-col"><span>Transaction Id.</span></div>
                                                            <div class="nk-tb-col tb-col-sm"><span>Customer</span></div>
                                                             <div class="nk-tb-col tb-col-md"><span>Mobile</span></div>
                                                            <div class="nk-tb-col tb-col-md"><span>Date</span></div>
                                                            <div class="nk-tb-col "><span>Amount</span></div>
                                                             <div class="nk-tb-col tb-col-lg"><span>Type</span></div>
                                                            
                                                            <div class="nk-tb-col"><span class="d-none d-sm-inline">Status</span></div>
                                                            <div class="nk-tb-col"><span class="d-none d-sm-inline">Action</span></div>
                                                            <div class="nk-tb-col"><span>&nbsp;</span></div>
                                                        </div>

                                                        @foreach($transactions as $item)
                                                        <div class="nk-tb-item">
                                                            <div class="nk-tb-col">
                                                                <span class="tb-lead"><a href="#">#{{$item->id}}</a></span>
                                                            </div>
                                                            <div class="nk-tb-col tb-col-sm">
                                                                <div class="user-card">
                                                                    <div class="user-avatar user-avatar-sm bg-purple">
                                                                        <span>AB</span>
                                                                    </div>
                                                                    <div class="user-name">
                                                                        <span class="tb-lead">{{$item->name}}</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="nk-tb-col ">
                                                                <span class="tb-sub">{{$item->mobile}}</span>
                                                            </div>
                                                            <div class="nk-tb-col ">
                                                                <span class="tb-sub text-primary">{{$item->created_at}}</span>
                                                            </div>
                                                            <div class="nk-tb-col">
                                                                <span class="tb-sub tb-amount">{{$item->amount}} <span>Rs</span></span>
                                                            </div>
                                                            <div class="nk-tb-col">
                                                                <span class="badge badge-dot  badge-success">{{$item->type}}</span>
                                                            </div>
                                                            <div class="nk-tb-col">
                                                                <span class="badge badge-dot  badge-success">{{$item->confirmed}}</span>
                                                            </div>
                                                           
                                                        </div>
                                                        @endforeach
                                                     
                                                    </div>
                                                </div>
                                                {{ $transactions->links() }} 
                                            </div><!-- .card -->

                                        </div>

                                        <div class="modal fade" tabindex="-1" id="categoryForm">
							        <div class="modal-dialog" role="document">
							            <div class="modal-content">
							                <div class="modal-header">
							                    <h5 class="modal-title">Add Balance </h5>
							                    <a href="#" class="close" data-dismiss="modal" aria-label="Close">
							                        <em class="icon ni ni-cross"></em>
							                    </a>
							                </div>
							                <div class="modal-body">
							                    <form action="{{route('admin-add-balance',['id'=>auth()->user()->id])}}" class="form-validate is-alter" method="post">
							                    	@csrf
							                        <div class="form-group">
							                            <label class="form-label" for="full-name">Amount</label>
							                            <div class="form-control-wrap">
							                                <input type="text" class="form-control" id="full-name" name="amount" required>
							                            </div>
							                        </div>
							                       
							                        <div class="form-group">
							                            <button type="submit" class="btn btn-lg btn-primary">Save </button>
							                        </div>
							                    </form>
							                </div>
							               
							            </div>
							        </div>
							        </div>
                                    
@endsection