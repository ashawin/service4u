@extends('user.layout.app1')
@section('content')
   
            <div id="content" class="site-content" tabindex="-1">
                <div class="container">

                    <nav class="woocommerce-breadcrumb"><a href="{{url('')}}">Home</a><span class="delimiter"><i class="fa fa-angle-right"></i></span>Book</nav>
                                @if(!$errors->isEmpty())
                @foreach ($errors->all() as $error)
                    <div>{{ $error }}</div>
                @endforeach
            @endif
                        @if(session()->has('msg'))
                        <h3 style="text-align: center"class="alert alert-success">{{session()->get('msg')}}</h3>
                        @endif
                          @if(session()->has('msgerror'))
                        <h3 style="text-align: center"class="alert alert-danger">{{session()->get('msgerror')}}</h3>
                        @endif

                        @if($errors->has('email'))
            <h3 style="text-align: center" class="alert alert-danger">{{$errors->first('email')}}</h3>
        @endif
                    <div id="primary" class="content-area">
                        <main id="main" class="site-main">
                            <article class="page type-page status-publish hentry">
                                <header class="entry-header"><h1 itemprop="name" class="entry-title">Book Service</h1></header><!-- .entry-header -->

                                <form enctype="multipart/form-data" action="{{route('user-book-service-save')}}" class="checkout woocommerce-checkout" method="post" name="checkout">
                                    @csrf
                                    @if($type==0)
                                    <input type="hidden" value="{{$service->service_id}}" name="service">
                                    @else
                                    <input type="hidden" value="{{$service->id}}" name="service">
                                    @endif
                                    <input type="hidden" value="{{$type}}" name="type">
                                    <div id="customer_details" class="col2-set">
                                        <div class="col-1">
                                            <div class="woocommerce-billing-fields">
                                                <p id="billing_last_name_field" class="form-row form-row form-row-wide validate-required"><label class="" for="billing_last_name"> Name <abbr title="required" class="required">*</abbr></label><input type="text" value="" placeholder="" id="billing_last_name" name="name" class="input-text " required></p><div class="clear"></div>
                                                

                                            
                                                <p id="billing_email_field" class="form-row form-row form-row-first validate-required validate-email"><label class="" for="billing_email">Email Address <abbr title="required" class="required">*</abbr></label><input type="email" value="" placeholder="" id="billing_email" name="email" class="input-text " required></p>

                                                <p id="billing_phone_field" class="form-row form-row form-row-last validate-required validate-phone"><label class="" for="billing_phone">Phone <abbr title="required" class="required">*</abbr></label><input type="tel" value="" placeholder="" id="billing_phone" name="mobile" class="input-text "required></p><div class="clear"></div>

                                                <p id="billing_country_field" class="form-row form-row form-row-wide validate-required validate-email"><label class="" for="billing_country">Country <abbr title="required" class="required">*</abbr></label> <select class="input-text" id="country" name="country" >
                                                    <option selected>Select Country</option>
                                                    @foreach($countries as $country)
                                                    <option value="{{$country->id}}">{{$country->country}}</option>
                                                    @endforeach
                                                    
                                                  </select>
                                                </p>
                                                <p id="billing_city_field" class="form-row form-row form-row-first  validate-required" data-o_class="form-row form-row form-row-wide address-field validate-required"><label class="" for="billing_city"> State <abbr title="required" class="required">*</abbr></label><select class="input-text" id="state" name="state" >
                                                    <option selected>Select State</option>

                                                   
                                                  </select></p>

                                                <p id="billing_state_field" class="form-row form-row form-row-last validate-required validate-email"><label class="" for="billing_state">Distrcit  <abbr title="required" class="required">*</abbr></label><select class="input-text" id="district" name="district" >
                                                    <option selected>Select Distrcit</option>
                                                   
                                                    
                                                   
                                                    
                                                  </select></p>



                                                <p id="billing_address_1_field" class="form-row form-row form-row-wide address-field validate-required"><label class="" for="billing_address_1">Address <abbr title="required" class="required">*</abbr></label><input type="text" value="" placeholder="Street address" id="billing_address_1" name="address" class="input-text " required></p>
                                                <p id="billing_address_1_field" class="form-row form-row form-row-wide address-field validate-required"><label class="" for="billing_address_1">Address 1 </label><input type="text" value="" placeholder="Street address1" id="billing_address_1" name="address1" class="input-text " ></p>

                                                

                                                
                                            </div>
                                        </div>
                                  
                                      

                                   <div class="col-2">                                        

                                                  <p id="billing_postcode_field" class="form-row form-row form-row-first address-field validate-postcode validate-required" data-o_class="form-row form-row form-row-last address-field validate-required validate-postcode"><label class="" for="billing_postcode">Payment Method <abbr title="required" class="required">*</abbr></label>
                                            <fieldset>
                                                   <h3 id="ship-to-different-address">
                                                    <label class="checkbox" for="ship-to-different-address-checkbox">Cash On Delivery</label>
                                                    <input type="radio" value="1" name="payment_method" class="input-checkbox" id="ship-to-different-address-checkbox">
                                                </h3>
                                          
                                                  <h3 id="ship-to-different-address">
                                                    <label class="checkbox" for="ship-to-different-address-checkbox">Online</label>
                                                    <input type="radio" value="1" name="payment_method" class="input-checkbox" id="ship-to-different-address-checkbox">
                                                </h3>
                                                </fieldset></p>

                                                 <p id="billing_postcode_field" class="form-row form-row form-row-last address-field validate-postcode validate-required" data-o_class="form-row form-row form-row-last address-field validate-required validate-postcode"><label class="" for="billing_postcode">Postcode / ZIP <abbr title="required" class="required">*</abbr></label><input type="text" value="" placeholder="" id="billing_postcode" name="pin" class="input-text " required></p>

                                                  
                                            
                                          
                                        

                                                

                                                <div class="clear"></div>

                                            
                                                  
                                                <p id="billing_postcode_field" class="form-row form-row form-row-last address-field validate-postcode validate-required" data-o_class="form-row form-row form-row-last address-field validate-required validate-postcode"><label class="" for="billing_postcode">Password <abbr title="required" class="required">*</abbr></label><input type="password" value="" placeholder="" id="password" name="password" class="input-text " required="true"></p>

                                                 <p id="billing_postcode_field" class="form-row form-row form-row-last address-field validate-postcode validate-required" data-o_class="form-row form-row form-row-last address-field validate-required validate-postcode"><label class="" for="billing_postcode">Confirm Password <abbr title="required" class="required">*</abbr></label><input type="password" value="" placeholder="" id="billing_postcode" name="password_confirmation" class="input-text " ></p>
                                             

                                    </div>

                                        
                                              
                                    </div>

                                 
                                        <input type="submit" data-value="Place order" value="Place order" class="button alt">
                                   
                                </form>
                            </article>
                        </main><!-- #main -->
                    </div><!-- #primary -->
                </div><!-- .container -->
            </div><!-- #content -->
@endsection
@section('script')
<script>
    $("#country").on('change', function(){

              var val=  $(this).val();
              var html='';

               $.ajax({
                dataType: "json",
                   type:'POST',
                   url:"{{url('admin/ajax/states')}}",
                   data:{"_token": "{{ csrf_token() }}",id:val},
                   success:function(data) {
                        for(var key in data) {                      
                            html+='<option value="'+data[key]['id']+'">'+data[key]['state']+'</option>'
                                               
                    }
                     $('#state').append(html);
                  
                    
                   }
                });

            });


           $("#state").on('change', function(){
              var state=  $(this).val();
               var country=  $('#country').val();
              
              var html='';

               $.ajax({
                dataType: "json",
                   type:'POST',
                   url:"{{url('admin/ajax/districts')}}",
                   data:{"_token": "{{ csrf_token() }}",state:state,country:country},
                   success:function(data) {
                   
                        for(var key in data) {                      
                            html+='<option value="'+data[key]['id']+'">'+data[key]['district']+'</option>'
                                               
                    }
                     $('#district').append(html);
                  
                    
                   }
                });

            });

        </script>
@endsection