@extends('app.app')
@section('content')
 <div class="nk-content ">
                    <div class="container-fluid">
                        <div class="nk-content-inner">
                            <div class="nk-content-body">
                                <div class="components-preview wide-md mx-auto">
                                   
                                    <div class="nk-block nk-block-lg">
                                        <div class="nk-block-head">
                                            <div class="nk-block-head-content">
                                                <h4 class="title nk-block-title">Add pages</h4>
                                                <div class="nk-block-des">
                                                    <p>Add here pages like privacy policy ,terms & condition like that...</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row g-gs">
                                            <div class="col-lg-12">
                                                <div class="card h-100">
                                                    <div class="card-inner">
                                                       
                                                        <form action="{{route('admin-policy-save')}}" method="post">
                                                            @csrf
                                                            <div class="form-group">
                                                                <label class="form-label" for="full-name">Type</label>
                                                                <select  name="title" class="form-select form-control form-control-lg">
                                                                     <option value="" selected="">Select Option</option>
                                                                    <option value="privacypolicy">Privacy Policy</option>
                                                                    <option value="terms&condition">Terms and  Condition</option>
                                                                  
                                                                </select>
                                                            </div>
                                                          
                                                            

             
                                                            <div class="form-group">
                                                                <label class="form-label" for="pay-amount">Description</label>
                                                                <div class="form-control-wrap">
                                                                     <textarea name="editor1"></textarea>
                                                                </div>
                                                            </div>
                                                        
                                                            <div class="form-group">
                                                                <button type="submit" class="btn btn-lg btn-primary">Save Informations</button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                        </div>
                                    </div><!-- .nk-block -->
                               
                                </div><!-- .components-preview -->
                            </div>
                        </div>
                    </div>
                </div>
@endsection