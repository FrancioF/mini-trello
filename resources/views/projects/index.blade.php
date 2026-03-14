@extends('layouts.app')

@section('content')

<h1>Liste des projets</h1>

<a href="/projects/create" class="btn btn-primary mb-3">
Créer un projet
</a>

<table class="table table-bordered">

<tr>
<th>ID</th>
<th>Nom</th>
<th>Description</th>
<th>Action</th>
</tr>

@foreach($projects as $project)

<tr>

<td>{{ $project->id }}</td>

<td>{{ $project->nom }}</td>

<td>{{ $project->description }}</td>

<td>
<a href="/projects/{{ $project->id }}" class="btn btn-info btn-sm">
Voir
</a>
</td>

</tr>

@endforeach

</table>

@endsection