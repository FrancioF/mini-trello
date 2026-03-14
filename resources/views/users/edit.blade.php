@extends('layouts.app')

@section('content')

<h1>Modifier utilisateur</h1>

<div class="card p-4">

<form method="POST" action="/users/{{ $user->id }}">

@csrf
@method('PUT')

<div class="mb-3">

<label>Nom</label>

<input type="text" name="name" value="{{ $user->name }}" class="form-control">

</div>

<div class="mb-3">

<label>Email</label>

<input type="email" name="email" value="{{ $user->email }}" class="form-control">

</div>

<button class="btn btn-primary">
Modifier
</button>

</form>

</div>

@endsection