<?php
    
namespace App\Http\Controllers;
use App\Models\Project;
use App\Models\User;
use App\Models\Issue;
use Illuminate\Http\Request;

class ProjectController extends Controller{

    public function __construct(){
        $this->middleware('auth');
    }
    public function index(){
                
        $projects = Project::get();
        return view('projects.index',['projects'=>$projects]);
    }

    public function show(Project $project){
        $issues = Issue::where('id_project', $project->id)->get();
        return view('projects.show',['project'=>$project, 'issues'=>$issues]);
    }
        
    public function create(){
        return view('projects.create');
    }


    public function store(Request $request){
        $request->validate([
            'name' => ['required'],
            'description' => ['required'],
            'created_date' => ['required'],
            'ended_date' => ['required'],
        ]);
        $userId_1 = User::where('email', $request->input('responsable_1'))->first(['id']);
        $userId_2 = User::where('email', $request->input('responsable_2'))->first(['id']);
        $userId_3 = User::where('email', $request->input('responsable_3'))->first(['id']);

        $project = new Project;
        $project->name = $request->input('name');
        $project->description = $request->input('description');
        $project->created_date = $request->input('created_date');
        $project->ended_date = $request->input('ended_date');
        $project->status = ($request->input('status') == "") ? "POR RESOLVER" : "RESUELTO";
        $project->id_user1 = $userId_1->id;
        $project->id_user2 = $userId_2->id;
        $project->id_user3 = $userId_3->id;
        $project->save();
        return to_route('projects.index');
    }

    public function edit(Project $project){
        return view('projects.edit',['project'=>$project]);
    }

    public function update(Request $request, Project $project){
        $request->validate([
            'name' => ['required'],
            'description' => ['required'],
            'created_date' => ['required'],
            'ended_date' => ['required'],
            'responsable_1' => ['required', 'exists:users,email'],
            'responsable_2' => ['required', 'exists:users,email'],
            'responsable_3' => ['required', 'exists:users,email'],
        ]);
        $userId_1 = User::where('email', $request->input('responsable_1'))->first(['id']);
        $userId_2 = User::where('email', $request->input('responsable_2'))->first(['id']);
        $userId_3 = User::where('email', $request->input('responsable_3'))->first(['id']);

        $project->name = $request->input('name');
        $project->description = $request->input('description');
        $project->created_date = $request->input('created_date');
        $project->ended_date = $request->input('ended_date');
        $project->status = ($request->input('status') == "") ? "POR RESOLVER" : "RESUELTO";
        $project->id_user1 = $userId_1->id;
        $project->id_user2 = $userId_2->id;
        $project->id_user3 = $userId_3->id;
        $project->save();
        return to_route('projects.show', $project);
    }

    public function destroy(Project $project){
        $project->delete();
        return to_route('projects.index');
    }
}
