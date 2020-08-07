@extends('app.app')
@section('content')
 <div class="nk-content ">
<div class="nk-block nk-block-lg">
    <div class="nk-block-head">
        <div class="nk-block-head-content">
            <h4 class="title nk-block-title">Manage Details</h4>
            
        </div>
    </div>
    <div class="card card-preview">
        <div class="card-inner">
            <div class="row g-gs">
                <div class="col-lg-4">
                    <div class="card">
                        <div class="card-header border-bottom">Manage Area</div>
                        <div class="card-body">
                            <h5 class="card-title">Manage Area Details....</h5>
                            <p class="card-text">Manage area like country ,state , distrcit etc.</p>
                            <a href="{{route('admin-area')}}" class="btn btn-primary">Manage</a>
                        </div>
                       
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card">
                        <div class="card-header border-bottom">Manage Category</div>
                        <div class="card-inner">
                            <h5 class="card-title">Manage Category Details...</h5>
                            <p class="card-text">Manage Category and SubCategory</p>
                            <a href="{{route('admin-category')}}" class="btn btn-primary">Manage</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- .card-preview -->
</div>
</div>

@endsection