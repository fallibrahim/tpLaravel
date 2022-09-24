<link rel="stylesheet" type="text/css" href="/css/style.css"/>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
@extends('layout.main')
@section('title','modification d\'utilisateur')
@section('titre','modification d\'utilisateur')
@section('contenu')
<div class="ajouel">
<form action="/users/update/{{ $utilisateur->id }}" method="post"/>
@csrf
<fieldset>
<label>Prénom</label><br>
<input type="text" name="prenoms" value="{{ $utilisateur->prenoms }}"/><br><br>
<label>Nom</label><br>
<input type="text" name="Noms" value="{{ $utilisateur->Noms }}"/><br><br>
<label>Login</label><br>
<input type="text" name="Login" value="{{ $utilisateur->Login }}"/><br><br>
<label>Mot de passe</label><br>
<input type="password" name="Mdp" value="{{ $utilisateur->Mdp }}"/><br><br>
<input type="submit" name="envoyer" value="modifier" class="btn btn-success"/>
</fieldset>
</form>
</div>
@endsection