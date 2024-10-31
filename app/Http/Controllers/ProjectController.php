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

    public function search(Request $request)
    {
        $query = $request->input('search');

        if ($query) {
            // Menangani pencarian dan menampilkan hasil dengan paginasi
            $projects = Project::where('title', 'like', "%{$query}%")->paginate(6);
        } else {
            // Jika tidak ada query pencarian, arahkan kembali ke tampilan proyek
            return redirect()->route('projects');
        }

        return view('projects', compact('projects'));
    }
    public function all()
    {
        $projects = Project::paginate(6);
        return view('projects', compact('projects'));
    }
}
