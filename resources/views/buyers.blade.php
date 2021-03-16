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
                {{-- <div id="buyers_component"></div> --}}
                <div class="container mt-4 pt-4">
                    <div class="row justify-content-center">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">Buyers</div>
                                <div class="card-body">
                                    <form action="{{route('buyers_store')}}" method="POST">
                                        @csrf
                                        <div class="row">
                                            <div class="form-group col-md-4">
                                                <label>Id card</label>
                                                <input
                                                    type="number"
                                                    id="id_card"
                                                    name="id_card"
                                                    value="{{old('id_card')}}"
                                                    placeholder="Id card"
                                                    class="form-control"
                                                />
                                            </div>
                                            <div class="form-group col-md-4">
                                                <label>Name</label>
                                                <input
                                                    type="text"
                                                    id="name"
                                                    name="name"
                                                    value="{{old('name')}}"
                                                    placeholder="Name"
                                                    class="form-control"
                                                />
                                            </div>
                                            <div class="form-group col-md-4">
                                                <label>Email</label>
                                                <input
                                                    type="email"
                                                    id="email"
                                                    name="email"
                                                    value="{{old('email')}}"
                                                    placeholder="Email"
                                                    class="form-control"
                                                />
                                            </div>
                                            <div class="col-md-12 text-center">
                                                <button class="btn btn-sm btn-primary">
                                                    Register
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                    <br />
                                    <div class="table-responsive">
                                        <table class="table table-hover">
                                            <thead>
                                                <tr>
                                                    <th>ID-Card</th>
                                                    <th>Name</th>
                                                    <th>Email</th>
                                                    <th>/</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($buyers as $buyer)
                                                    <tr>
                                                        <td>{{$buyer->id_card}}</td>
                                                        <td>{{$buyer->name}}</td>
                                                        <td>{{$buyer->email}}</td>
                                                        <td>
                                                            <button class="btn btn-sm btn-primary m-1" data-toggle="modal" data-target="#showModal_{{$buyer->id}}">
                                                            </button>
                                                            @include('includes.buyers.modals.show')
                                                            <button class="btn btn-sm btn-success m-1">
                                                            </button>
                                                            <button class="btn btn-sm btn-warning m-1" data-toggle="modal" data-target="#add_tickets{{$buyer->id}}">
                                                            </button>
                                                            <!-- Modal -->
                                                            @include('includes.buyers.modals.tickets')
                                                            
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
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    @if ($message = Session::get('success'))
        <script>
            const Toast = Swal.mixin({
                toast: true,
                position: 'top-end',
                showConfirmButton: false,
                timer: 3000,
                timerProgressBar: true,
                didOpen: (toast) => {
                toast.addEventListener('mouseenter', Swal.stopTimer)
                toast.addEventListener('mouseleave', Swal.resumeTimer)
                }
            })

            Toast.fire({
                icon: 'success',
                title: '{{$message}}'
            })
        </script>
    @endif
    @if (count($errors) > 0)
        @php
            $message = '<ul>';
        @endphp
        @foreach ($errors->all() as $error)
            @if ($error != '')
                @php
                    $message = $message."<li>".$error."</li>";
                @endphp
            @endif
        @endforeach
        @php
            $message = $message .'</ul>';
        @endphp
        <script>
           Swal.fire({
                title: '<strong>Alerta!</strong>',
                icon: 'error',
                html: '{!!$message!!}'
            })
        </script>
    @endif
</html>