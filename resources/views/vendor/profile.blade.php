@extends('vendor.layout.app')
@section('content')
<div class="container wide-xl">
                        <div class="nk-content-inner">
                            
                            <div class="nk-content-body">
                                <div class="nk-content-wrap">
                                    <div class="nk-block-head">
                                        <div class="nk-block-head-content">
                                            <div class="nk-block-head-sub"><span>Account Setting</span></div>
                                            <h2 class="nk-block-title fw-normal">My Profile</h2>
                                            <div class="nk-block-des">
                                                <p>You have full control to manage your own account setting. <span class="text-primary"><em class="icon ni ni-info"></em></span></p>
                                            </div>
                                        </div>
                                    </div><!-- .nk-block-head -->
                                   
                                    <div class="nk-block">
                                        <div class="nk-block-head">
                                            <div class="nk-block-head-content">
                                                <h5 class="nk-block-title">Personal Information</h5>
                                                <div class="nk-block-des">
                                                    <p>Basic info, like your name and address, that you use on this Platform.</p>
                                                </div>
                                            </div>
                                        </div><!-- .nk-block-head -->
                                        <div class="card card-bordered">
                                            <div class="nk-data data-list">
                                                <div class="data-item" data-toggle="modal" data-target="#profile-edit">
                                                    <div class="data-col">
                                                        <span class="data-label">Full Name</span>
                                                        <span class="data-value">{{auth()->user()->name}}</span>
                                                    </div>
                                                    <div class="data-col data-col-end"><span class="data-more"><em class="icon ni ni-forward-ios"></em></span></div>
                                                </div><!-- .data-item -->
                                                <div class="data-item">
                                                    <div class="data-col">
                                                        <span class="data-label">Email</span>
                                                        <span class="data-value">{{auth()->user()->email}}</span>
                                                    </div>
                                                    <div class="data-col data-col-end"><span class="data-more disable"><em class="icon ni ni-lock-alt"></em></span></div>
                                                </div><!-- .data-item -->
                                                <div class="data-item" data-toggle="modal" data-target="#profile-edit">
                                                    <div class="data-col">
                                                        <span class="data-label">Phone Number</span>
                                                        <span class="data-value text-soft">{{auth()->user()->mobile}}</span>
                                                    </div>
                                                    <div class="data-col data-col-end"><span class="data-more"><em class="icon ni ni-forward-ios"></em></span></div>
                                                </div><!-- .data-item -->
                                                <div class="data-item" data-toggle="modal" data-target="#profile-edit">
                                                    <div class="data-col">
                                                        <span class="data-label">Created At</span>
                                                        <span class="data-value">{{auth()->user()->created_at}}</span>
                                                    </div>
                                                    <div class="data-col data-col-end"><span class="data-more"><em class="icon ni ni-forward-ios"></em></span></div>
                                                </div><!-- .data-item -->
                                                <div class="data-item" data-toggle="modal" data-target="#profile-edit">
                                                    <div class="data-col">
                                                        <span class="data-label">Address</span>
                                                        <span class="data-value">{{auth()->user()->address}}</span>
                                                    </div>
                                                    <div class="data-col data-col-end"><span class="data-more"><em class="icon ni ni-forward-ios"></em></span></div>
                                                </div><!-- .data-item -->
                                            </div><!-- .nk-data -->
                                        </div><!-- .card -->
                                        <!-- Another Section -->
                                     
                                    </div><!-- .nk-block -->
                                </div>
                                <!-- footer @s -->
                                
                                <!-- footer @e -->
                            </div>
                        </div>
                    </div>
@endsection