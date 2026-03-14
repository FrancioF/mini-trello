@extends('layouts.app')

@section('content')

<h1>Créer un utilisateur</h1>

<div class="card p-4">

<form method="POST" action="/users">

@csrf

<div class="mb-3">

<label>Nom</label>

<input type="text" name="name" class="form-control">

</div>

<div class="mb-3">

<label>Email</label>

<input type="email" name="email" class="form-control">

</div>

<div class="mb-3">

<label>Mot de passe</label>

<input type="password" name="password" class="form-control">

</div>

<button class="btn btn-success">
Créer
</button>

</form>

</div>

@endsection