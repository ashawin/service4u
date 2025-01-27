@extends('vendor.layout.app')
@section('content')
<div class="nk-content-body">
                                <div class="nk-content-wrap">
                                    <div class="nk-block-head nk-block-head-lg">
                                        
                                        <div class="nk-block-between-md g-4">
                                            <div class="nk-block-head-content">
                                                <h2 class="nk-block-title fw-normal">Services</h2>
                                               
                                            </div>
                                            
                                        </div>
                                    </div><!-- .nk-block-head -->
                                    @if(session()->has('msg'))
                                    <p class="alert alert-success">{{session()->get('msg')}}</p>
                                    @endif
                                     <ul class="nk-nav nav nav-tabs">
                                        
                                        <li class="nav-item">
                                            <a class="nav-link active " href="#services" data-toggle="tab" >Services</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#pending" data-toggle="tab">My Service</a>
                                        </li>
                                      
                                      
                                    </ul><!-- nav-tabs -->
                                    <div class="tab-content">
                                        <div class="tab-pane active  "id="services">
                                            <table class="table table-tickets">
                                                <thead class="tb-ticket-head">
                                                    <tr class="tb-ticket-title">
                                                        <th class="tb-ticket-id"><span>Id</span></th>
                                                        <th class="tb-ticket-desc">
                                                            <span>Category</span>
                                                        </th>
                                                        <th class="tb-ticket-date ">
                                                            <span>SubCategory</span>
                                                        </th>
                                                        <th class="tb-ticket-seen ">
                                                            <span>Product</span>
                                                        </th>
                                                        <th class="tb-ticket-status">
                                                            <span>Area</span>
                                                        </th>
                                                        
                                                        <th class="tb-ticket-action"> Action </th>
                                                    </tr><!-- .tb-ticket-title -->
                                                </thead>
                                                <tbody class="tb-ticket-body">
                                                	@foreach($services as $service)
                                                    <tr class="tb-ticket-item ">
                                                        <td class="tb-ticket-id"><a href="#">{{$service->service_id}}</a></td>
                                                        <td class="tb-ticket-desc">
                                                            <a href="#"><span class="title">{{$service->category}}</span></a>
                                                        </td>
                                                        <td class="tb-ticket-date ">
                                                            <span class="date">{{$service->subcategory}}</span>
                                                        </td>
                                                        <td class="tb-ticket-seen ">
                                                            <span class="date-last">{{$service->product}}</span>
                                                        </td>
                                                        <td class="tb-ticket-status">
                                                            <span class="badge badge-success">{{$service->country}},{{$service->state}},{{$service->district}}, {{$service->area}}</span>
                                                        </td>
                                                        <td class="tb-ticket-action">
                                                            <form method="post" action="{{route('vendor-service-request')}}">
                                                                @csrf
                                                                <input type="hidden" name="service_id" value="{{$service->service_id}}">

                                                            <button  class="btn btn-success ">
                                                                Request
                                                                
                                                            </button >
                                                        </form>
                                                        </td>

                                                    </tr><!-- .tb-ticket-item -->
                                                    @endforeach
                                                
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="tab-pane" id="pending">
                                            <table class="table table-tickets">
                                                <thead class="tb-ticket-head">
                                                    <tr class="tb-ticket-title">
                                                        <th class="tb-ticket-id"><span>Id</span></th>
                                                        <th class="tb-ticket-desc">
                                                            <span>Category</span>
                                                        </th>
                                                        <th class="tb-ticket-date tb-col-md">
                                                            <span>SubCategory</span>
                                                        </th>
                                                        <th class="tb-ticket-seen tb-col-md">
                                                            <span>Product</span>
                                                        </th>
                                                        <th class="tb-ticket-status">
                                                            <span>Area</span>
                                                        </th>
                                                        <!-- <th class="tb-ticket-action"> Status </th> -->
                                                    </tr><!-- .tb-ticket-title -->
                                                </thead>
                                                <tbody class="tb-ticket-body">
                                                    @foreach($myservices as $pending)
                                                    <tr class="tb-ticket-item ">
                                                        <td class="tb-ticket-id"><a href="html/subscription/ticket-details.html">{{$pending->service_id}}</a></td>
                                                        <td class="tb-ticket-desc">
                                                            <a href="html/subscription/ticket-details.html"><span class="title">{{$pending->category}}</span></a>
                                                        </td>
                                                        <td class="tb-ticket-date tb-col-md">
                                                            <span class="date">{{$pending->subcategory}}</span>
                                                        </td>
                                                        <td class="tb-ticket-seen tb-col-md">
                                                            <span class="date-last">{{$pending->product}}</span>
                                                        </td>
                                                        <td class="tb-ticket-status">
                                                            <span class="badge badge-success">{{$pending->country}},{{$pending->state}},{{$pending->district}}, {{$pending->area}}</span>
                                                        </td>
                                                      
                                                      <!--   <td class="tb-ticket-status">
                                                        	<span class="badge badge-danger">Pending</span>
                                                        </td> -->
                                                    </tr><!-- .tb-ticket-item -->
                                                    @endforeach
                                                
                                                </tbody>
                                            </table>
                                        </div>
                                       
                                    </div><!-- .nk-block -->
                                 
                                </div>
                              
                            </div>
@endsection