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
                        <button class="btn btn-sm btn-primary m-1" data-toggle="modal" data-target="#showModal_{{$ticket->id}}">
                            <i class="fa fa-eye"></i>
                        </button>
                        @include('includes.tickets.modals.show')
                        <button class="btn btn-sm btn-success m-1" data-toggle="modal" data-target="#addTicketModal_{{$ticket->id}}">
                            <i class="fa fa-plus"></i>
                        </button>
                        @include('includes.tickets.modals.add_type')
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>