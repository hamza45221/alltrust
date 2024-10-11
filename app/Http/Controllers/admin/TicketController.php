<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Tickets;
use Illuminate\Http\Request;
use PHPUnit\Framework\Attributes\Ticket;

class TicketController extends Controller
{
    public function index()
    {
        $tickets = Tickets::all();
        return view('dashboard.tickets.index',compact('tickets'));
    }

    public function store(Request $request)
    {
        $tickets = new Tickets();
        $tickets->title = $request->title;
        $tickets->category = $request->category;
        $tickets->details = $request->details;
        $tickets->save();

        return redirect()->back()->with('success','FAQ Added Successfully...');
    }
}
