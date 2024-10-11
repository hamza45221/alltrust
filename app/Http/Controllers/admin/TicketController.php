<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Tickets;
use Illuminate\Http\Request;

class TicketController extends Controller
{
    public function index()
    {
        $tickets = Tickets::all();
        return view('dashboard.tickets.index', compact('tickets'));
    }

    public function store(Request $request)
    {
        $tickets = new Tickets();
        $tickets->title = $request->title;
        $tickets->category = $request->category;
        $tickets->details = $request->details;
        $tickets->save();

        return redirect()->back()->with('success', 'Ticket Added Successfully...');
    }

    public function update(Request $request, $id)
    {
        $ticket = Tickets::findOrFail($id);
        $ticket->title = $request->title;
        $ticket->category = $request->category;
        $ticket->details = $request->details;
        $ticket->save();

        return redirect()->back()->with('success', 'Ticket Updated Successfully...');
    }

    public function delete($id)
    {
        $ticket = Tickets::findOrFail($id);
        $ticket->delete();

        return redirect()->back()->with('success', 'Ticket Deleted Successfully...');
    }
}
