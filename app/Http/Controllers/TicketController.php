<?php

namespace App\Http\Controllers;

use App\Models\Ticket;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Psy\TabCompletion\Matcher\FunctionsMatcher;

class TicketController extends Controller
{
    public function knowledgeView()
    {
        $knowledges = DB::table('knowledges')->join('tickets', 'knowledges.ticket_id', '=', 'tickets.id')->select('tickets.*')->get();
        return view('pages.knowledge', compact('knowledges'));
    }

    public function detail(Request $request, $id)
    {
        $details = DB::table('tickets')->join('ticket_responses', 'tickets.id', '=', 'ticket_responses.ticket_id')->join('users', 'users.id', '=', 'tickets.user_id')->join('statues', 'statues.id', '=', 'tickets.status_id')->select('tickets.*', 'users.nama', 'statues.title as status')->where('tickets.id', $id)->get();
        $responders = DB::table('tickets')->join('ticket_responses', 'tickets.id', '=', 'ticket_responses.ticket_id')->join('users', 'users.id', '=', 'ticket_responses.admin_id')->select('users.nama', 'ticket_responses.*')->where('tickets.id', $id)->get();
        // return $details;
        return view('pages.detail', compact('details', 'responders'));
    }

    public function store(Request $request){
        $data = new Ticket;
        $data->title = $request->judul;
        $data->category = $request->kategori;
        $data->description = $request->deskripsi;
        $data->priority_id = 5;
        $data->status_id = 5;
        $data->user_id = 2;

        $data->save();
        return view('/');
    }
}
