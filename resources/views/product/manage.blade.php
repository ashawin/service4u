@extends('app.app')
@section('content')
  <div class="nk-content ">
                    <div class="container-fluid">
                        <div class="nk-content-inner">
                            <div class="nk-content-body">
                                <div class="nk-block-head nk-block-head-sm">
                                    <div class="nk-block-between">
                                        <div class="nk-block-head-content">
                                            <h3 class="nk-block-title page-title">Products</h3>
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
                                                                        <li><a href="#"><span>New Items</span></a></li>
                                                                        <li><a href="#"><span>Featured</span></a></li>
                                                                        <li><a href="#"><span>Out of Stock</span></a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li class="nk-block-tools-opt">
                                                            <a href="#" data-target="addProduct" class="toggle btn btn-icon btn-primary d-md-none"><em class="icon ni ni-plus"></em></a>
                                                            <a href="#" data-target="addProduct" class="toggle btn btn-primary d-none d-md-inline-flex"><em class="icon ni ni-plus"></em><span>Add Product</span></a>
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
                                            <div class="nk-tb-col "><span>Name</span></div>
                                            <div class="nk-tb-col "><span>Category</span></div>
                                            <div class="nk-tb-col "><span>SubCategory</span></div>
                                            <div class="nk-tb-col"><span>Description</span></div>
                                            <div class="nk-tb-col"><span>Action</span></div>
                                            
                                            
                                        </div><!-- .nk-tb-item -->
                                        @foreach($products as $item)
                                        <div class="nk-tb-item">
                                            <div class="nk-tb-col nk-tb-col-check">
                                                <div class="custom-control custom-control-sm custom-checkbox notext">
                                                    <input type="checkbox" class="custom-control-input" id="uid1">
                                                    <label class="custom-control-label" for="uid1"></label>
                                                </div>
                                            </div>
                                            <div class="nk-tb-col">
                                                <?php
                                                $images= array();
                                                $images=explode('|',$item->images);
                                                ?>
                                                <span class="tb-product">
                                                    <img src="{{asset('products/images/'.$images[0])}}" alt="" class="thumb">
                                                    <span class="title">{{$item->product}}</span>
                                                </span>
                                            </div>
                                            <div class="nk-tb-col">
                                                <span class="tb-lead">{{$item->category}}</span>
                                            </div>
                                            <div class="nk-tb-col">
                                                <span class="tb-lead">{{$item->subcategory}}</span>
                                            </div>
                                            
                                           
                                            <div class="nk-tb-col ">
                                                <span class="tb-sub">{{$item->desc}}</span>
                                            </div>
                                            
                                             <div class="nk-tb-col ">
                                               <a href="{{route('admin-product-edit',['id'=>$item->pro_id])}}"> <button class="btn btn-primary">Edit</button></a>
                                            </div>
                                             <div class="nk-tb-col ">
                                               <a href="{{url('admin/product/delete/'.$item->pro_id)}}"> <button class="btn btn-danger">Delete</button></a>
                                            </div>
                                            
                                          <!--   <div class="nk-tb-col ">
                                                <ul class="nk-tb-actions gx-1 my-n1">
                                                    <li class="mr-n1">
                                                        <div class="dropdown">
                                                            <a href="#" class="dropdown-toggle btn btn-icon btn-trigger" data-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                            
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div> -->
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
                                <div class="nk-add-product toggle-slide toggle-slide-right" data-content="addProduct" data-toggle-screen="any" data-toggle-overlay="true" data-toggle-body="true" data-simplebar>
                                    <div class="nk-block-head">
                                        <div class="nk-block-head-content">
                                            <h5 class="nk-block-title">New Product</h5>
                                            <div class="nk-block-des">
                                                <p>Add information and add new product.</p>
                                            </div>
                                        </div>
                                    </div><!-- .nk-block-head -->
                                    <div class="nk-block">
                                         <form method="post" action="{{route('admin-product-save')}}" enctype="multipart/form-data">
                                            @csrf
                                        <div class="row g-3">
                                           
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label class="form-label" for="product-title">Product Title</label>
                                                    <div class="form-control-wrap">
                                                        <input type="text" class="form-control" id="product-title" name="product">
                                                    </div>
                                                </div>
                                            </div>
                                             <div class="col-mb-6">
                                              <div class="form-group">
                                                            <label class="form-label">Category</label>
                                                            <div class="form-control-wrap">
                                                                <select class="form-select form-control form-control-lg" data-search="on" required name="category_id">
                                                               @foreach($category as $item)
                                                                    <option value="{{$item->id}}">{{$item->category}}</option>
                                                                    @endforeach
                                                                   
                                                                </select>
                                                            </div>
                                                        </div>
                                           
                                              
                                            </div>
                                            <div class="col-mb-6">
                                              <div class="form-group">
                                                            <label class="form-label">SubCategory</label>
                                                            <div class="form-control-wrap">
                                                                <select class="form-select form-control form-control-lg" data-search="on" required name="subcategory_id">
                                                              
                                                                       @foreach($subcategory as $item)
                                                                    <option value="{{$item->id}}">{{$item->subcategory}}</option>
                                                                    @endforeach
                                                                </select>
                                                            </div>
                                                        </div>                                             
                                            </div>
                                            
                                            <div class="col-12">
                                                <div class="form-group">
                                                    <label class="form-label" for="category">Description</label>
                                                    <div class="form-control-wrap">
                                                        <textarea class="form-control" name="desc"></textarea> 
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            <div class="col-12">
                                                 <label class="form-label">Images</label>
                                                
                                                        <input type="file" name="images[]" class="form-control dz-message-text" value="Drag and drop file" multiple="true">
                                                   
                                               
                                            </div>
                                            <div class="col-12">
                                                <button type="submit" class="btn btn-primary"><em class="icon ni ni-plus"></em><span>Save</span></button>
                                            </div>
                                      
                                        </div>
                                          </form>

                                    </div><!-- .nk-block -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
@endsection