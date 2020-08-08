@extends('app.app')
@section('content')
 <div class="nk-content ">
 <div class="nk-main ">
<div class="nk-wrap ">
 <div class="nk-block nk-block-lg">
                                        <div class="nk-block-head">
                                           
                                        </div>
                                        <div class="card card-preview">
                                        	@if(session()->has('msg'))
                                        	  <div class="example-alert">
                                                            <div class="alert alert-success alert-icon">
                                                                <em class="icon ni ni-check-circle"></em> <strong>{{session()->get('msg')}}</strong> </div>
                                                        </div>
                                        	@endif
                                            <div class="card-inner">
                                                <ul class="nav nav-tabs mt-n3">
                                                    <li class="nav-item">
                                                        <a class="nav-link active" data-toggle="tab" href="#tabItem5"><em class="icon ni ni-user"></em><span>Category</span></a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" data-toggle="tab" href="#tabItem6"><em class="icon ni ni-lock-alt"></em><span>Subcategory</span></a>
                                                    </li>
                                                   
                                                </ul>
                                                <div class="tab-content">
                                                    <div class="tab-pane active" id="tabItem5">
									                 <div class="nk-content ">
                    <div class="container-fluid">
                        <div class="nk-content-inner">
                            <div class="nk-content-body">
                                <div class="nk-block-head nk-block-head-sm">
                                    <div class="nk-block-between">
                                        <div class="nk-block-head-content">
                                            <h3 class="nk-block-title page-title">Category</h3>
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
                                                                        <li><a href="{{url('categoryController')}}"><span>Delete</span></a></li>
                                                                        <li><a href="#"><span>Inactived</span></a></li>
                                                                        <li><a href="#"><span>Blocked</span></a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li class="nk-block-tools-opt">
                                                           
                                                              <button  class="btn btn-icon btn-primary d-md-none" data-toggle="modal" data-target="#categoryForm"><em class="icon ni ni-plus" ></em><span>Add</span></button>
                                                            <button  class="btn btn-primary d-none d-md-inline-flex" data-toggle="modal" data-target="#categoryForm"><em class="icon ni ni-plus" ></em><span>Add</span></button>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div><!-- .nk-block-head-content -->
                                    </div><!-- .nk-block-between -->
                                </div><!-- .nk-block-head -->
                                <div class="nk-block">
                                    <div class="nk-tb-list is-separate mb-3">
                                        <div class="nk-tb-item nk-tb-head">
                                            <div class="nk-tb-col nk-tb-col-check">
                                                <div class="custom-control custom-control-sm custom-checkbox notext">
                                                    <input type="checkbox" class="custom-control-input" id="uid">
                                                    <label class="custom-control-label" for="uid"></label>
                                                </div>
                                            </div>
                                            <div class="nk-tb-col"><span class="sub-text">Id</span></div>
                                            <div class="nk-tb-col "><span class="sub-text">Category</span></div>
                                             <div class="nk-tb-col "><span class="sub-text">Action</span></div>
                                           
                                            
                                        </div>
                                        @foreach($categories as $cat)
                                        <div class="nk-tb-item">
                                            <div class="nk-tb-col nk-tb-col-check">
                                                <div class="custom-control custom-control-sm custom-checkbox notext">
                                                    <input type="checkbox" class="custom-control-input" id="uid1">
                                                    <label class="custom-control-label" for="uid1"></label>
                                                </div>
                                            </div>
                                            <div class="nk-tb-col">
                                                <a href="html/ecommerce/customer-details.html">
                                                    <div class="user-card">
                                                     
                                                        <div class="user-info">
                                                            
                                                            <span>{{$cat->id}}</span>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="nk-tb-col">
                                                <span class="tb-amount"> <span class="currency">{{$cat->category}}</span></span>
                                            </div>
                                             <div class="nk-tb-col ">
                                               <a href="{{url('admin/category/delete/'.$cat->id)}}"> <button class="btn btn-danger">Delete</button></a>
                                            </div>
                                           
                                        </div><!-- .nk-tb-item -->
                                        @endforeach
                                       
                                    
                                      
                                    
                                     
                                    
                                    </div><!-- .nk-tb-list -->
                                    <div class="card">
                                        <div class="card-inner">
                                            <div class="nk-block-between-md g-3">
                                                <div class="g">
                                                    <ul class="pagination justify-content-center justify-content-md-start">
                                                        <li class="page-item"><a class="page-link" href="#"><em class="icon ni ni-chevrons-left"></em></a></li>
                                                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                                                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                                                        <li class="page-item"><span class="page-link"><em class="icon ni ni-more-h"></em></span></li>
                                                        <li class="page-item"><a class="page-link" href="#">6</a></li>
                                                        <li class="page-item"><a class="page-link" href="#">7</a></li>
                                                        <li class="page-item"><a class="page-link" href="#"><em class="icon ni ni-chevrons-right"></em></a></li>
                                                    </ul><!-- .pagination -->
                                                </div>
                                                <div class="g">
                                                    <div class="pagination-goto d-flex justify-content-center justify-content-md-start gx-3">
                                                        <div>Page</div>
                                                        <div>
                                                            <select class="form-select form-select-sm" data-search="on" data-dropdown="xs center">
                                                                <option value="page-1">1</option>
                                                                <option value="page-2">2</option>
                                                                <option value="page-4">4</option>
                                                                <option value="page-5">5</option>
                                                                <option value="page-6">6</option>
                                                                <option value="page-7">7</option>
                                                                <option value="page-8">8</option>
                                                                <option value="page-9">9</option>
                                                                <option value="page-10">10</option>
                                                                <option value="page-11">11</option>
                                                                <option value="page-12">12</option>
                                                                <option value="page-13">13</option>
                                                                <option value="page-14">14</option>
                                                                <option value="page-15">15</option>
                                                                <option value="page-16">16</option>
                                                                <option value="page-17">17</option>
                                                                <option value="page-18">18</option>
                                                                <option value="page-19">19</option>
                                                                <option value="page-20">20</option>
                                                            </select>
                                                        </div>
                                                        <div>OF 102</div>
                                                    </div>
                                                </div><!-- .pagination-goto -->
                                            </div><!-- .nk-block-between -->
                                        </div>
                                    </div>
                                </div><!-- .nk-block -->
                            </div>
                        </div>
                    </div>
                </div>
                                                    </div>
                                                    <div class="tab-pane" id="tabItem6">
                                                         <div class="nk-content ">
									                     <div class="container-fluid">
									                        <div class="nk-content-inner">
									                            <div class="nk-content-body">
									                                <div class="nk-block-head nk-block-head-sm">
									                                    <div class="nk-block-between">
									                                        <div class="nk-block-head-content">
									                                            <h3 class="nk-block-title page-title">SubCategory</h3>
									                                        </div><!-- .nk-block-head-content -->
									                                        <div class="nk-block-head-content">
									                                            <div class="toggle-wrap nk-block-tools-toggle">
									                                                <a href="#" class="btn btn-icon btn-trigger toggle-expand mr-n1" data-target="pageMenu"><em class="icon ni ni-more-v"></em></a>
									                                                <div class="toggle-expand-content" data-content="pageMenu">
									                                                    <ul class="nk-block-tools g-3">
									                                                        <li>
									                                                            <div class="form-control-wrap">
									                                                                <div class="form-icon form-icon-right">
									                                                                    <em class="icon ni ni-search"></em>
									                                                                </div>
									                                                                <input type="text" class="form-control" id="default-04" placeholder="Quick search by id">
									                                                            </div>
									                                                        </li>
									                                                        <li>
									                                                            <div class="drodown">
									                                                                <a href="#" class="dropdown-toggle dropdown-indicator btn btn-outline-light btn-white" data-toggle="dropdown">Status</a>
									                                                                <div class="dropdown-menu dropdown-menu-right">
									                                                                    <ul class="link-list-opt no-bdr">
									                                                                        <li><a href="#"><span>On Hold</span></a></li>
									                                                                        <li><a href="#"><span>Delevired</span></a></li>
									                                                                        <li><a href="#"><span>Rejected</span></a></li>
									                                                                    </ul>
									                                                                </div>
									                                                            </div>
									                                                        </li>
									                                                        <li class="nk-block-tools-opt">
									                                                        
                                                                                                 <a href="#" class="btn btn-icon btn-primary d-md-none" data-toggle="modal" data-target="#subcatForm" data-toggle="modal" data-target="#categoryForm"><em class="icon ni ni-plus"></em><span>Add </span></a>
									                                                            <a href="#" class="btn btn-primary d-none d-md-inline-flex" data-toggle="modal" data-target="#subcatForm" data-toggle="modal" data-target="#categoryForm"><em class="icon ni ni-plus"></em><span>Add </span></a>
									                                                        </li>
									                                                    </ul>
									                                                </div>
									                                            </div>
									                                        </div><!-- .nk-block-head-content -->
									                                    </div><!-- .nk-block-between -->
									                                </div><!-- .nk-block-head -->
									                                <div class="nk-block">
									                                    <div class="nk-tb-list is-separate is-medium mb-3">
									                                        <div class="nk-tb-item nk-tb-head">
									                                            <div class="nk-tb-col nk-tb-col-check">
									                                                <div class="custom-control custom-control-sm custom-checkbox notext">
									                                                    <input type="checkbox" class="custom-control-input" id="uid">
									                                                    <label class="custom-control-label" for="uid"></label>
									                                                </div>
									                                            </div>
									                                            <div class="nk-tb-col"><span>Id</span></div>
									                                            <div class="nk-tb-col "><span>Category</span></div>
									                                           
									                                            <div class="nk-tb-col"><span>Subcategory</span></div>
									                                             <div class="nk-tb-col "><span>Action</span></div>
									                                            
									                                        </div><!-- .nk-tb-item -->
									                                       @foreach($subcategory as $subcat)
									                                        <div class="nk-tb-item">
									                                            <div class="nk-tb-col nk-tb-col-check">
									                                                <div class="custom-control custom-control-sm custom-checkbox notext">
									                                                    <input type="checkbox" class="custom-control-input" id="uid1">
									                                                    <label class="custom-control-label" for="uid1"></label>
									                                                </div>
									                                            </div>
									                                             <div class="nk-tb-col">
									                                                <span class="tb-lead"><a href="#">{{$subcat->sub_id}}</a></span>
									                                            </div>
									                                            <div class="nk-tb-col">
									                                                <span class="tb-lead"><a href="#">{{$subcat->category}}</a></span>
									                                            </div>
									                                            <div class="nk-tb-col">
									                                                <span class="tb-sub">{{$subcat->subcategory}}</span>
									                                            </div>
									                                         
									                                           <div class="nk-tb-col ">
                                               <a href="{{url('admin/subcategory/delete/'.$subcat->sub_id)}}"> <button class="btn btn-danger">Delete</button></a>
                                            </div>
									                                            
									                                          
									                                        </div><!-- .nk-tb-item -->
									                                        @endforeach
									                                        
									                                     
									                                    </div><!-- .nk-tb-list -->
									                                    <div class="card">
									                                        <div class="card-inner">
									                                            <div class="nk-block-between-md g-3">
									                                                <div class="g">
									                                                    <ul class="pagination justify-content-center justify-content-md-start">
									                                                        <li class="page-item"><a class="page-link" href="#"><em class="icon ni ni-chevrons-left"></em></a></li>
									                                                        <li class="page-item"><a class="page-link" href="#">1</a></li>
									                                                        <li class="page-item"><a class="page-link" href="#">2</a></li>
									                                                        <li class="page-item"><span class="page-link"><em class="icon ni ni-more-h"></em></span></li>
									                                                        <li class="page-item"><a class="page-link" href="#">6</a></li>
									                                                        <li class="page-item"><a class="page-link" href="#">7</a></li>
									                                                        <li class="page-item"><a class="page-link" href="#"><em class="icon ni ni-chevrons-right"></em></a></li>
									                                                    </ul><!-- .pagination -->
									                                                </div>
									                                                <div class="g">
									                                                    <div class="pagination-goto d-flex justify-content-center justify-content-md-start gx-3">
									                                                        <div>Page</div>
									                                                        <div>
									                                                            <select class="form-select form-select-sm" data-search="on" data-dropdown="xs center">
									                                                                <option value="page-1">1</option>
									                                                                <option value="page-2">2</option>
									                                                                <option value="page-4">4</option>
									                                                                <option value="page-5">5</option>
									                                                                <option value="page-6">6</option>
									                                                                <option value="page-7">7</option>
									                                                                <option value="page-8">8</option>
									                                                                <option value="page-9">9</option>
									                                                                <option value="page-10">10</option>
									                                                                <option value="page-11">11</option>
									                                                                <option value="page-12">12</option>
									                                                                <option value="page-13">13</option>
									                                                                <option value="page-14">14</option>
									                                                                <option value="page-15">15</option>
									                                                                <option value="page-16">16</option>
									                                                                <option value="page-17">17</option>
									                                                                <option value="page-18">18</option>
									                                                                <option value="page-19">19</option>
									                                                                <option value="page-20">20</option>
									                                                            </select>
									                                                        </div>
									                                                        <div>OF 102</div>
									                                                    </div>
									                                                </div><!-- .pagination-goto -->
									                                            </div><!-- .nk-block-between -->
									                                        </div>
									                                    </div>
									                                </div><!-- .nk-block -->
									                            </div>
									                        </div>
									                    </div>
									                </div>
                                                    </div>
                                                   
                                                 
                                                </div>
                                            </div>
                                        </div><!-- .card-preview -->
                                        </div>
                                    </div>
                                    <div class="modal fade" tabindex="-1" id="categoryForm">
							        <div class="modal-dialog" role="document">
							            <div class="modal-content">
							                <div class="modal-header">
							                    <h5 class="modal-title">Add Category </h5>
							                    <a href="#" class="close" data-dismiss="modal" aria-label="Close">
							                        <em class="icon ni ni-cross"></em>
							                    </a>
							                </div>
							                <div class="modal-body">
							                    <form action="{{route('admin-category-save')}}" class="form-validate is-alter" method="post">
							                    	@csrf
							                        <div class="form-group">
							                            <label class="form-label" for="full-name">Name</label>
							                            <div class="form-control-wrap">
							                                <input type="text" class="form-control" id="full-name" name="category" required>
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
							    </div>
							    <div class="modal fade" tabindex="-1" id="subcatForm">
							     <div class="modal-dialog" role="document">
							            <div class="modal-content">
							                <div class="modal-header">
							                    <h5 class="modal-title">Add SubCategory</h5>
							                    <a href="#" class="close" data-dismiss="modal" aria-label="Close">
							                        <em class="icon ni ni-cross"></em>
							                    </a>
							                </div>
							                <div class="modal-body">
							                    <form action="{{route('admin-subcategory-save')}}" class="form-validate is-alter" method="post">
							                    	@csrf
							                        <div class="form-group">
                                                            <label class="form-label">Category</label>
                                                            <div class="form-control-wrap">
                                                                <select class="form-select form-control form-control-lg" data-search="on" required name="category_id">
                                                                    <option value="" seleted>Select Category</option>
                                                                    @foreach($categories as $item)
                                                                    <option value="{{$item->id}}">{{$item->category}}</option>
                                                                    @endforeach
                                                                   
                                                                </select>
                                                            </div>
                                                        </div>
							                        <div class="form-group">
							                            <label class="form-label" for="email-address">SubCategory</label>
							                            <div class="form-control-wrap">
							                                <input type="text" class="form-control" id="email-address" name="subcategory" required>
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
							     
							  
							 <div class="nk-content ">   
							   
@endsection