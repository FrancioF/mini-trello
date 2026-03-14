@extends('layouts.app')

@section('content')

<h1 class="mb-4">Créer un projet</h1>

<div class="card p-4">

<form method="POST" action="/projects">

@csrf

<div class="mb-3">
<label class="form-label">Nom du projet</label>
<input type="text" name="nom" class="form-control" required>
</div>

<div class="mb-3">
<label class="form-label">Description</label>
<textarea name="description" class="form-control"></textarea>
</div>

<button class="btn btn-success">
Créer le projet
</button>

<a href="/projects" class="btn btn-secondary">
Retour
</a>

</form>

</div>

@endsection