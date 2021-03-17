@extends('layout.app')

@section('content')
    
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col">
                        <i class="fas fa-users"></i> Buyers
                    </div>
                    <div class="col text-right">
                        <a href="{{route('tickets')}}" class="btn btn-sm btn-link">
                            <i class="fa fa-ticket-alt"></i> Tickets
                        </a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                @include('includes.buyers.form')
                <br />
                @include('includes.buyers.list')
            </div>
        </div>
    </div>

@endsection