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
                                                <form action="{{route('admin-banner-save')}}" class="form-validate is-alter" method="post" enctype='multipart/form-data'>
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
                                                   
                                                       </div>
                                                       <div class="row g-gs">

                                                         <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label class="form-label" for="fva-message">Banner Image</label>
                                                                <div class="form-control-wrap">
                                                                    <input type="file" class="form-control " id="fva-message" name="image" placeholder="Write your message" required>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                            <div class="row g-gs">
                                                          <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label class="form-label" for="fva-topics"> Select Type</label>
                                                                <div class="form-control-wrap ">
                                                                    <select class="form-control form-select" id="category" name="type" data-placeholder="Select a option" required>
                                                                        <option  value="" selected>Select</option>
                                                                     
                                                                        <option  value="mainBanner">Main Banner</option>
                                                                        
                                                                       
                                                                      
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                         <div class="row g-gs">

                                                         <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label class="form-label" for="fva-message">Offer Price</label>
                                                                <div class="form-control-wrap">
                                                                    <input type="text" class="form-control " id="fva-message" name="price" placeholder="price" required>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                   
                                                      
                                                     
                                                       <br>
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
                                         <div class="nk-block nk-block-lg">
                                    
                                        <div class="card card-preview">
                                            <div class="card-inner">
                                                <table class="datatable-init table">
                                                    <thead>
                                                        <tr>
                                                            <th>Type</th>
                                                            <th>Image</th>
                                                            <th>Category</th>
                                                             <th>Price</th>
                                                            <th>Action</th>
                                                           
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach($banners as $ban)
                                                        <tr>
                                                            <td>{{$ban->slug}}</td>
                                                            <td><img src="{{asset('products/banners/'.$ban->image)}}" height="150px" width="150px"></td>
                                                              <td>{{$ban->category}}</td>
                                                             <td>{{$ban->price}}</td>
                                                          
                                                            <td><a href="{{url('admin/banner/delete/'.$ban->id)}}" class="btn btn-danger">Delete</button></td>
                                                         
                                                        </tr>
                                                        @endforeach
                                                     
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div><!-- .card-preview -->
                                    </div> 
                                    </div>

                                     
                                   
               
@endsection


