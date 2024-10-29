<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index(){
        $projects = Project::latest()->take(6)->get();
        
        return view('portfolio', compact('projects'));
    }

    public function show($id)
    {
        $project = Project::find($id);
        return view('project.show', compact('project'));
    }
}
