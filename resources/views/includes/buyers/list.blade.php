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
                            <i class="fa fa-eye"></i>
                        </button>
                        @include('includes.buyers.modals.show')
                        <button class="btn btn-sm btn-warning m-1" data-toggle="modal" data-target="#add_tickets{{$buyer->id}}">
                            <i class="fa fa-ticket-alt"></i>
                        </button>
                        @include('includes.buyers.modals.tickets')
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

</div>