<div class="modal fade" id="showModal_{{$ticket->id}}" tabindex="-1" aria-labelledby="showModalLabel_{{$ticket->id}}" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="showModalLabel_{{$ticket->id}}">{{$ticket->name}}</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <h4>Ticket</h4>
                <hr>
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <td>Type</td>
                                <td>Amount</td>
                                <td>Value</td>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($ticket->types as $item)
                                <tr>
                                    <td>{{$item->type}}</td>
                                    <td>{{$item->amount == 0 ? 'Sold out' : $item->amount }}</td>
                                    <td>{{$item->value}}</td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="4" class="text-center">No reservations</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>