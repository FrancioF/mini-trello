@extends('layouts.app')

@section('title', 'Ajouter un utilisateur')

@section('content')
<h1>Ajouter un utilisateur</h1>

<form action="{{ route('users.store') }}" method="POST">
    @csrf
    <input type="text" name="name" placeholder="Nom" required>
    <br>
    <input type="email" name="email" placeholder="Email" required>
    <br>
    <button type="submit" class="button">Enregistrer</button>
</form>
@endsection