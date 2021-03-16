<div class="modal fade" id="typeTicketModal_{{$buyer->id}}_{{$ticket->id}}" tabindex="-1" aria-labelledby="typeTicketModalLabel_{{$buyer->id}}_{{$ticket->id}}" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
    <div class="modal-content">
        <div class="modal-header">
        <h5 class="modal-title" id="typeTicketModalLabel_{{$buyer->id}}_{{$ticket->id}}">{{$ticket->name}}</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        </div>
        <form action="{{route('buyer_tickets',$buyer->id)}}" method="post">
            <div class="modal-body">
            @csrf
            @method('PUT')
                <div class="form-group">
                    <label for="ticket_type_id_{{$buyer->id}}_{{$ticket->id}}">Ticket type</label>
                    <select name="ticket_type_id" id="ticket_type_id_{{$buyer->id}}_{{$ticket->id}}" class="form-control">
                        <option selected disabled>Select ticket type</option>
                        @foreach ($ticket->types as $type)
                            <option value="{{$type->id}}">{{$type->type}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="amount_{{$buyer->id}}_{{$ticket->id}}">Amount</label>
                    <input type="number" value="0" name="amount" class="form-control">
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save</button>
            </div>
        </form>
    </div>
    </div>
</div>
