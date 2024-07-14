<?php
    
namespace App\Http\Controllers;
use App\Models\Issue;
use App\Models\User;
use App\Models\Project;
use Illuminate\Http\Request;

class IssueController extends Controller{
    public function __construct(){
        $this->middleware('auth');
    }
    public function index(){
                
        $issues = Issue::get();
        return view('issues.index',['issues'=>$issues]);
    }

    public function show(Issue $issue){
        return view('issues.show',['issue'=>$issue]);
    }
        
    public function create(){
        return view('issues.create');
    }


    public function store(Request $request){
        $request->validate([
            'name' => ['required'],
            'description' => ['required'],
            'deadline' => ['required'],
            'user' => ['required', 'exists:users,email'],
            'project' => ['required', 'exists:projects,name'],
        ]);
        $userId = User::where('email', $request->input('user'))->first(['id']);
        $projectId = Project::where('name', $request->input('project'))->first(['id']);
        $issue = new Issue;
        $issue->name = $request->input('name');
        $issue->description = $request->input('description');
        $issue->status = ($request->input('status') == "") ? "POR RESOLVER" : "RESUELTO";
        $issue->deadline = $request->input('deadline');
        $issue->id_user = $userId->id;
        $issue->id_project = $projectId->id;
        $issue->save();
        return to_route('issues.index');
    }

    public function edit(Issue $issue){
        return view('issues.edit',['issue'=>$issue]);
    }

    public function update(Request $request, Issue $issue){
        $request->validate([
            'name' => ['required'],
            'description' => ['required'],
            'deadline' => ['required'],
            'user' => ['required', 'exists:users,email'],
            'project' => ['required', 'exists:projects,email'],
        ]);
        $userId = User::where('email', $request->input('user'))->first(['id']);
        $projectId = Project::where('email', $request->input('project'))->first(['id']);
        $issue->name = $request->input('name');
        $issue->description = $request->input('description');
        $issue->status = ($request->input('status') == "") ? "POR RESOLVER" : "RESUELTO";
        $issue->deadline = $request->input('deadline');
        $issue->id_user = $userId->id;
        $issue->id_project = $projectId->id;
        $issue->save();
        return to_route('issues.show', $issue);
    }

    public function destroy(Issue $issue){
        $issue->delete();
        return to_route('issues.index');
    }
    
}
