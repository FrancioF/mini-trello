<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Task;

class UserController extends Controller
{
    public function profile($id)
    {
        $user = User::findOrFail($id);
        $tasks = Task::where('user_id', $id)->get();

        return view('users.profile', compact('user','tasks'));
    }
}