<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8"/>
<title>@yield('title','Accueil')</title>
<link rel="stylesheet" type="text/css" href="/css/style.css"/>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
<header>Gestion des utilisateurs</header>  
<nav class="navbar navbar-expand-sm bg-black justify-content-center">
<ul class="navbar-nav">
<li class="nav-item">
<a class="nav-link" href="/" style="color:white; border-right:1px solid white;border-left:1px solid white;">Accueil</a>
</li>
<li class="nav-item">
<a class="nav-link" href="/users/list" style="color:white; border-right:1px solid white;">Lister</a>
</li>
<li class="nav-item">
<a class="nav-link" href="/users/ajouter" style="color:white; border-right:1px solid white;">Ajouter</a>
</li>
</ul>
</nav>
<section>
@if(session('message'))
<div class="alert alert-{{ session('status') ? 'success' : 'danger'}}">
{{ session('message') }}
</div>
@endif
<h1 id="titre-principal">@yield('titre')</h1>
@yield('contenu')
</section>
<footer>
<p class="textFooter">ID WORLD CENTER &copy; Mars 2022</p>
</body>
</html>