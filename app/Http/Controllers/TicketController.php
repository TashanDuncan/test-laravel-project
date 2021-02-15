<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Ticket;

class TicketController extends Controller
{
    public function show($id)
    {
        return view('ticket', [
            'ticket' => Ticket::where('id', $id)->firstOrFail()
        ]);
    }
}
