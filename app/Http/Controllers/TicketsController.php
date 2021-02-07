<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Tickets;

class TicketsController extends Controller
{
    public function show($id)
    {
        return view('ticket', [
            'ticket' => Tickets::where('id', $id)->firstOrFail()
        ]);
    }
}
