@extends('layouts.app')

@section('content')

<h1>Dashboard</h1>

<div class="row">

<div class="col-md-4">
<div class="card dashboard-card">
<h5>Projets</h5>
<div class="stat-number">{{ $projects }}</div>
</div>
</div>

<div class="col-md-4">
<div class="card dashboard-card">
<h5>Tâches</h5>
<div class="stat-number">{{ $tasks }}</div>
</div>
</div>

<div class="col-md-4">
<div class="card dashboard-card">
<h5>Utilisateurs</h5>
<div class="stat-number">0</div>
</div>
</div>

</div>

<h2 class="mt-5">Dernières tâches</h2>

@foreach($latestTasks as $task)

<div class="task-card">

<h5>{{ $task->titre }}</h5>

<p>{{ $task->description }}</p>

<span class="badge bg-primary">
{{ $task->statut }}
</span>

</div>

@endforeach

@endsection