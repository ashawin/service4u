@extends('app.app')
@section('content')
<div class="nk-block nk-block-lg">
                                        <div class="nk-block-head">
                                            <div class="nk-block-head-content">
                                                <h4 class="title nk-block-title">Validation - Alternet Style</h4>
                                                <div class="nk-block-des">
                                                    <p>You can add <code class="code-class">.is-alter</code> with <code class="code-class">.form-validate</code> class then all the error message show different style.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card">
                                        	@if(session()->has('msg'))
                                        	<p class=" alert alert-success">{{session()->get('msg')}}</p>
                                        	@endif
                                            <div class="card-inner">
                                                <form action="{{route('admin-service-save')}}" class="form-validate is-alter" method="post">
                                                	@csrf
                                                    <div class="row g-gs">
                                                          <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label class="form-label" for="fva-topics"> Select Category</label>
                                                                <div class="form-control-wrap ">
                                                                    <select class="form-control form-select" id="category" name="category_id" data-placeholder="Select a option" required>
                                                                    	<option  value="" selected>Select</option>
                                                                    	@foreach($categories as $cat)
                                                                        <option  value="{{$cat->id}}">{{$cat->category}}</option>
                                                                        @endforeach
                                                                       
                                                                      
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                            <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label class="form-label" for="fva-topics"> Select SubCategory</label>
                                                                <div class="form-control-wrap ">
                                                                    <select class="form-control form-select" id="subcategory" name="subcategory_id" data-placeholder="Select a option" required>
                                                                        <option label="empty" value="">Select</option>
                                                                        
                                                                      
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                              <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label class="form-label" for="fva-topics">Select Products</label>
                                                                <div class="form-control-wrap ">
                                                                    <select class="form-control form-select" id="product" name="product_id" data-placeholder="Select a option" required>
                                                                        <option label="Select" value=""></option>
                                                                       
                                                                       
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                      <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label class="form-label" for="fva-topics">Currency Type</label>
                                                                <div class="form-control-wrap ">
                                                                    <select class="form-control form-select" id="fva-topics1" name="currency" data-placeholder="Select a option" required>
                                                                        <option label="empty" value="">Select</option>
                                                                        <option value="Rs" selected>INR </option>
                                                                        <option value="$"> Dollar</option>
                                                                        <option value="£"> Euro</option>
                                                                      
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label class="form-label" for="fva-subject">Price</label>
                                                                <div class="form-control-wrap">
                                                                    <input type="text" class="form-control" id="fva-subject" name="price" required placeholder="Price">
                                                                </div>
                                                            </div>
                                                        </div>
                                                  
                                                         <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label class="form-label" for="fva-topics">Select Country</label>
                                                                <div class="form-control-wrap ">
                                                                    <select class="form-control form-select" id="country" name="country_id" data-placeholder="Select a option" required>
                                                                        <option label="Select" value=""></option>
                                                                        @foreach($countries as $country)
                                                                        <option value="{{$country->id}}"> {{$country->country}}</option>
                                                                        @endforeach
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                         <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label class="form-label" for="fva-topics">Select State</label>
                                                                <div class="form-control-wrap ">
                                                                    <select class="form-control " id="state" name="state_id" data-placeholder="Select a option" required>
                                                                        <option label="Select" value=""></option>
                                                                       
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                          <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label class="form-label" for="fva-topics">Select District</label>
                                                                <div class="form-control-wrap ">
                                                                    <select class="form-control " id="district" name="district_id" data-placeholder="Select a option" required>
                                                                        <option label="Select" value=""></option>
                                                                       
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                         <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label class="form-label" for="fva-topics">Select Area</label>
                                                                <div class="form-control-wrap ">
                                                                    <select class="form-control form-select" id="area" name="area_id" data-placeholder="Select a option" required>
                                                                        <option label="Select" value=""></option>
                                                                   
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                         <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label class="form-label" for="fva-topics">Service Type</label>
                                                                <div class="form-control-wrap ">
                                                                    <select class="form-control form-select" id="" name="type" data-placeholder="Select a option" required>
                                                                        <option label="empty" value="">Select</option>
                                                                        <option value="1">Commercial </option>
                                                                        <option value="0"> Private</option>
                                                                      
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                                <label class="form-label" for="fva-message">Description</label>
                                                                <div class="form-control-wrap">
                                                                    <textarea class="form-control form-control-sm" id="fva-message" name="desc" placeholder="Write your message" required></textarea>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                                <label class="form-label">Hide Price</label>
                                                                <ul class="custom-control-group g-3 align-center">
                                                                  
                                                                    <li>
                                                                        <div class="custom-control custom-checkbox">
                                                                            <input type="checkbox" class="custom-control-input" name="is_price_show" id="fva-com-phone" value="1" >
                                                                            <label class="custom-control-label" for="fva-com-phone">Price</label>
                                                                        </div>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                                <button type="submit" class="btn btn-lg btn-primary">Save</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                 
@endsection


@section('script')

     <script>
        
           $("#country").on('change', function(){
              var val=  $(this).val();
              var html='';

               $.ajax({
               	dataType: "json",
                   type:'POST',
                   url:'admin/ajax/states',
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
                   url:'admin/ajax/districts',
                   data:{"_token": "{{ csrf_token() }}",state:state,country:country},
                   success:function(data) {
                   
		                for(var key in data) {		                
		                	html+='<option value="'+data[key]['id']+'">'+data[key]['district']+'</option>'
		                		               
		            }
		             $('#district').append(html);
                  
                    
                   }
                });

            });

           $("#district").on('change', function(){
              var district=  $(this).val();
               var country=  $('#country').val();
                var state=  $('#state').val();
              
              var html='';

               $.ajax({
               	dataType: "json",
                   type:'POST',
                   url:'admin/ajax/areas',
                   data:{"_token": "{{ csrf_token() }}",state:state,country:country,district:district},
                   success:function(data) {
                   
		                for(var key in data) {		                
		                	html+='<option value="'+data[key]['id']+'">'+data[key]['area']+'</option>'
		                		               
		            }
		             $('#area').append(html);
                  
                    
                   }
                });

            });

              $("#category").on('change', function(){
                
              var id=  $(this).val();
              var html='';

               $.ajax({
               	dataType: "json",
                   type:'POST',
                   url:'admin/ajax/subcategory',
                   data:{"_token": "{{ csrf_token() }}",id:id},
                   success:function(data) {
                   
		                for(var key in data) {		                
		                	html+='<option value="'+data[key]['id']+'">'+data[key]['subcategory']+'</option>'
		                		               
		            }
		             $('#subcategory').append(html);
                  
                    
                   }
                });

            });
              $("#subcategory").on('change', function(){
              var category=  $('#category').val();
              var subcategory=  $(this).val();
              var html='';
               $.ajax({
               	dataType: "json",
                   type:'POST',
                   url:'admin/ajax/products',
                   data:{"_token": "{{ csrf_token() }}",category:category,subcategory:subcategory},
                   success:function(data) {
                   
		                for(var key in data) {		                
		                	html+='<option value="'+data[key]['id']+'">'+data[key]['product']+'</option>'
		                		               
		            }
		             $('#product').append(html);
                  
                    
                   }
                });

            });
        </script>
@endsection