<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;

class TaskController extends Controller
{
    public function store(Request $request)
    {
        Task::create([
            'projet_id' => $request->projet_id,
            'titre' => $request->titre,
            'description' => $request->description,
            'statut' => 'a_faire',
            'date_creation' => now()
        ]);

        return back();
    }

    public function assign(Request $request, $id)
    {
        $task = Task::findOrFail($id);
        $task->user_id = $request->user_id;
        $task->save();

        return back();
    }

    public function updateStatus(Request $request, $id)
    {
        $task = Task::findOrFail($id);
        $task->statut = $request->statut;
        $task->save();

        return back();
    }
}