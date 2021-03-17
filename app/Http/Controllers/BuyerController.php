<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Buyer;
use App\Models\Ticket;

class BuyerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function index()
    // {
    //     $buyers = Buyer::with('tikes')->get();

    //     return response()->json($buyers,200);
    // }
    public function index()
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
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function add_tickets(Request $request, Buyer $id)
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
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    // public function store(Request $request)
    // {
    //     $request->validate([
    //         'id_card' => ['required','integer','max:15','min:7','unique:buyers,id'],
    //         'name' => ['required','string','max:50'],
    //         'email' => ['required','max:255','string','email','unique:buyers,email'],
    //     ]);

    //     $buyer = Buyer::create($request->all());

    //     return response()->json($buyer,200);
    // }
    public function store(Request $request)
    {
        $request->validate([
            'id_card' => ['required','integer','min:7','unique:buyers,id'],
            'name' => ['required','string','max:50'],
            'email' => ['required','max:255','string','email','unique:buyers,email'],
        ]);
        $tickets = Buyer::create($request->all());
        return redirect()->route('buyers')->with('success','Buyer has been saved');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
