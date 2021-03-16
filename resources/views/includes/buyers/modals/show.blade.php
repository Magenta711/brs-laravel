<div class="modal fade" id="showModal_{{$buyer->id}}" tabindex="-1" aria-labelledby="showModalLabel_{{$buyer->id}}" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="showModalLabel_{{$buyer->id}}">{{$buyer->name}}</h5>
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
                                <td>Ticket</td>
                                <td>Type</td>
                                <td>Amount</td>
                                <td>Total</td>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($buyer->tickets as $item)
                                <tr>
                                    <td>{{$item->ticket->ticket->name}}</td>
                                    <td>{{$item->ticket->type}}</td>
                                    <td>{{$item->amount}}</td>
                                    <td>$ {{number_format($item->amount * $item->ticket->value,2,',','.')}}</td>
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