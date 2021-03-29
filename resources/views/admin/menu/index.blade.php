@extends('layouts.dashboard')

@section('title','Slider')

@push('css')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap4.min.css">
@endpush

@section('content')
<div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title ">All Categories</h4>
                  <p class="card-category">Categories in the Menu</p>
                </div>
                <div class="card-header card-header-primary">
                  <a class="btn btn-primary" id="edit" href ='/menu/category-create'> Add New Category </a>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                  <table id="table" class="table table-hover" style="padding-top: 20px;"  cellspacing="4" width="100%">
                    <br>
                      <thead class=" text-primary">
                        
                        <th>
                          Name
                        </th>
                        <th>
                          Slug
                        </th>
                        <th>
                          Created At
                        </th>
                        <th>
                          Updated At
                        </th>
                        <th>
                          Actions
                        </th>
                      </thead>
                      <tbody>
                        @foreach($categories as $category)
                        <tr>
                          
                          <td>
                          {{ $category->cat_name }}
                          </td>
                          <td>
                          {{ $category->slug }}
                          </td>
                          <td>
                          {{ $category->created_at }}
                          </td>
                          <td>
                          {{ $category->updated_at }}
                          </td>
                          <td>
                          <a class="btn btn-sm" rel="tooltip" title="Edit Category" href="/menu/category-create/{{ $category->id }}" style="background-color: #5c9233;">
                            <i class="material-icons">mode_edit</i>
                          </a>
                          <form id="delete-form-{{ $category->id }}" action="/menu/category.destroy/{{ $category->id }}" style="display: none;" method="POST">
                          @csrf
                          @method('DELETE')
                          </form>
                          <button type="button" rel="tooltip" title="Remove" class="btn btn-primary btn-sm" 
                            onclick= "if( confirm ('Are you sure? You want to delete this?')){
                              event.preventDefault();
                              document.getElementById('delete-form-{{ $category->id }}').submit();
                            }
                          else {
                            event.preventDefault();
                          }">
                            <i class="material-icons">delete</i>
                          </button>
                          </td>
                        </tr>
                        @endforeach
                      </tbody>
                    </table>
                  </div>
                </div>
              </div><br>
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title ">All Items</h4>
                  <p class="card-category">Items under the Categories in the Menu</p>
                </div>
                <div class="card-header card-header-primary">
                  <a class="btn btn-primary" id="edit" href ='/menu/item-create'> Add New Item </a>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                  <table id="table2" class="table table-hover" style="padding-top: 20px;"  cellspacing="0" width="100%">
                    <br>
                      <thead class=" text-primary">
                        
                        <th>
                          Name
                        </th>
                        <th>
                          Category Name
                        </th>
                        <th>
                          Description
                        </th>
                        <th>
                          Price
                        </th>
                        <th>
                          Image
                        </th>
                        <th>
                          Actions
                        </th>
                      </thead>
                      <tbody>
                        @foreach($items as $item)
                        <tr>
                          
                          <td>
                          {{ $item->name }}
                          </td>
                          <td>
                          {{ $item->cat_name }}
                          </td>
                          <td>
                          {{ $item->description }}
                          </td>
                          <td>
                          {{ $item->price }}
                          </td>
                          <td>
                          <img class="img-responsive img-thumbnail" src="{{ asset('uploads/item/'.$item->image) }}" style="height: 100px; width: 100px" alt="">
                          </td>
                          <td>
                          <a class="btn btn-sm" rel="tooltip" title="Edit Item" href="/menu/item-create/{{ $item->item_id }}" style="background-color: #5c9233;">
                            <i class="material-icons">mode_edit</i>
                          </a>
                          <form id="delete-form-{{ $item->id }}" action="/menu/item-destroy/{{ $item->item_id }}" style="display: none;" method="GET">
                            @csrf
                            @method('DELETE')
                          </form>
                          <button type="button" rel="tooltip" title="Remove" class="btn btn-primary btn-sm" 
                            onclick= "if( confirm ('Are you sure? You want to delete this?')){
                              event.preventDefault();
                              document.getElementById('delete-form-{{ $item->id }}').submit();
                            }
                          else {
                            event.preventDefault();
                          }">
                            <i class="material-icons">delete</i>
                          </button>
                          </td>
                        </tr>
                        @endforeach
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
</div>
@endsection

@push('scripts')
    <script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.24/js/dataTables.bootstrap4.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#table').DataTable();
            $('#table2').DataTable();
        } );
    </script>
@endpush