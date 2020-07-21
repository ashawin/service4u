@extends('app.app')
@section('content')
<div class="nk-block nk-block-lg">
    <div class="nk-block-head">
        <div class="nk-block-head-content">
            <h4 class="title nk-block-title">Header and footer</h4>
            <p>Add an optional header and/or footer within a card.</p>
        </div>
    </div>
    <div class="card card-preview">
        <div class="card-inner">
            <div class="row g-gs">
                <div class="col-lg-4">
                    <div class="card">
                        <div class="card-header border-bottom">Manage Area</div>
                        <div class="card-body">
                            <h5 class="card-title">Special title treatment</h5>
                            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                            <a href="{{route('admin-area')}}" class="btn btn-primary">Manage</a>
                        </div>
                        <div class="card-footer border-top text-muted">2 days ago</div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card">
                        <div class="card-header border-bottom">Manage Category</div>
                        <div class="card-inner">
                            <h5 class="card-title">Special title treatment</h5>
                            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- .card-preview -->
</div>

@endsection