<link rel="stylesheet" type="text/css" href="/css/style.css"/>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
@extends('layout.main')
@section('title','ajoute d\'utilisateur')
@section('titre','ajoute d\'utilisateur')
@section('contenu')
<div class="ajouel">
<form action="/users/ajouter" method="post"/>
@csrf
<fieldset>
<label>Prénom</label><br>
<input type="text" name="prenoms" value="{{old('prenoms')}}"/><br><br>
<label>Nom</label><br>
<input type="text" name="Noms" value="{{old('Noms')}}"/><br><br>
<label>Login</label><br>
<input type="text" name="Login" value="{{old('Login')}}"/><br><br>
<label>Mot de passe</label><br>
<input type="password" name="Mdp" value="{{old('Mdp')}}"/><br><br>
<input type="submit" name="envoyer" value="ajouter" class="btn btn-success"/>
</fieldset>
</form>
</div>
@endsection