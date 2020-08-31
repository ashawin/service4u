@extends('vendor.layout.app')
@section('content')
<div class="nk-content-body">
                                <div class="nk-content-wrap">
                                    <div class="nk-block-head nk-block-head-lg">
                                        
                                        <div class="nk-block-between-md g-4">
                                            <div class="nk-block-head-content">
                                                <h2 class="nk-block-title fw-normal">Orders</h2>
                                               
                                            </div>
                                            
                                        </div>
                                    </div><!-- .nk-block-head -->
                                    @if(session()->has('msg'))
                                    <p class="alert alert-success">{{session()->get('msg')}}</p>
                                    @endif
                                     @if(session()->has('errormsg'))
                                    <p class="alert alert-danger">{{session()->get('errormsg')}}</p>
                                    @endif
                                     <ul class="nk-nav nav nav-tabs">
                                         <li class="nav-item">
                                            <a class="nav-link active" href="#myservice" data-toggle="tab">My Orders</a>
                                        </li>
                                         <li class="nav-item">
                                            <a class="nav-link " href="#services" data-toggle="tab" >Services Orders</a>
                                        </li>
                                         
                                       
                                       
                                      
                                      
                                    </ul><!-- nav-tabs -->
                                    <div class="tab-content">
                                        <div class="tab-pane  "id="services">
                                            <table class="table table-tickets">
                                                <thead class="tb-ticket-head">
                                                    <tr class="tb-ticket-title">
                                                        <th class="tb-ticket-id"><span>Id</span></th>
                                                        <th class="tb-ticket-id">
                                                            <span>Category</span>
                                                        </th>
                                                        <th class="tb-ticket-id ">
                                                            <span>SubCategory</span>
                                                        </th>
                                                        <th class="tb-ticket-id ">
                                                            <span>Product</span>
                                                        </th>
                                                          <th class="tb-ticket-id ">
                                                            <span> Price</span>
                                                        </th>
                                                         <th class="tb-ticket-id ">
                                                            <span>Customer Name</span>
                                                        </th>
                                                        <th class="tb-ticket-id">
                                                            <span>Area</span>
                                                        </th>
                                                        
                                                        <th class="tb-ticket-action"> Action </th>
                                                    </tr><!-- .tb-ticket-title -->
                                                </thead>
                                                <tbody class="tb-ticket-body">
                                                     <?php
                                                    $i=1; 
                                                    ?>
                                                	@foreach($services as $service)
                                                    <tr class="tb-ticket-item ">
                                                        <td class="tb-ticket-id"><a href="html/subscription/ticket-details.html">{{$i}}</a></td>
                                                        <td class="tb-ticket-desc">
                                                            <a href="html/subscription/ticket-details.html"><span class="title">{{$service->category}}</span></a>
                                                        </td>
                                                        <td class="tb-ticket-date ">
                                                            <span class="date">{{$service->subcategory}}</span>
                                                        </td>
                                                        <td class="tb-ticket-seen ">
                                                            <span class="date-last">{{$service->product}}</span>
                                                        </td>
                                                         <td class="tb-ticket-seen ">
                                                            <span class="date-last">{{$service->price}}</span>
                                                        </td>
                                                        <td class="tb-ticket-seen ">
                                                            <span class="date-last">{{$service->name}}</span>
                                                        </td>
                                                        <td class="tb-ticket-status">
                                                            <span class="badge badge-success">{{$service->country}},{{$service->state}},{{$service->district}}, {{$service->area}}</span>
                                                        </td>
                                                        <td class="tb-ticket-action">
                                                            <form id="form-{{$service->order_id}}" method="post" action="{{route('vendor-service-orders-confirm')}}">
                                                                @csrf
                                                                <input type="hidden" name="order_id" value="{{$service->order_id}}">
                                                                <input type="hidden" name="price" value="{{$service->price}}">

                                                            <button type="button" id="{{$service->order_id}}" price="{{$service->price}}" class="btn btn-success " onclick="getconfirm(this)">
                                                                Confirm
                                                                
                                                            </button >
                                                        </form>
                                                        </td>

                                                    </tr><!-- .tb-ticket-item -->
                                                     <?php
                                                    $i++; 
                                                    ?>
                                                    @endforeach
                                                
                                                </tbody>
                                            </table>
                                        </div>
                                      
                                        <div class="tab-pane active" id="myservice">
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
                                                           <th class="tb-ticket-seen tb-col-md">
                                                            <span> Price</span>
                                                        </th>
                                                         <th class="tb-ticket-seen tb-col-md">
                                                            <span>Customer Name</span>
                                                        </th>
                                                           <th class="tb-ticket-seen tb-col-md">
                                                            <span> Mobile</span>
                                                        </th>
                                                         <th class="tb-ticket-seen tb-col-md">
                                                            <span>Email</span>
                                                        </th>
                                                        <th class="tb-ticket-status">
                                                            <span>Area</span>
                                                        </th>
                                                        
                                                       
                                                    </tr><!-- .tb-ticket-title -->
                                                </thead>
                                                <tbody class="tb-ticket-body">
                                                    <?php
                                                    $i=0; 
                                                    ?>
                                                    @foreach($myservices as $service)
                                                  
                                                    <tr class="tb-ticket-item ">
                                                        <td class="tb-ticket-id"><a href="html/subscription/ticket-details.html">{{$i}}</a></td>
                                                        <td class="tb-ticket-desc">
                                                            <a href="html/subscription/ticket-details.html"><span class="title">{{$service->category}}</span></a>
                                                        </td>
                                                        <td class="tb-ticket-date tb-col-md">
                                                            <span class="date">{{$service->subcategory}}</span>
                                                        </td>
                                                        <td class="tb-ticket-seen tb-col-md">
                                                            <span class="date-last">{{$service->product}}</span>
                                                        </td>
                                                        <td class="tb-ticket-seen tb-col-md">
                                                            <span class="date-last">{{$service->price}}</span>
                                                        </td>
                                                        <td class="tb-ticket-seen tb-col-md">
                                                            <span class="date-last">{{$service->name}}</span>
                                                        </td>
                                                        <td class="tb-ticket-seen tb-col-md">
                                                            <span class="date-last">{{$service->mobile}}</span>
                                                        </td>
                                                        <td class="tb-ticket-seen tb-col-md">
                                                            <span class="date-last">{{$service->email}}</span>
                                                        </td>
                                                        <td class="tb-ticket-status">
                                                            <span class="badge badge-success">{{$service->country}},{{$service->state}},{{$service->district}}, {{$service->area}}</span>
                                                        </td>

                                                      

                                                    </tr><!-- .tb-ticket-item -->
                                                      <?php  $i++; 
                                                    ?>
                                                    @endforeach
                                                
                                                </tbody>
                                            </table>
                                        </div>
                                    </div><!-- .nk-block -->
                                 
                                </div>
                              
                            </div>
@endsection

@section('script')
<script>
    function getconfirm(e){
      var id= $(e).attr('id');
      var price =$(e).attr('price');
       var r = confirm("Rs."+price+"  will get deduct from your wallet.");
    if (r == true) {
       
 $( "#form-"+id).submit();
} else {
  e.preventDefault();
}
}
    </script>
@endsection