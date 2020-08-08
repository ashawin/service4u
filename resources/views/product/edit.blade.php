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
                                            <h4 class="title nk-block-title">Edit Product</h4>
                                            <div class="card-inner">
                                                <form action="{{route('admin-product-edit-save')}}" class="" method="post" enctype="multipart/form-data">
                                                	@csrf
                                                    <input type="hidden" value="{{$product->pro_id}}" name="id">
                                                    <div class="row g-gs">
                                                       <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label class="form-label" for="fva-subject">Title</label>
                                                                <div class="form-control-wrap">
                                                                    <input type="text" class="form-control" id="fva-subject" name="product" required placeholder="Title" value="{{$product->product}}">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label class="form-label" for="fva-topics"> Select Category</label>
                                                                <div class="form-control-wrap ">
                                                                    <select class="form-control form-select" id="category" name="category_id" data-placeholder="Select a option" required>
                                                                        <option  value="" selected>Select</option>
                                                                        @foreach($categories as $cat)
                                                                        <?php
                                                                        $select='';
                                                                        if($cat->id==$product->category_id){
                                                                            $select="selected";
                                                                        }
                                                                        ?>
                                                                        <option  {{$select}} value="{{$cat->id}}">{{$cat->category}}</option>
                                                                        @endforeach
                                                                       
                                                                      
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row g-gs">

                                                              <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label class="form-label" for="fva-topics"> Select SubCategory</label>
                                                                <div class="form-control-wrap ">
                                                                    <select class="form-control" id="subcategory" name="subcategory_id" required>
                                                                        <option value="{{$product->subcategory_id}}" selected>{{$product->subcategory}}</option>
                                                                        
                                                                      
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                 
                                                                 <div class="col-md-6">
                                                 <label class="form-label">Images</label>
                                                
                                                        <input type="file" name="images[]" class="form-control dz-message-text" value="Drag and drop file" multiple="true">
                                                   
                                               
                                            </div>
                                               
                                                         
                                                    </div>
                                                            
                                                    

                                                     
                                                  
                                                         
                                                         
                                                     <div class="row g-gs">
                                                      <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label class="form-label" for="fva-message">Images</label>

                                                                <div class="form-control-wrap">
                                                                       <?php
                                                $images= array();
                                                $images=explode('|',$product->images);

                                                ?>
                                                  <input type="hidden" name="oldimages" value="{{$product->images}}">
                                                                    @foreach($images as $image)
                                                                    <img  src="{{asset('products/images/'.$image)}}"  height="50" width="50">
                                                                    @endforeach
                                                                </div>
                                                            </div>
                                                        </div>
                                                     <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label class="form-label" for="fva-message">Description</label>
                                                                <div class="form-control-wrap">
                                                                    <textarea class="form-control form-control-sm" id="fva-message" name="desc" placeholder="Write your message" required>{{$product->desc}}</textarea>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    </div>
                                                    <br>
                                                   
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
              $("#category").on('change', function(){
              var id=  $(this).val();
              var html='';

               $.ajax({
               	dataType: "json",
                   type:'POST',
                   url:'/admin/ajax/subcategory',
                   data:{"_token": "{{ csrf_token() }}",id:id},
                   success:function(data) {
                   
		                for(var key in data) {		                
		                	html+='<option value="'+data[key]['id']+'">'+data[key]['subcategory']+'</option>'
		                		               
		            }
                  $('#subcategory')
                    .empty()
                    .append('<option selected="selected" value="">Select Option</option>');
		             $('#subcategory').append(html);
                  
                    
                   }
                });

            });
            
        </script>
@endsection