<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
use Illuminate\Http\Request;
use App\Models\Ticket;
use App\Models\Buyer;
use App\Models\TicketType;

Route::get('/', function () {
    return redirect()->route('buyers');
});

Route::get('buyers',function ()
{
    $tickets = Ticket::with('types')->where('status',1)->get();
    $buyers = Buyer::with(['tickets' => function ($query)
    {
        $query->with(['ticket' => function ($query)
        {
            $query->with('ticket');
        }]);
    }])->get();
    return view('buyers', [
        'buyers' => $buyers,
        'tickets' => $tickets,
    ]);
})->name('buyers');

Route::get('tickets',function ()
{
    $tickets = Ticket::with('types')->get();
    return view('tickets',['tickets' => $tickets]);
})->name('tickets');

Route::post('tickets',function (Request $request)
{
    $request->validate([
        'name' => ['required','integer','max:255'],
        'date_time' => ['required'],
        'address' => ['required','max:255','string'],
    ]);
    $tickets = Ticket::create($request->all());
    foreach ($request->type as $key => $value) {
        $tickets->types()->create([
            'type' => $value,
            'amount' => $request->amount[0],
            'value' => $request->value[0],
        ]);
    }
    return redirect()->route('tickets');
})->name('tickets_store');

Route::post('buyers',function (Request $request)
{
    $request->validate([
        'id_card' => ['required','integer','min:7','unique:buyers,id'],
        'name' => ['required','string','max:50'],
        'email' => ['required','max:255','string','email','unique:buyers,email'],
    ]);
    $tickets = Buyer::create($request->all());
    return redirect()->route('buyers')->with('success','Buyer has been saved');
})->name('buyers_store');

Route::put('buyers/{id}/ticket',function (Request $request, Buyer $id)
{
    $request->validate([
        'ticket_type_id' => ['required','integer'],
        'amount' => ['required','integer'],
    ]);

    $type = TicketType::find($request->ticket_type_id);

    $amount = $type->amount - $request->amount;

    if ($amount >= 0) {
        $type->update([
            'amount' => $amount
        ]);

        if ($amount == 0) {
            $type->ticket()->update([
                'status' => 0,
            ]);
        }
        
        $data = $id->tickets()->create([
            'ticket_type_id' => $request->ticket_type_id,
            'amount' => $request->amount,
        ]);
    
        return redirect()->route('buyers')->with('success','Ticket(s) has been reserved to the buyer');
    }

    return redirect()->back()->withErrors(['amount' => 'The amount is not valid']);

})->name('buyer_tickets');