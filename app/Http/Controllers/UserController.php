<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class UserController extends Controller
{
    public function list()
    {
        $utilisateurs = DB::select('SELECT * from utilisateur');
      return view('users.list', compact('utilisateurs'));
    }
    public function ajouter()
    {
      return view('users.ajouter');
    }
    public function store()
    {
        if(!empty(request('prenoms'))&& !empty(request('Noms'))&& !empty(request('Login'))&& !empty(request('Mdp')))
        {
            $utilisateur = DB::select('SELECT * from utilisateur where Login = ?',[request('Login')]);
if(empty($utilisateur))
{
           
    $requete ='INSERT into utilisateur(prenoms, Noms, Login, Mdp) values (:prenoms, :Noms, :Login, :Mdp)';
       $status = DB::insert($requete,[
            'prenoms' =>request('prenoms'),
            'Noms' =>request('Noms'),
            'Login' =>request('Login'),
            'Mdp' =>request('Mdp')
        ]);
     if($status === true)
     {
        $message = "Ajout effectué avec succès"; 
     }
     else 
     {
        $message = "Echec insertion";
     }
     return redirect('/users/list')->with(['status' => $status,  'message' => $message]);
}
else
{
    return back()->withInput()->with('message','Erreur: le login existe déjà');
}
        }
       else
       {
          return back()->withInput()->with('message','Erreur: Vous devez remplir tous les champs');
       }
    }
    public function delete($id)
    {
        $affected = DB::delete('DELETE from utilisateur where id = ?',[$id]);
        if($affected > 0)
        {
            $message = "suppression effectuée avec succès";
        }
        else
        {
            $message = "Echec de suppression";
        } 
        return redirect('/users/list')->with(['status' =>$affected,'message'=>$message]);
    }

    public function edit($id)
    {
     $utilisateur = DB::select('SELECT * from utilisateur where id = ?',[$id]);
     if(!empty($utilisateur))
     {
              $utilisateur = $utilisateur[0];
              return view('users.edit',compact('utilisateur')); 
     }
     else
     {
        abort(404);
     }
    }
    public function update($id)
    {

      
      if(!empty(request('prenoms'))&& !empty(request('Noms'))&& !empty(request('Login'))&& !empty(request('Mdp')))
        {
            $requete = 'UPDATE utilisateur SET prenoms = :prenoms, Noms = :Noms, Login = :Login, Mdp = :Mdp where id = :id';
       $affected =  DB::update($requete,[
            'id'=>$id,
            'prenoms' =>request('prenoms'),
            'Noms' =>request('Noms'),
            'Login'=>request('Login'),
            'Mdp'=>request('Mdp')
        ]);

       if($affected > 0)
        {
            $message = "modification effectuée avec succès";
        }
        else
        {
            $message = "Echec de modification";
        } 
        return redirect('/users/list')->with(['status' =>$affected,'message'=>$message]);
        }
       else
       {
          return back()->withInput()->with('message','Erreur: Vous devez remplir tous les champs');
       }
    }
    public function show($id)
    {
        $utilisateur = DB::select('SELECT * from utilisateur where id = ?',[$id]);
        $utilisateur = $utilisateur[0];
        return view('users.show',compact('utilisateur'));
    }
 }