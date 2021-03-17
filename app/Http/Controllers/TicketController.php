<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ticket;
use App\Models\TicketType;

class TicketController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function index()
    // {
    //     $tickets = Ticket::with('types')->get();
        
    //     return response()->json($tickets,200);
    // }
    public function index()
    {
        $tickets = Ticket::with('types')->get();
        return view('tickets',['tickets' => $tickets]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function add_type(Request $request,Ticket $id)
    {
        $request->validate([
            'type' => ['required'],
            'amount' => ['required'],
            'value' => ['required'],
        ]);
    
        $id->types()->create([
            'type' => $request->type,
            'amount' => $request->amount,
            'value' => $request->value,
        ]);
    
        return redirect()->route('tickets')->with('success','Added ticket type to '.$id->name);
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
    //         'name' => ['required','integer','max:255'],
    //         'date_time' => ['required'],
    //         'address' => ['required','max:255','string'],
    //     ]);

    //     $ticket = Ticket::create($request->all());

    //     foreach ($request->types as $key => $value) {
    //         TicketType::create([
    //             'ticket_id' => $ticket->id,
    //             'type' => $request->type[$key],
    //             'amount' => $request->amount[$key],
    //             'value' => $request->value[$key],
    //         ]);
    //     }
        
    //     return response()->json($ticket,200);
    // }
    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required','integer','max:255'],
            'date_time' => ['required'],
            'address' => ['required','max:255','string'],
        ]);
        
        $tickets = Ticket::create($request->all());
        
        return redirect()->route('tickets')->with('success','Ticket has been saved');
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
