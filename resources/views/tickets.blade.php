<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>Laravel</title>

        {{-- Styles --}}
        <link rel="stylesheet" href="css/app.css">
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
    </head>
    <body>
            <div class="content">
                {{-- <div id="tickets_component"></div> --}}
                <div class="container mt-4 pt-4">
                    <div class="row justify-content-center">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">Tickets</div>
    
                                <div class="card-body">
                                    <form action="{{route('tickets_store')}}" method="POST">
                                        @csrf
                                        <div class="row">
                                            <div class="form-group col-md-4">
                                                <label>Name</label>
                                                <input
                                                    type="text"
                                                    id="name"
                                                    name="name"
                                                    placeholder="Name"
                                                    class="form-control"
                                                    value="{{old('name')}}"
                                                />
                                            </div>
                                            <div class="form-group col-md-4">
                                                <label>Date time</label>
                                                <input
                                                    type="datetime-local"
                                                    id="date_time"
                                                    name="date_time"
                                                    placeholder="Date time"
                                                    class="form-control"
                                                    value="{{old('date_time')}}"
                                                />
                                            </div>
                                            <div class="form-group col-md-4">
                                                <label>Address</label>
                                                <input
                                                    type="text"
                                                    id="address"
                                                    name="address"
                                                    placeholder="Address"
                                                    class="form-control"
                                                    value="{{old('address')}}"
                                                />
                                            </div>
                                            <hr />
                                            <div class="form-group col-md-4">
                                                <label>Type</label>
                                                <input
                                                    type="text"
                                                    id="type"
                                                    name="type[]"
                                                    placeholder="Type"
                                                    class="form-control"
                                                    value="{{old('type')}}"
                                                />
                                            </div>
                                            <div class="form-group col-md-4">
                                                <label>Amount</label>
                                                <input
                                                    type="number"
                                                    id="amount"
                                                    name="amount[]"
                                                    placeholder="Amount"
                                                    class="form-control"
                                                    value="{{old('amount')}}"
                                                />
                                            </div>
                                            <div class="form-group col-md-4">
                                                <label>Value</label>
                                                <input
                                                    type="number"
                                                    id="value"
                                                    name="value[]"
                                                    placeholder="Value"
                                                    class="form-control"
                                                    value="{{old('value')}}"
                                                />
                                            </div>
                                            <div>
                                                <button type="submit" class="btn btn-link btn-link">
                                                    Add ticket type
                                                </button>
                                            </div>
                                            <div class="col-md-12 text-center">
                                                <button class="btn btn-sm btn-primary">
                                                    Save
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                    <br />
                                    <div class="table-responsive">
                                        <table class="table table-hover">
                                            <thead>
                                                <tr>
                                                    <th>ID</th>
                                                    <th>Name</th>
                                                    <th>Date time</th>
                                                    <th>Address</th>
                                                    <th>/</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($tickets as $ticket)
                                                    <tr>
                                                        <td>{{$ticket->id}}</td>
                                                        <td>{{$ticket->name}}</td>
                                                        <td>{{$ticket->date_time}}</td>
                                                        <td>{{$ticket->address}}</td>
                                                        <td>
                                                            <button class="btn btn-sm btn-primary m-1">
                                                            </button>
                                                            <button class="btn btn-sm btn-success m-1">
                                                            </button>
                                                            <button class="btn btn-sm btn-danger m-1">
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
    </body>
    <script type="text/javascript" src="js/app.js"></script>
</html>