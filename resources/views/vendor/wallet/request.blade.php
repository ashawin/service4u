@extends('vendor.layout.app')
@section('content')
 <div class="nk-content nk-content-fluid">
                    <div class="container-xl ">
                        <div class="nk-content-body">
                            <div class="buysell ">
                                
                                <div class="buysell-title text-center">
                                    <h2 class="title">Add Balance to your Wallet</h2>
                                </div><!-- .buysell-title -->
                                @if(session()->has('msg'))
                                <h4 class="alert alert-success">{{session()->get('msg')}}</h4>
                                @endif
                                <div class="row" >
                                
                                <div class="col-md-6 col-xxl-4">
                                    <form action="{{route('vendor-wallet-request-save')}}" class="buysell-form">
                                        @csrf
                                      
                                        <div class="buysell-field form-group">
                                          
                                            
                                            <div class="form-control-group">
                                                <input type="text" class="form-control form-control-lg form-control-number" id="buysell-amount" name="amount" placeholder="Enter Amount" required="true">
                                              <!--   <div class="form-dropdown">
                                                    <mountdiv class="text">BTC<span>/</span></div>
                                                    <div class="dropdown">
                                                        <a href="#" class="dropdown-indicator-caret" data-toggle="dropdown" data-offset="0,2">USD</a>
                                                        <div class="dropdown-menu dropdown-menu-xxs dropdown-menu-right text-center">
                                                            <ul class="link-list-plain">
                                                                <li><a href="#">EUR</a></li>
                                                                <li><a href="#">CAD</a></li>
                                                                <li><a href="#">YEN</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div> -->
                                            </div>
                                            <div class="form-note-group">
                                                <span class="buysell-min form-note-alt">Minimum: 10.00 Rs</span>
                                                <span class="buysell-rate form-note-alt">Maximum: 10000 Rs</span>
                                            </div>

                                            
                                        </div><!-- .buysell-field -->
                                        <div class="buysell-field form-group">
                                            <div class="form-label-group">
                                                <label class="form-label">Payment Method</label>
                                            </div>
                                            <div class="form-pm-group">
                                                <ul class="buysell-pm-list">
                                                    <li class="buysell-pm-item">
                                                        <input class="buysell-pm-control" type="radio" name="method" id="pm-paypal" value="1" />
                                                        <label class="buysell-pm-label" for="pm-paypal">
                                                            <span class="pm-name">Admin Request</span>
                                                            <span class="pm-icon"><em class="icon ni ni-paypal-alt"></em></span>
                                                        </label>
                                                    </li>
                                                  
                                                    <li class="buysell-pm-item">
                                                        <input class="buysell-pm-control" type="radio" name="method" id="pm-card"  value="2" />
                                                        <label class="buysell-pm-label" for="pm-card">
                                                            <span class="pm-name">Credit / Debit Card</span>
                                                            <span class="pm-icon"><em class="icon ni ni-cc-alt-fill"></em></span>
                                                        </label>
                                                    </li>
                                                      <li class="buysell-pm-item">
                                                        <input class="buysell-pm-control" type="radio" name="method"  id="pm-bank" value="3" />
                                                        <label class="buysell-pm-label" for="pm-bank">
                                                            <span class="pm-name">Other</span>
                                                            <span class="pm-icon"><em class="icon ni ni-building-fill"></em></span>
                                                        </label>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div><!-- .buysell-field -->
                                        @if($errors->has('method'))
                                        <p class="alert-danger">Please Select The Payment Method</p>
                                        @endif
                                        <div class="buysell-field form-action">
                                            <button type="submit" class="btn btn-lg btn-block btn-primary" >Continue </button>
                                        </div><!-- .buysell-field -->
                                      
                                    </form><!-- .buysell-form -->
                                </div><!-- .buysell-block -->
                                  <div class="col-md-6 col-xxl-4">
                                            <div class="card card-bordered card-full">
                                                <div class="card-inner border-bottom">
                                                    <div class="card-title-group">
                                                        <div class="card-title">
                                                            <h6 class="title">All Requests</h6>
                                                        </div>
                                                        <div class="card-tools">
                                                            <ul class="card-tools-nav">
                                                                <li><a href="#"><span>Status</span></a></li>
                                                                
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <ul class="nk-support">

                                                   @foreach($walletrequets as $request)
                                                    <li class="nk-support-item">
                                                        <div class="user-avatar bg-purple-dim">
                                                            <span>{{$request->balance}}</span>
                                                        </div>
                                                        <div class="nk-support-content">
                                                            <div class="title">
                                                                 <?php
                                                                    $status=$request->status==1 ?'pending':'confirmed';
                                                                    $class=$request->status==1 ?'danger':'success';
                                                                    ?>
                                                                <span>Requested For Rs.{{$request->balance}}</span><span class="badge badge-dot badge-dot-xs badge-{{$class}} ml-1">
                                                                   
                                                                    {{$status}}
                                                                </span>
                                                            </div>
                                                            
                                                            <span class="time">{{$request->created_at}}</span>
                                                        </div>
                                                    </li>
                                                   
                                                    @endforeach
                                                  
                                                </ul>
                                            </div><!-- .card -->
                                        </div><!-- .col --><!-- .nk-block -->
                                </div>
                            </div><!-- .buysell -->
                        </div>
                    </div>
                </div>
@endsection