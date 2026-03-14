<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;

/*
|--------------------------------------------------------------------------
| Page d'accueil (Dashboard)
|--------------------------------------------------------------------------
*/

Route::get('/', [HomeController::class, 'index'])->name('home');

/*
|--------------------------------------------------------------------------
| Page utilisateur
|--------------------------------------------------------------------------
*/



/*
|--------------------------------------------------------------------------
| Gestion des projets
|--------------------------------------------------------------------------
*/

Route::get('/projects', [ProjectController::class, 'index'])->name('projects.index');

Route::get('/projects/create', [ProjectController::class, 'create'])->name('projects.create');

Route::post('/projects', [ProjectController::class, 'store'])->name('projects.store');

Route::get('/projects/{id}', [ProjectController::class, 'show'])->name('projects.show');

/*
|--------------------------------------------------------------------------
| Gestion des tâches
|--------------------------------------------------------------------------
*/

Route::post('/tasks', [TaskController::class, 'store'])->name('tasks.store');

Route::post('/tasks/{id}/assign', [TaskController::class, 'assign'])->name('tasks.assign');

Route::post('/tasks/{id}/status', [TaskController::class, 'updateStatus'])->name('tasks.status');