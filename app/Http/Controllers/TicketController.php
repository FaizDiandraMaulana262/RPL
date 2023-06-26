<?php

namespace App\Http\Controllers;

use App\Models\Priority;
use App\Models\Status;
use App\Models\Ticket_Response;
use App\Models\Ticket;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use function PHPUnit\Framework\isNull;

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

    public function store(Request $request, $id)
    {
        $data = new Ticket;
        $data->title = $request->judul;
        $data->category = $request->kategori;
        $data->description = $request->deskripsi;
        $data->priority_id = 5;
        $data->status_id = 1;
        $data->user_id = $id;

        $data->save();
        return view('pages.ticket');
    }

    public function adminTicket(Request $req)
    {
        $statues = Status::get();
        $priorities = Priority::get();

        $cok = empty($req);
        if (count($req->all()) == 0) {
            $tickets = Ticket::get();
        } else {
            $tickets = Ticket::where('category', $req->category)->where('status_id', $req->status)->where('priority_id', $req->priority)->get();
            return view('pages.adminTicket', compact('tickets', 'statues', 'priorities'));
        }
    }

    public function detailAdminTicket(Request $req, $id)
    {
        $tickets = Ticket::where('id', $id)->get();
        $userTickets = DB::table('tickets')->join('users', 'users.id', '=', 'tickets.user_id')->select('users.*')->where('tickets.id', $id)->get();
        $responseTickets = DB::table('tickets')->join('ticket_responses', 'ticket_responses.ticket_id', '=', 'tickets.id')->join('users', 'users.id', '=', 'ticket_responses.admin_id')->select('ticket_responses.*', 'users.nama as responder')->where('tickets.id', $id)->get();
        $statusTickets = DB::table('tickets')->join('statues', 'statues.id', '=', 'tickets.status_id')->select('statues.*')->where('tickets.id', $id)->get();
        $priorityTickets = DB::table('tickets')->join('priorities', 'priorities.id', '=', 'tickets.priority_id')->select('priorities.*')->where('tickets.id', $id)->get();
        $statues = Status::get();
        $priorities = Priority::get();

        return view('pages.adminTicketDetail', compact('tickets', 'userTickets', 'statusTickets', 'responseTickets', 'priorityTickets', 'statues', 'priorities'));
    }

    public function updateAdminTicket(Request $req, $id, $idAdmin)
    {
        $data = new Ticket_Response;
        $data->message = $req->deskripsi;
        $data->ticket_id = (int) $id;
        $data->admin_id = (int) $idAdmin;
        $data->save();

        DB::table('tickets')->where('id', $id)->update(['priority_id' => $req->priority_id, 'status_id' => $req->status_id]);

        $check = User::where('id', $idAdmin)->get();

        if ($check[0]->role == 'User') {
            return redirect('detail/' . $id);
        } elseif ($check[0]->role == 'Admin') {
        }

        return redirect('admin/ticket/detail/' . $id);
    }

    public function yourTicket(Request $req, $id)
    {
        // return $id;
        $tickets = Ticket::join('priorities', 'priorities.id', '=', 'tickets.priority_id')->join('statues', 'statues.id', '=', 'tickets.status_id')->where('user_id', $id)->select('tickets.*', 'priorities.title as priority', 'statues.title as status')->get();
        // return $tickets;
        return view('pages.userTicket', compact('tickets'));
    }
}
