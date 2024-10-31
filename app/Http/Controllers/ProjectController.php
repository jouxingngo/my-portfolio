<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index(){
        $projects = Project::take(6)->get();
        
        return view('portfolio', compact('projects'));
    }

    public function all()
    {
        $projects = Project::paginate(6);
        return view('projects', compact('projects'));
    }
}
