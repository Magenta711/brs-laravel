<div class="modal fade" id="add_tickets{{$buyer->id}}" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="add_ticketsLabel{{$buyer->id}}" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg modal-dialog-scrollable" role="document">
    <div class="modal-content">
        <div class="modal-header">
        <h5 class="modal-title" id="add_ticketsLabel{{$buyer->id}}">{{$buyer->name}}</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        </div>
        <div class="modal-body">
            {{-- @csrf
            @method('PUT') --}}
            <ul class="list-group">
                @foreach ($tickets as $ticket)
                    <li class="list-group-item">
                        <div class="row">
                            <div class="col-md-4">
                                {{$ticket->name}}
                            </div>
                            <div class="col-md-4">
                                {{$ticket->date_timen}}
                            </div>
                            <div class="col-auto">
                                <button  type="button" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#typeTicketModal_{{$buyer->id}}_{{$ticket->id}}">
                                    Add
                                </button>
                                <!-- Modal -->
                                @include('includes.buyers.modals.ticket_types')
                            </div>
                        </div>
                    </li>
                @endforeach
            </ul>
        </div>
        {{-- </form> --}}
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
    </div>
    </div>
</div>