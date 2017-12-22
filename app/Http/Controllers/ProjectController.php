<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Project;
use App\User;

class ProjectController extends Controller
{    
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){

        $projects = Project::all()->sortBy('project_id');
        return view('projects.index', compact('projects'));

    }

    public function show(Project $project){
        
        $users = User::all()->sortBy('name');

        return view('projects.show', compact(['project', 'users']));

    }

    public function create(){
        
        return view('projects.create');

    }

    public function store(){

        $this->validate(request(), [
            'name' => 'required',
            'project_id' => 'required'
        ]);
        
        Project::create(request(['name', 'project_id']));

        return redirect('/projects');

    }

    public function addMember(Request $request, Project $project){

        $this->validate(request(), [
            'memberName' => 'required',
            'memberPercent' => 'required'
        ]);

        $member = User::where('name', $request->memberName)->first();

        if ($project->hasMember($member)) {
            $project->users()->updateExistingPivot($member->id, ['percent' => $request->memberPercent]);
        } else {
            $project->users()->attach($member->id, ['percent' => $request->memberPercent]);
        }

        return redirect()->route('project', ['project' => $project->id]);
    }

    public function removeMember(Request $request, Project $project){

        $member = User::where('name', $request->memberName)->first();

        $project->users()->detach($member->id);

        return redirect()->route('project', ['project' => $project->id]);
    }
}