<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;

class ProjectController extends Controller
{
    public function index()
    {
        $projects = Project::all();
        return view('projects.index', compact('projects'));
    }

    public function create()
    {
        return view('projects.create');
    }

    public function store(Request $request)
    {
        Project::create($request->all());
        return redirect('/projects');
    }

    public function show($id)
    {
        $project = Project::with('tasks')->findOrFail($id);
        return view('projects.show', compact('project'));
    }
}