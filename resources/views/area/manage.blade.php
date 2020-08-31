@extends('app.app')
@section('content')
 <div class="nk-content ">
 <div class="nk-main ">
<div class="nk-wrap ">
 <div class="nk-block nk-block-lg">
                                        <div class="nk-block-head">
                                            <div class="nk-block-head-content">
                                                <h4 class="title nk-block-title">Manage Area</h4>
                                                <div class="nk-block-des">
                                                    
                                                </div>
                                            </div>
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
                                                        <a class="nav-link active" data-toggle="tab" href="#tabItem5"><em class="icon ni ni-user"></em><span>Country</span></a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" data-toggle="tab" href="#tabItem6"><em class="icon ni ni-lock-alt"></em><span>State</span></a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" data-toggle="tab" href="#tabItem7"><em class="icon ni ni-bell"></em><span>District</span></a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" data-toggle="tab" href="#tabItem8"><em class="icon ni ni-link"></em><span>Area</span></a>
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
									                                            <h3 class="nk-block-title page-title">Country</h3>
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
									                                                            
									                                                           
									                                                             <a href="#" class="btn btn-icon btn-primary d-md-none" data-toggle="modal" data-target="#countryForm"><em class="icon ni ni-plus"></em><span>Add </span></a>
									                                                            <a href="#" class="btn btn-primary d-none d-md-inline-flex" data-toggle="modal" data-target="#countryForm"><em class="icon ni ni-plus"></em><span>Add </span></a>
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
									                                            <div class="nk-tb-col "><span>Name</span></div>
									                                            
									                                            <div class="nk-tb-col"><span>Action</span></div>
									                                       
									                                           <!--  <div class="nk-tb-col nk-tb-col-tools">
									                                                <ul class="nk-tb-actions gx-1 my-n1">
									                                                    <li>
									                                                        <div class="drodown">
									                                                            <a href="#" class="dropdown-toggle btn btn-icon btn-trigger mr-n1" data-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
									                                                            <div class="dropdown-menu dropdown-menu-right">
									                                                                <ul class="link-list-opt no-bdr">
									                                                                    <li><a href="#"><em class="icon ni ni-edit"></em><span>Update Status</span></a></li>
									                                                                    <li><a href="#"><em class="icon ni ni-truck"></em><span>Mark as Delivered</span></a></li>
									                                                                    <li><a href="#"><em class="icon ni ni-money"></em><span>Mark as Paid</span></a></li>
									                                                                    <li></li>
									                                                                    <li><a href="#"><em class="icon ni ni-trash"></em><span>Remove Orders</span></a></li>
									                                                                </ul>
									                                                            </div>
									                                                        </div>
									                                                    </li>
									                                                </ul>
									                                            </div> -->
									                                        </div><!-- .nk-tb-item -->
									                                        @foreach($country as $item)
									                                        <div class="nk-tb-item">
									                                            <div class="nk-tb-col nk-tb-col-check">
									                                                <div class="custom-control custom-control-sm custom-checkbox notext">
									                                                    <input type="checkbox" class="custom-control-input" id="uid1">
									                                                    <label class="custom-control-label" for="uid1"></label>
									                                                </div>
									                                            </div>
									                                            <div class="nk-tb-col">
									                                                <span class="tb-lead"><a href="#">{{$item->id}}</a></span>
									                                            </div>
									                                            <div class="nk-tb-col">
									                                                <span class="tb-lead"><a href="#">{{$item->country}}</a></span>
									                                            </div>
									                                          
									                                             <div class="nk-tb-col ">
                                                                                    <a href="{{url('admin/country/delete/'.$item->id)}}"> <button class="btn btn-danger">Delete</button></a>
                                                                                  </div>
									                                          
									                                           
									                                         <!--    <div class="nk-tb-col nk-tb-col-tools">
									                                                <ul class="nk-tb-actions gx-1">
									                                                    <li class="nk-tb-action-hidden"><a href="#" class="btn btn-icon btn-trigger btn-tooltip" title="Mark as Delivered" data-toggle="dropdown">
									                                                            <em class="icon ni ni-truck"></em></a></li>
									                                                    <li class="nk-tb-action-hidden"><a href="#" class="btn btn-icon btn-trigger btn-tooltip" title="View Order" data-toggle="dropdown">
									                                                            <em class="icon ni ni-eye"></em></a></li>
									                                                    <li>
									                                                        <div class="drodown mr-n1">
									                                                            <a href="#" class="dropdown-toggle btn btn-icon btn-trigger" data-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
									                                                            <div class="dropdown-menu dropdown-menu-right">
									                                                                <ul class="link-list-opt no-bdr">
									                                                                    <li><a href="#"><em class="icon ni ni-eye"></em><span>Order Details</span></a></li>
									                                                                    <li><a href="#"><em class="icon ni ni-truck"></em><span>Mark as Delivered</span></a></li>
									                                                                    <li><a href="#"><em class="icon ni ni-money"></em><span>Mark as Paid</span></a></li>
									                                                                    <li><a href="#"><em class="icon ni ni-report-profit"></em><span>Send Invoice</span></a></li>
									                                                                    <li><a href="#"><em class="icon ni ni-trash"></em><span>Remove Order</span></a></li>
									                                                                </ul>
									                                                            </div>
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
									                                            <h3 class="nk-block-title page-title">State</h3>
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
									                                                           
									                                                             <a href="#" class="btn btn-icon btn-primary d-md-none" data-toggle="modal" data-target="#stateForm"><em class="icon ni ni-plus"></em><span>Add </span></a> 
									                                                            <a href="#" class="btn btn-primary d-none d-md-inline-flex" data-toggle="modal" data-target="#stateForm"><em class="icon ni ni-plus"></em><span>Add </span></a>
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
									                                            <div class="nk-tb-col "><span>Country</span></div>
									                                           
									                                            <div class="nk-tb-col "><span>State</span></div>
									                                            <div class="nk-tb-col "><span>Action</span></div>
									                                            
									                                        </div>
									                                        @foreach($states as $item)
									                                        <div class="nk-tb-item">
									                                            <div class="nk-tb-col nk-tb-col-check">
									                                                <div class="custom-control custom-control-sm custom-checkbox notext">
									                                                    <input type="checkbox" class="custom-control-input" id="uid1">
									                                                    <label class="custom-control-label" for="uid1"></label>
									                                                </div>
									                                            </div>
									                                            <div class="nk-tb-col">
									                                                <span class="tb-lead"><a href="#">{{$item->id}}</a></span>
									                                            </div>
									                                            <div class="nk-tb-col ">
									                                                <span class="tb-sub">{{$item->country}}</span>
									                                            </div>
																				<div class="nk-tb-col ">
									                                                <span class="tb-sub">{{$item->state}}</span>
									                                            </div>
									                                            

									                                            <div class="nk-tb-col ">
                                               <a href="{{url('admin/state/delete/'.$item->id)}}"> <button class="btn btn-danger">Delete</button></a>
                                           </div>
									                                          
									                                            
									                                          <!--   <div class="nk-tb-col ">
									                                                <ul class="nk-tb-actions gx-1">
									                                                    <li class="nk-tb-action-hidden"><a href="#" class="btn btn-icon btn-trigger btn-tooltip" title="Mark as Delivered" data-toggle="dropdown">
									                                                            <em class="icon ni ni-truck"></em></a></li>
									                                                    <li class="nk-tb-action-hidden"><a href="#" class="btn btn-icon btn-trigger btn-tooltip" title="View Order" data-toggle="dropdown">
									                                                            <em class="icon ni ni-eye"></em></a></li>
									                                                    <li>
									                                                        <div class="drodown mr-n1">
									                                                            <a href="#" class="dropdown-toggle btn btn-icon btn-trigger" data-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
									                                                            <div class="dropdown-menu dropdown-menu-right">
									                                                                <ul class="link-list-opt no-bdr">
									                                                                    <li><a href="#"><em class="icon ni ni-eye"></em><span>Order Details</span></a></li>
									                                                                    <li><a href="#"><em class="icon ni ni-truck"></em><span>Mark as Delivered</span></a></li>
									                                                                    <li><a href="#"><em class="icon ni ni-money"></em><span>Mark as Paid</span></a></li>
									                                                                    <li><a href="#"><em class="icon ni ni-report-profit"></em><span>Send Invoice</span></a></li>
									                                                                    <li><a href="#"><em class="icon ni ni-trash"></em><span>Remove Order</span></a></li>
									                                                                </ul>
									                                                            </div>
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
									                            </div>
									                        </div>
									                    </div>
									                </div>
                                                    </div>
                                                    <div class="tab-pane" id="tabItem8">
                                                         <div class="nk-content ">
									                    <div class="container-fluid">
									                        <div class="nk-content-inner">
									                            <div class="nk-content-body">
									                                <div class="nk-block-head nk-block-head-sm">
									                                    <div class="nk-block-between">
									                                        <div class="nk-block-head-content">
									                                            <h3 class="nk-block-title page-title">Area</h3>
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
									                                                         
									                                                            <a href="#" class="btn btn-icon btn-primary d-md-none" data-toggle="modal" data-target="#areaForm"><em class="icon ni ni-plus"></em><span>Add </span></a>
									                                                            <a href="#" class="btn btn-primary d-none d-md-inline-flex" data-toggle="modal" data-target="#areaForm"><em class="icon ni ni-plus"></em><span>Add </span></a>
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
									                                            <div class="nk-tb-col "><span>Country</span></div>
																				<div class="nk-tb-col "><span>State</span></div>
																				<div class="nk-tb-col "><span>District</span></div>
																				<div class="nk-tb-col "><span>Area</span></div>
																				<div class="nk-tb-col "><span>Action</span></div>
									                                            
									                                               
									                                           
									                                            
									                                            <div class="nk-tb-col nk-tb-col-tools">
									                                                <ul class="nk-tb-actions gx-1 my-n1">
									                                                    <li>
									                                                        <div class="drodown">
									                                                            <a href="#" class="dropdown-toggle btn btn-icon btn-trigger mr-n1" data-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
									                                                            <div class="dropdown-menu dropdown-menu-right">
									                                                                <ul class="link-list-opt no-bdr">
									                                                                    <li><a href="#"><em class="icon ni ni-edit"></em><span>Update Status</span></a></li>
									                                                                    <li><a href="#"><em class="icon ni ni-truck"></em><span>Mark as Delivered</span></a></li>
									                                                                    <li><a href="#"><em class="icon ni ni-money"></em><span>Mark as Paid</span></a></li>
									                                                                    <li><a href="#"><em class="icon ni ni-report-profit"></em><span>Send Invoice</span></a></li>
									                                                                    <li><a href="#"><em class="icon ni ni-trash"></em><span>Remove Orders</span></a></li>
									                                                                </ul>
									                                                            </div>
									                                                        </div>
									                                                    </li>
									                                                </ul>
									                                            </div>
									                                        </div><!-- .nk-tb-item -->
									                                        @foreach($areas as $area)
									                                        <div class="nk-tb-item">
									                                            <div class="nk-tb-col nk-tb-col-check">
									                                                <div class="custom-control custom-control-sm custom-checkbox notext">
									                                                    <input type="checkbox" class="custom-control-input" id="uid1">
									                                                    <label class="custom-control-label" for="uid1"></label>
									                                                </div>
									                                            </div>
									                                            <div class="nk-tb-col">
									                                                <span class="tb-lead"><a href="#">{{$area->area_id}}</a></span>
									                                            </div>
									                                            <div class="nk-tb-col ">
									                                                <span class="tb-sub">{{$area->country}}</span>
									                                            </div>
									                                            <div class="nk-tb-col ">
									                                                <span class="tb-sub">{{$area->state}}</span>
									                                            </div>
									                                            <div class="nk-tb-col ">
									                                                <span class="tb-sub">{{$area->district}}</span>
									                                            </div>
									                                            <div class="nk-tb-col ">
									                                                <span class="tb-sub">{{$area->area}}</span>
									                                            </div>
									                                             <div class="nk-tb-col ">
									                                               <a href="{{url('admin/area/delete/'.$area->area_id)}}"> <button class="btn btn-danger">Delete</button></a>
									                                           </div>
									                                           <!--  <div class="nk-tb-col nk-tb-col-tools">
									                                                <ul class="nk-tb-actions gx-1">
									                                                    <li class="nk-tb-action-hidden"><a href="#" class="btn btn-icon btn-trigger btn-tooltip" title="Mark as Delivered" data-toggle="dropdown">
									                                                            <em class="icon ni ni-truck"></em></a></li>
									                                                    <li class="nk-tb-action-hidden"><a href="#" class="btn btn-icon btn-trigger btn-tooltip" title="View Order" data-toggle="dropdown">
									                                                            <em class="icon ni ni-eye"></em></a></li>
									                                                    <li>
									                                                        <div class="drodown mr-n1">
									                                                            <a href="#" class="dropdown-toggle btn btn-icon btn-trigger" data-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
									                                                            <div class="dropdown-menu dropdown-menu-right">
									                                                                <ul class="link-list-opt no-bdr">
									                                                                    <li><a href="#"><em class="icon ni ni-eye"></em><span>Order Details</span></a></li>
									                                                                    <li><a href="#"><em class="icon ni ni-truck"></em><span>Mark as Delivered</span></a></li>
									                                                                    <li><a href="#"><em class="icon ni ni-money"></em><span>Mark as Paid</span></a></li>
									                                                                    <li><a href="#"><em class="icon ni ni-report-profit"></em><span>Send Invoice</span></a></li>
									                                                                    <li><a href="#"><em class="icon ni ni-trash"></em><span>Remove Order</span></a></li>
									                                                                </ul>
									                                                            </div>
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
									                            </div>
									                        </div>
									                    </div>
									                </div>
                                                    </div>
                                                    <div class="tab-pane" id="tabItem7">
                                                         <div class="nk-content ">
									                    <div class="container-fluid">
									                        <div class="nk-content-inner">
									                            <div class="nk-content-body">
									                                <div class="nk-block-head nk-block-head-sm">
									                                    <div class="nk-block-between">
									                                        <div class="nk-block-head-content">
									                                            <h3 class="nk-block-title page-title">Districts</h3>
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
									                                                            

									                                                            <a href="#" class="btn btn-icon btn-primary d-md-none" data-toggle="modal" data-target="#districtForm"><em class="icon ni ni-plus"></em><span>Add </span></a>
									                                                            <a href="#" class="btn btn-primary d-none d-md-inline-flex" data-toggle="modal" data-target="#districtForm"><em class="icon ni ni-plus"></em><span>Add </span></a>
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
									                                            <div class="nk-tb-col "><span>Country</span></div>
									                                            <div class="nk-tb-col"><span >State</span></div>
									                                            <div class="nk-tb-col"><span>District</span></div>

									                                             <div class="nk-tb-col"><span >Action</span></div>
									                                            
									                                            
									                                           <!--  <div class="nk-tb-col nk-tb-col-tools">
									                                                <ul class="nk-tb-actions gx-1 my-n1">
									                                                    <li>
									                                                        <div class="drodown">
									                                                            <a href="#" class="dropdown-toggle btn btn-icon btn-trigger mr-n1" data-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
									                                                            <div class="dropdown-menu dropdown-menu-right">
									                                                                <ul class="link-list-opt no-bdr">
									                                                                    <li><a href="#"><em class="icon ni ni-edit"></em><span>Update Status</span></a></li>
									                                                                    <li><a href="#"><em class="icon ni ni-truck"></em><span>Mark as Delivered</span></a></li>
									                                                                    <li><a href="#"><em class="icon ni ni-money"></em><span>Mark as Paid</span></a></li>
									                                                                    <li><a href="#"><em class="icon ni ni-report-profit"></em><span>Send Invoice</span></a></li>
									                                                                    <li><a href="#"><em class="icon ni ni-trash"></em><span>Remove Orders</span></a></li>
									                                                                </ul>
									                                                            </div>
									                                                        </div>
									                                                    </li>
									                                                </ul>
									                                            </div> -->
									                                        </div><!-- .nk-tb-item -->
									                                      
									                                      
									                                        @foreach($districts as $item)
									                                        <div class="nk-tb-item">
									                                            <div class="nk-tb-col nk-tb-col-check">
									                                                <div class="custom-control custom-control-sm custom-checkbox notext">
									                                                    <input type="checkbox" class="custom-control-input" id="uid2">
									                                                    <label class="custom-control-label" for="uid2"></label>
									                                                </div>
									                                            </div>
									                                            <div class="nk-tb-col">
									                                                <span class="tb-lead"><a href="#">{{$item->dis_id}}</a></span>
									                                            </div>
									                                            <div class="nk-tb-col ">
									                                                <span class="tb-sub">{{$item->country}}</span>
									                                            </div>
									                                             <div class="nk-tb-col ">
									                                                <span class="tb-sub">{{$item->state}}</span>
									                                            </div>
									                                            <div class="nk-tb-col ">
									                                                <span class="tb-sub">{{$item->district}}</span>
									                                            </div>

									                                             <div class="nk-tb-col ">
									                                               <a href="{{url('admin/district/delete/'.$item->dis_id)}}"> <button class="btn btn-danger">Delete</button></a>
									                                           </div>
									                                           
									                                         
									                                       <!--      <div class="nk-tb-col nk-tb-col-tools">
									                                                <ul class="nk-tb-actions gx-1">
									                                                    <li class="nk-tb-action-hidden"><a href="#" class="btn btn-icon btn-trigger btn-tooltip" title="Mark as Delivered" data-toggle="dropdown">
									                                                            <em class="icon ni ni-truck"></em></a></li>
									                                                    <li class="nk-tb-action-hidden"><a href="#" class="btn btn-icon btn-trigger btn-tooltip" title="View Order" data-toggle="dropdown">
									                                                            <em class="icon ni ni-eye"></em></a></li>
									                                                    <li>
									                                                    <li>
									                                                        <div class="drodown mr-n1">
									                                                            <a href="#" class="dropdown-toggle btn btn-icon btn-trigger" data-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
									                                                            <div class="dropdown-menu dropdown-menu-right">
									                                                                <ul class="link-list-opt no-bdr">
									                                                                    <li><a href="#"><em class="icon ni ni-eye"></em><span>Order Details</span></a></li>
									                                                                    <li><a href="#"><em class="icon ni ni-truck"></em><span>Mark as Delivered</span></a></li>
									                                                                    <li><a href="#"><em class="icon ni ni-money"></em><span>Mark as Paid</span></a></li>
									                                                                    <li><a href="#"><em class="icon ni ni-report-profit"></em><span>Send Invoice</span></a></li>
									                                                                    <li><a href="#"><em class="icon ni ni-trash"></em><span>Remove Order</span></a></li>
									                                                                </ul>
									                                                            </div>
									                                                        </div>
									                                                    </li>
									                                                </ul>
									                                            </div> -->
									                                        </div><!-- .nk-tb-item -->
									                                        @endforeach
									                                       
									                                    </div><!-- .nk-tb-list -->
									                                    
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
                                    <div class="modal fade" tabindex="-1" id="countryForm">
							        <div class="modal-dialog" role="document">
							            <div class="modal-content">
							                <div class="modal-header">
							                    <h5 class="modal-title">Add Country </h5>
							                    <a href="#" class="close" data-dismiss="modal" aria-label="Close">
							                        <em class="icon ni ni-cross"></em>
							                    </a>
							                </div>
							                <div class="modal-body">
							                    <form action="{{route('admin-country-save')}}" class="form-validate is-alter" method="post">
							                    	@csrf
							                        <div class="form-group">
							                            <label class="form-label" for="full-name">Name</label>
							                            <div class="form-control-wrap">
							                                <input type="text" class="form-control" id="full-name" name="country" required>
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
							     <div class="modal fade" tabindex="-1" id="stateForm">
							        <div class="modal-dialog" role="document">
							            <div class="modal-content">
							                <div class="modal-header">
							                    <h5 class="modal-title">Add State</h5>
							                    <a href="#" class="close" data-dismiss="modal" aria-label="Close">
							                        <em class="icon ni ni-cross"></em>
							                    </a>
							                </div>
							                <div class="modal-body">
							                    <form action="{{route('admin-state-save')}}" class="form-validate is-alter" method="post">
							                    	@csrf
							                        <div class="form-group">
                                                            <label class="form-label">Country</label>
                                                            <div class="form-control-wrap">
                                                                <select class="form-select form-control form-control-lg" data-search="on" required name="country_id" >
                                                                    <option value="" seleted>Select Country</option>
                                                                    @foreach($country as $item)
                                                                    <option value="{{$item->id}}">{{$item->country}}</option>
                                                                    @endforeach
                                                                   
                                                                </select>
                                                            </div>
                                                        </div>
							                        <div class="form-group">
							                            <label class="form-label" for="email-address">State</label>
							                            <div class="form-control-wrap">
							                                <input type="text" class="form-control" id="email-address" name="state" required>
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
							      <div class="modal fade" tabindex="-1" id="districtForm">
							        <div class="modal-dialog" role="document">
							            <div class="modal-content">
							                <div class="modal-header">
							                    <h5 class="modal-title">Add District</h5>
							                    <a href="#" class="close" data-dismiss="modal" aria-label="Close">
							                        <em class="icon ni ni-cross"></em>
							                    </a>
							                </div>
							                <div class="modal-body">
							                    <form action="{{route('admin-save-district')}}" class="" method="post">
							                    	@csrf
							                    
                                                              <label class="form-label">Country</label>
                                                            <div class="form-control-wrap">
                                                                <select class="form-select form-control " data-search="on" required name="country_id" id="country">
                                                                      <option value="" seleted>Select Country</option>
                                                                    @foreach($country as $item)
                                                                    <option value="{{$item->id}}">{{$item->country}}</option>
                                                                    @endforeach
                                                                   
                                                                </select>
                                                            </div>
							                        <label class="form-label">State</label>
                                                            <div class="form-control-wrap">
                                                                <select class="form-select form-control form-control-lg" data-search="on" required name="state_id" id="state">
                                                                	  <option value="" seleted>Select Country</option>
                                                                  @foreach($states as $state)
                                                                    <option value="{{$state->id}}">{{$state->state}}</option>
                                                                    @endforeach
                                                                   
                                                                </select>
                                                            </div>
							                        <div class="form-group">
							                            <label class="form-label" for="phone-no">District</label>
							                            <div class="form-control-wrap">
							                                <input type="text" class="form-control" id="phone-no" name="district">
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
							       <div class="modal fade" tabindex="-1" id="areaForm">
							       <div class="modal-dialog" role="document">
							            <div class="modal-content">
							                <div class="modal-header">
							                    <h5 class="modal-title">Add Area</h5>
							                    <a href="#" class="close" data-dismiss="modal" aria-label="Close">
							                        <em class="icon ni ni-cross"></em>
							                    </a>
							                </div>
							                <div class="modal-body">
							                    <form action="{{route('admin-save-area')}}" class="form-validate is-alter" method="post">
							                    	@csrf
							                       <label class="form-label">Country</label>
                                                            <div class="form-control-wrap">
                                                                <select class="form-select form-control form-control-lg"  required name="country_id" id="country_id_value" data-search="on">
                                                                    <option value="" seleted>Select Country</option>
                                                                    @foreach($country as $item)
                                                                    <option value="{{$item->id}}">{{$item->country}}</option>
                                                                    @endforeach
                                                                   
                                                                </select>
                                                            </div>
							                        <label class="form-label">State</label>
                                                            <div class="form-control-wrap">
                                                                <select class="form-select form-control form-control-lg" data-search="on" required name="state_id">
                                                                    <option value="" seleted>Select Country</option>
                                                                    @foreach($states as $state)
                                                                    <option value="{{$state->id}}">{{$state->state}}</option>
                                                                    @endforeach
                                                                   
                                                                </select>
                                                            </div>
							                        
							                            <label class="form-label" for="phone-no">District</label>
							                              <div class="form-control-wrap">
                                                                <select class="form-select form-control form-control-lg" data-search="on" required name="district_id">
                                                                    <option value="" seleted>Select District</option>
                                                                    @foreach($districts as $item)
                                                                    <option value="{{$item->dis_id}}">{{$item->district}}</option>
                                                                    @endforeach
                                                                   
                                                                </select>
                                                            </div>

                                                          <label class="form-label" for="phone-no">Area</label>
							                              <div class="form-control-wrap">
                                                               <textarea class="form-control" name="area"></textarea>
                                                          </div>
														  <br>							                       
							                      
							                        <div class="form-group">
							                            <button type="submit" class="btn btn-lg btn-primary">Save </button>
							                        </div>

							                    </form>
							                </div>
							               
							            </div>
							        </div>
							    </div>
							  
						</div>
						</div>  
						  
@endsection


