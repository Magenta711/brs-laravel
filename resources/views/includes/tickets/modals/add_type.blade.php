<div class="modal fade" id="addTicketModal_{{$ticket->id}}" tabindex="-1" aria-labelledby="addTicketModalLabel_{{$ticket->id}}" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addTicketModalLabel_{{$ticket->id}}">Add ticket types to {{$ticket->name}}</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{route('ticket_add_type',$ticket->id)}}" method="POST">
                @csrf
                @method('PUT')
                <div class="modal-body">
                    <div class="row">
                        <div class="form-group col-md-4">
                            <label>Type</label>
                            <input
                                type="text"
                                id="type"
                                name="type"
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
                                name="amount"
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
                                name="value"
                                placeholder="Value"
                                class="form-control"
                                value="{{old('value')}}"
                            />
                        </div>
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