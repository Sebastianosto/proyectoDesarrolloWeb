<?php
    
namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller{

    public function __construct(){
        $this->middleware('auth');
    }
    public function index(){
                
        $users = User::get();
        return view('users.index',['users'=>$users]);
    }

    public function show(User $user){
        return view('users.show',['user'=>$user]);
    }
        
    public function create(){
        return view('users.create');
    }


    public function store(Request $request){
        $request->validate([
            'name' => ['required'],
            'last_name' => ['required'],
            'email' => ['required'],
            'phone_number' => ['required'],
            'password' => ['required'],
        ]);
        $user = new User;
        $user->name = $request->input('name');
        $user->last_name = $request->input('last_name');
        $user->email = $request->input('email');
        $user->phone_number = $request->input('phone_number');
        $user->password = $request->input('password');
        $user->save();
        return to_route('users.index');
    }

    public function edit(User $user){
        return view('users.edit',['user'=>$user]);
    }

    public function update(Request $request, User $user){
        $request->validate([
            'name' => ['required'],
            'last_name' => ['required'],
            'email' => ['required'],
            'phone_number' => ['required'],
            'password' => ['required'],
        ]);
        $user->name = $request->input('name');
        $user->last_name = $request->input('last_name');
        $user->email = $request->input('email');
        $user->phone_number = $request->input('phone_number');
        $user->password = $request->input('password');
        $user->save();
        return to_route('users.index');
    }

    public function destroy(User $user){
        $user->delete();
        return to_route('users.index');
    }
}
