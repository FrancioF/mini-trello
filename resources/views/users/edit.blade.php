@extends('layouts.app')

@section('title', 'Modifier utilisateur')

@section('content')
<h1>Modifier utilisateur</h1>

<form action="{{ route('users.update', $user->id) }}" method="POST">
    @csrf
    @method('PUT')
    <input type="text" name="name" value="{{ $user->name }}" required>
    <br>
    <input type="email" name="email" value="{{ $user->email }}" required>
    <br>
    <button type="submit" class="button">Modifier</button>
</form>
@endsection