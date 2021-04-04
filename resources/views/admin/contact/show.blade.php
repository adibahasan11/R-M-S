@extends('layouts.dashboard')

@section('title','Contact')

@push('css')

@endpush

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12" style= "padding-left: 220px; padding-right: 220px;">
                    <div class="card">
                        <div class="card-header card-header-primary">
                            <h4 class="title">Subject: {{ $contact->subject }}</h4>
                            <p><strong>Name: {{ $contact->name }}</strong><br></p>
                                   <p><b>Email: {{ $contact->email }}</b> <br></p>
                        </div>
                        <div class="card-body">
                           <div class="row">
                               <div class="col-md-12">
                                    <p class="bmd-label-floating"><strong>Message: </strong></p>
                                    <p>{{ $contact->message }}</p><hr>

                               </div>
                           </div>
                            <a href="{{ route('contact.index') }}" class="btn btn-primary pull-right">Back</a>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')

@endpush