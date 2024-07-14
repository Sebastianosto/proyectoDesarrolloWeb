<?php
    
namespace App\Http\Controllers;
use App\Models\Ticket;
use App\Models\Client;
use App\Models\User;
use Illuminate\Http\Request;

class TicketController extends Controller{

    public function __construct(){
        $this->middleware('auth');
    }
    public function index(){
                
        $tickets = Ticket::get();
        return view('tickets.index',['tickets'=>$tickets]);
    }

    public function show(Ticket $ticket){
        return view('tickets.show',['ticket'=>$ticket]);
    }
        
    public function create(){
        return view('tickets.create');
    }


    public function store(Request $request){
        $request->validate([
            'name' => ['required'],
            'description' => ['required'],
            'client' => ['required','exists:clients,email'],
            'user' => ['required', 'exists:users,email'],
        ]);

        $userId = User::where('email', $request->input('user'))->first(['id']);
        $clientId = Client::where('email', $request->input('client'))->first(['id']);
        $ticket = new Ticket;
        $ticket->name = $request->input('name');
        $ticket->description = $request->input('description');
        $ticket->status = ($request->input('status') == "") ? "POR RESOLVER" : "RESUELTO";
        $ticket->id_client = $clientId->id; 
        $ticket->id_user = $userId->id;
        $ticket->save();
        return to_route('tickets.index');
    }

    public function edit(Ticket $ticket){
        return view('tickets.edit',['ticket'=>$ticket]);
    }

    public function update(Request $request, Ticket $ticket){
        $request->validate([
            'name' => ['required'],
            'description' => ['required'],
            'client' => ['required','exists:clients,email'],
            'user' => ['required', 'exists:users,email'],
        ]);
        $userId = User::where('email', $request->input('user'))->first(['id']);
        $clientId = Client::where('email', $request->input('client'))->first(['id']);
        $ticket->name = $request->input('name');
        $ticket->description = $request->input('description');
        $ticket->status = ($request->input('status') == "") ? "POR RESOLVER" : "RESUELTO";
        $ticket->id_client = $clientId->id; 
        $ticket->id_user = $userId->id;
        $ticket->save();
        return to_route('tickets.index');
    }

    public function destroy(Ticket $ticket){
        $ticket->delete();
        return to_route('tickets.index');
    }
}
