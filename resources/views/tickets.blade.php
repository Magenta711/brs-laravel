@extends('layout.app')
@section('content')

    <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col">
                    Tickets
                </div>
                <div class="col text-right">
                    <a href="{{route('buyers')}}" class="btn btn-sm btn-link">Buyers</a>
                </div>
            </div>
        </div>
        <div class="card-body">
            @include('includes.tickets.form')
            <br />
            @include('includes.tickets.list')
        </div>
    </div>

@endsection