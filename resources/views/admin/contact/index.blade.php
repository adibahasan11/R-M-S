@extends('layouts.dashboard')

@section('title','Contact')

@push('css')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap4.min.css">
@endpush

@section('content')
<div class="content">
        <div class="container-fluid" style="padding-left: 110px; padding-right: 150px;">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title ">All Messages</h4>                  
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                  <table id="table" class="table table-hover" style="padding-top: 20px; padding-bottom: 50px;" cellspacing="0" width="100%">
                    <thead class="text-primary">
                        <th>Name</th>
                        <th>Subject</th>
                        <th>Sent At</th>
                        <th>Action</th>
                    </thead>
                    <tbody>
                    @foreach($contacts as $key=>$contact)
                        <tr>
                            <td>{{ $contact->name }}</td>
                            <td>{{ $contact->subject }}</td>
                            <td>{{ $contact->created_at }}</td>
                            <td>
                                <a href="{{ route('contact.show',$contact->id) }}" rel="tooltip" title="Open Message" class="btn btn-success btn-sm" style="background-color: #5c9233; width: 60px;"><i class="material-icons">inbox</i></a>
                                    <form id="delete-form-{{ $contact->id }}" action="{{ route('contact.destroy',$contact->id) }}" style="display: none;" method="POST">
                                        @csrf
                                        @method('DELETE')
                                    </form>
                                    <button type="button" rel="tooltip" title="Delete" class="btn btn-primary btn-sm" onclick="if(confirm('Are you sure? You want to delete this?')){
                                        event.preventDefault();
                                        document.getElementById('delete-form-{{ $contact->id }}').submit();
                                            }else {
                                                event.preventDefault();
                                            }"><i class="material-icons">delete</i>
                                    </button>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                    </table>
                  </div>
                </div>
              </div><br>
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