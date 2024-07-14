<?php
    
namespace App\Http\Controllers;
use App\Models\Client;
use Illuminate\Http\Request;

class ClientController extends Controller{

    public function __construct(){
        $this->middleware('auth');
    }
    public function index(){
                
        $clients = Client::get();
        return view('clients.index',['clients'=>$clients]);
    }

    public function show(Client $client){
        return view('clients.show',['client'=>$client]);
    }
        
    public function create(){
        return view('clients.create');
    }


    public function store(Request $request){
        $request->validate([
            'name' => ['required'],
            'email' => ['required'],
            'phone_number' => ['required'],
            'address' => ['required'],
            'datebirth' => ['required'],
        ]);
        $client = new Client;
        $client->name = $request->input('name');
        $client->email = $request->input('email');
        $client->phone_number = $request->input('phone_number');
        $client->address = $request->input('address');
        $client->entity = $request->input('entity');
        $client->nationality = $request->input('nationality');
        $client->datebirth = $request->input('datebirth');
        $client->save();
        return to_route('clients.index');
    }

    public function edit(Client $client){
        return view('clients.edit',['client'=>$client]);
    }

    public function update(Request $request, Client $client){
        $client->name = $request->input('name');
        $client->email = $request->input('email');
        $client->phone_number = $request->input('phone_number');
        $client->address = $request->input('address');
        $client->nationality = $request->input('nationality');
        $client->entity = $request->input('entity');
        $client->save();
        return to_route('clients.show', $client);
    }

    public function destroy(Client $client){
        $client->delete();
        return to_route('clients.index');
    }
}

