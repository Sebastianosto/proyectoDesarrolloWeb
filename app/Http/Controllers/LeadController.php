<?php
    
namespace App\Http\Controllers;
use App\Models\Lead;
use Illuminate\Http\Request;

class LeadController extends Controller{
    
    public function __construct(){
        $this->middleware('auth');
    }
    public function index(){
                
        $leads = Lead::get();
        return view('leads.index',['leads'=>$leads]);
    }

    public function show(Lead $lead){
        return view('leads.show',['lead'=>$lead]);
    }
        
    public function create(){
        return view('leads.create');
    }


    public function store(Request $request){
        $request->validate([
            'name' => ['required'],
            'email' => ['required'],
            'phone_number' => ['required'],
            'address' => ['required'],
            'datebirth' => ['required'],
        ]);
        $lead = new Lead;
        $lead->name = $request->input('name');
        $lead->email = $request->input('email');
        $lead->phone_number = $request->input('phone_number');
        $lead->address = $request->input('address');
        $lead->nationality = "Venezolana";
        $lead->datebirth = $request->input('datebirth');
        $lead->save();
        return to_route('leads.index');
    }

    public function edit(Lead $lead){
        return view('leads.edit',['lead'=>$lead]);
    }

    public function update(Request $request, Lead $lead){
        $lead->name = $request->input('name');
        $lead->email = $request->input('email');
        $lead->phone_number = $request->input('phone_number');
        $lead->address = $request->input('address');
        $lead->nationality = "Venezolana";
        $lead->save();
        return to_route('leads.show', $lead);
    }

    public function destroy(Lead $lead){
        $lead->delete();
        return to_route('leads.index');
    }

}
