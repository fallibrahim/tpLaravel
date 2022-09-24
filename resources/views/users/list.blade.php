<link rel="stylesheet" type="text/css" href="/css/style.css"/>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
@extends('layout.main')
@section('title','Liste des utilisateurs')
@section('titre','Liste des utilisateurs')
@section('contenu')
@if(isset($utilisateurs))
<table class="table table-responsive">
<thead>
<tr id="tableEntete">
<th>Prénom</th>
<th>Nom</th>
<th>Login</th>
<th>Mot de passe</th>
<th>Action 1</th>
<th>Action 2</th>
<th>Action 3</th>
</tr>
</thead>
@foreach($utilisateurs as $utilisateur)
<tbody>
<tr>	
<td>{{$utilisateur->prenoms}}</td>
<td>{{$utilisateur->Noms}}</td>
<td>{{$utilisateur->Login}}</td>
<td>{{$utilisateur->Mdp}}</td>
<td><a href="/users/delete/{{$utilisateur->id}}" class="btn btn-danger" onclick="return confirm('Voullez vous vraiment supprimer l\'etudiant');">Supprimer</a></td>
<td><a href="/users/update/{{$utilisateur->id}}" class="btn btn-primary">Modifier</a></td>
<td><a href="/users/{{$utilisateur->id}}" class="btn btn-success">Consulter</a></td>
</tr>
<tbody>
@endforeach
</table>
@else
<p>la liste des utilisateurs est vide</p>
@endif
@endsection