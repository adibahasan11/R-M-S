@extends('layouts.dashboard')

@section('title','Slider')

@push('css')

@endpush

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header card-header-primary">
                            <h4 class="title">Add New Slider</h4>
                        </div>
                        <div class="card-content" style="padding-top: 50px; padding-left: 50px; padding-right: 50px; padding-bottom: 50px;">
                            <form method="POST" action="/slider-add" enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group label-floating" style="padding-bottom: 50px;">
                                            <label class="bmd-label-floating">Title</label>
                                            <input type="text" class="form-control" name="title">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group label-floating" style="padding-bottom: 50px;">
                                            <label class="bmd-label-floating">Sub Title</label>
                                            <input type="text" class="form-control" name="sub_title">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                    <div style="padding-bottom: 50px;">
                                        <label class="bmd-label-floating">Image</label><br>
                                        <input class="btn btn-primary" style="background-color: #5c9233;" type="file" name="image">
                                    </div>
                                    </div>
                                </div>
                                <a href="/slider" class="btn btn-primary pull-right">Back</a>
                                <button type="submit" class="btn pull-right" style="background-color: #5c9233;">Save</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
{!! Toastr::message() !!}
@endpush