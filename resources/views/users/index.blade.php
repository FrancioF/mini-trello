@extends('layouts.app')

@section('title', 'Liste des utilisateurs')

@section('content')
<h1>Liste des utilisateurs</h1>
<a href="{{ route('users.create') }}">Ajouter un utilisateur</a>

@foreach($users as $user)
<p>
    {{ $user->name }} - {{ $user->email }}
    <a href="{{ route('users.edit', $user->id) }}">Modifier</a>
    <form action="{{ route('users.destroy', $user->id) }}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit">Supprimer</button>
    </form>
</p>
@endforeach
@endsection