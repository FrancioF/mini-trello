@extends('layouts.app')

@section('content')

<h1>Profil utilisateur</h1>

<div class="card p-4 mb-4">

<h3>{{ $user->name }}</h3>

<p>Email : {{ $user->email }}</p>

</div>

<h2>Ses tâches</h2>

<table class="table table-bordered">

<tr>
<th>Titre</th>
<th>Description</th>
<th>Statut</th>
</tr>

@foreach($tasks as $task)

<tr>

<td>{{ $task->titre }}</td>
<td>{{ $task->description }}</td>

<td>

@if($task->statut == 'a_faire')
<span class="badge bg-danger">À faire</span>
@endif

@if($task->statut == 'en_cours')
<span class="badge bg-warning">En cours</span>
@endif

@if($task->statut == 'termine')
<span class="badge bg-success">Terminé</span>
@endif

</td>

</tr>

@endforeach

</table>

@endsection