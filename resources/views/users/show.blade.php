@extends('layout.main')
@section('title','affichage d\'un utilisateur')
@section('titre','profil de l\'utilisateur')
@section('contenu')
<table class="table table-responsive">
<thead>
<tr id="tableEntete">
<th>Caractéristique</th>
<th>Valeur</th>
</tr>
</thead>
<tbody>
<tr>	
<td>ID</td>
<td>{{$utilisateur->id}}</td>
</tr>
<tr>	
<td>prenoms</td>
<td>{{$utilisateur->prenoms}}</td>
</tr>
<tr>	
<td>Noms</td>
<td>{{$utilisateur->Noms}}</td>
</tr>
<tr>	
<td>Mot de passe</td>
<td>{{$utilisateur->Mdp}}</td>
</tr>
<tbody>
</table>
@endsection