@extends('layouts.dashboard')

@section('title','Reservation')

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
                  <h4 class="card-title ">Reservation Requests</h4>
                  <p class="card-category"> Both pending and accepted</p>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                  <table id="table" class="table table-hover" style="padding-top: 20px;"  cellspacing="10" width="100%">
                    <br>
                      <thead class=" text-primary">
                        <th>
                          Name
                        </th>
                        <th>
                          Phone
                        </th>
                        <th>
                          Email
                        </th>
                        <th>
                          Date and Time
                        </th>
                        <th>
                          Message
                        </th>
                        <th>
                          Status
                        </th>
                        <th>Action</th>
                      </thead>
                      <tbody>
                        @foreach($reservations as $reservation)
                        <tr>
                          <td>
                          {{ $reservation->name }}
                          </td>
                          <td>
                          {{ $reservation->phone }}
                          </td>
                          <td>
                          {{ $reservation->email }}
                          </td>
                          <td>
                          {{ $reservation->date_and_time }}
                          </td>
                          <td>
                          {{ $reservation->message }}
                          </td>
                          <td class="text-primary">
                              @if ( $reservation->status1 == 'Confirmed')
                                <span class= "label label-info">Confirmed</span>
                              @else
                                <span class= "label label-danger">Not Confirmed yet</span>
                              @endif
                          </td>
                          <td>
                            @if($reservation->status1 == 'Pending')
                              <form id="status-form-{{ $reservation->id }}" action="{{ route('Reservation.status', $reservation->id) }}" style="display: none;" method="POST">
                                @csrf
                              </form>
                              <button rel="tooltip" title="Confirm" type="button" class="btn btn-sm" style="background-color: #5c9233;" 
                                onclick=" if(confirm('Are you sure you want to verify this request by phone?')){
                                  event.preventDefault();
                                  document.getElementById('status-form-{{ $reservation->id }}').submit();
                                        }else {
                                          event.preventDefault();
                                        }">
                                  <i class="material-icons">done</i>
                              </a>
                            @endif
                            <form id="delete-form-{{ $reservation->id }}" action="{{ route('Reservation.destroy', $reservation->id) }}" style="display: none;">
                              @csrf
                              @method('DELETE')
                            </form>
                            <button rel="tooltip" title="Remove" type="button" class="btn btn-primary btn-sm" onclick="if(confirm('Are you sure? You want to delete this?')){
                              event.preventDefault();
                              document.getElementById('delete-form-{{ $reservation->id }}').submit();
                              }else {
                                event.preventDefault();
                                }">
                                <i class="material-icons">delete
                                </i>
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
        } );
    </script>
    {!! Toastr::message() !!}
@endpush