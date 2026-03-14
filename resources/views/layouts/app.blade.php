<!DOCTYPE html>
<html>
<head>

<meta charset="utf-8">
<title>Mini Trello</title>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">

<link rel="stylesheet" href="{{ asset('css/style.css') }}">

</head>

<body>

<!-- MENU -->

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">

<div class="container">

<a class="navbar-brand" href="/">Mini Trello</a>

<button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#menu">
<span class="navbar-toggler-icon"></span>
</button>

<div class="collapse navbar-collapse" id="menu">

<ul class="navbar-nav ms-auto">

<li class="nav-item">
<a class="nav-link" href="/">Dashboard</a>
</li>

<li class="nav-item">
<a class="nav-link" href="/projects">Projets</a>
</li>

<li class="nav-item">
<a class="nav-link" href="/projects/create">Créer Projet</a>
</li>

<li class="nav-item">
<a class="nav-link" href="/user/1">Profil</a>
</li>

</ul>

</div>

</div>

</nav>


<!-- CONTENU PAGE -->

<div class="container mt-4">

@yield('content')

</div>

</body>
</html>