@extends('layouts.app')

@section('content')

<h1 class="mb-4">{{ $project->nom }}</h1>

<div class="card p-3 mb-4">
<p>{{ $project->description }}</p>
</div>

<div class="row">

<!-- FORMULAIRE CREER TACHE -->

<div class="col-md-4">

<div class="card p-4">

<h4>Créer une tâche</h4>

<form method="POST" action="/tasks">

@csrf

<input type="hidden" name="projet_id" value="{{ $project->id }}">

<div class="mb-3">
<label class="form-label">Titre</label>
<input type="text" name="titre" class="form-control" required>
</div>

<div class="mb-3">
<label class="form-label">Description</label>
<textarea name="description" class="form-control"></textarea>
</div>

<button class="btn btn-primary w-100">
Ajouter
</button>

</form>

</div>

</div>


<!-- LISTE DES TACHES -->

<div class="col-md-8">

<h4 class="mb-3">Tâches</h4>

@foreach($project->tasks as $task)

<div class="card task-card mb-3 p-3">

<div class="d-flex justify-content-between">

<div>

<h5>{{ $task->titre }}</h5>

<p class="text-muted">{{ $task->description }}</p>

</div>

<div>

@if($task->statut == 'a_faire')
<span class="badge bg-danger">À faire</span>
@endif

@if($task->statut == 'en_cours')
<span class="badge bg-warning">En cours</span>
@endif

@if($task->statut == 'termine')
<span class="badge bg-success">Terminé</span>
@endif

</div>

</div>

<form method="POST" action="/tasks/{{ $task->id }}/status" class="mt-2">

@csrf

<div class="row">

<div class="col-md-8">

<select name="statut" class="form-select">

<option value="a_faire">À faire</option>

<option value="en_cours">En cours</option>

<option value="termine">Terminé</option>

</select>

</div>

<div class="col-md-4">

<button class="btn btn-dark w-100">
Changer
</button>

</div>

</div>

</form>

</div>

@endforeach

</div>

</div>

@endsection