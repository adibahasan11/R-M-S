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
                  <h4 class="card-title">Add New Item</h4>
                </div>
                <div class="card-body">
                  <form method="POST" action="/menu/item-add" enctype="multipart/form-data">
                  @csrf
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <span>
                              <label class="bmd-label-floating">Name</label>
                          <input type="text" class="form-control" name= "name">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <span>
                              <label class="bmd-label-floating">Category</label>
                              <select class="form-control" id="sel1" name="category_id">
                                @foreach($categories as $category)
                                    <option value ="{{$category->id}}" selected = "">{{$category->cat_name}}</option>
                                @endforeach
                              </select>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <span>
                              <label class="bmd-label-floating">Description</label>
                              <input type="text" class="form-control" name= "description">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <span>
                              <label class="bmd-label-floating">Price</label>
                          <input type="text" class="form-control" name= "price">
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