@extends('layouts.app')

@section('content')

<h1>Liste des utilisateurs</h1>

<a href="/users/create" class="btn btn-primary mb-3">
Ajouter utilisateur
</a>

<table class="table table-bordered">

<tr>
<th>ID</th>
<th>Nom</th>
<th>Email</th>
<th>Actions</th>
</tr>

@foreach($users as $user)

<tr>

<td>{{ $user->id }}</td>

<td>{{ $user->name }}</td>

<td>{{ $user->email }}</td>

<td>

<a href="/users/{{ $user->id }}/edit" class="btn btn-warning btn-sm">
Modifier
</a>

<form action="/users/{{ $user->id }}" method="POST" style="display:inline">

@csrf
@method('DELETE')

<button class="btn btn-danger btn-sm">
Supprimer
</button>

</form>

</td>

</tr>

@endforeach

</table>

@endsection