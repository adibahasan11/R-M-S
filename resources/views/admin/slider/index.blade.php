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
                  <h4 class="card-title ">Sliders Table</h4>
                  <p class="card-category"> All the Slides for the homepage</p>
                </div>
                <div class="card-header card-header-primary">
                  <a class="btn btn-primary" id="edit" href ='/slider-create'> Add New Slider </a>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table id="table" class="table table-hover" style="padding-top: 10px;">
                      <thead class=" text-primary">
                        <th>
                          Title
                        </th>
                        <th>
                          Sub Title
                        </th>
                        <th>
                          Image
                        </th>
                        <th>
                          Created At
                        </th>
                        <th>
                          Updated At
                        </th>
                      </thead>
                      <tbody>
                      @foreach($sliders as $slider)
                        <tr>
                          <td>
                            {{ $slider->title }}
                          </td>
                          <td>
                            {{ $slider->sub_title }}
                          </td>
                          <td>
                            <img class="img-responsive img-thumbnail" src="{{ asset('uploads/slider/'.$slider->image) }}" style="height: 100px; width: 100px" alt="">
                          </td>
                          <td class="text-primary">
                            {{ $slider->created_at }}
                          </td>
                          <td class="text-primary">
                            {{ $slider->updated_at }}
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
@endsection

@push('scripts')
    <script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.24/js/dataTables.bootstrap4.min.js"></script>
    <script>
        $(document).ready(function() {
          $('#table').DataTable();
        } );
    </script>
@endpush