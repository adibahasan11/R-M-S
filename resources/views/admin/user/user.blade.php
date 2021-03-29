@extends('layouts.dashboard')

@section('title','Slider')

@push('css')
@endpush

@section('content')
<div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-8" style="padding-left: 150px;">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title">Your Profile</h4>
                </div>
                <div class="card-body">
                  <form>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <span>
                              <label class="bmd-label-floating">Name</label>
                          <p class="form-control" style="color:black">{{ Auth::user()->name }}</p>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">Email</label>
                        <p class="form-control" style="color:black">{{ Auth::user()->email }}</p>
                        </div>
                      </div>
                    </div><br>
                   
                    <br>
                    <button type="submit" class="btn btn-primary pull-right">Change Password</button>
                    <div class="clearfix"></div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
</div>
@endsection

@push('scripts')
@endpush