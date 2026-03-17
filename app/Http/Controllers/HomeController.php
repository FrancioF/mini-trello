<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\Task;
use App\Models\User;

class HomeController extends Controller
{
    public function index()
    {
        $projects = Project::count();
        $tasks = Task::count();
        //$users = User::count();

        $latestTasks = Task::latest()->take(5)->get();

        return view('home', compact('projects','tasks','latestTasks'));
    }
}