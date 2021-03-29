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
                  <h4 class="card-title">Edit Item Details</h4>
                </div>
                <div class="card-body">
                  <form method="POST" action = "/menu/category-create/<?php echo $category[0]->id; ?>" enctype="multipart/form-data">
                  @csrf
                    <br><br>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <span>
                              <label class="bmd-label-floating">Name</label>
                          <input type="text" class="form-control" name= "cat_name" value = '<?php echo$category[0]->cat_name; ?>'>
                        </div>
                      </div>
                    </div>
                    <br>
                    <a href="/menu" class="btn btn-primary pull-right">Back</a>
                    <button type="submit" class="btn pull-right" style="background-color: #5c9233;">Save</button>
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