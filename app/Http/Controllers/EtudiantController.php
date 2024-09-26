<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Newcustomer;

class EtudiantController extends Controller
{
   // Méthode pour afficher la liste des étudiants
   public function liste_etudiant() {
       // Retourne la vue 'etudiant.liste'
       return view('etudiant.liste');
   }

   // Méthode pour afficher le formulaire d'ajout d'un étudiant
   public function ajouter_etudiant() {
       // Retourne la vue 'etudiant.ajouter'
       return view('etudiant.ajouter');
   }

   // Méthode pour traiter l'ajout d'un étudiant
   public function ajouter_etudiant_traitement(Request $request) {
       // Valider les données du formulaire
       $request->validate([
        'nom' => 'required|string|max:100',
        'prenom' => 'required|string|max:100',
        'age' => 'required|integer|min:1|max:120',
    ], [
        'nom.required' => 'Le nom est requis.',
        'prenom.required' => 'Le prénom est requis.',
        'age.required' => 'L\'âge est requis.',
        'age.integer' => 'L\'âge doit être un nombre entier.',
        'age.min' => 'L\'âge doit être au moins de 1 an.',
        'age.max' => 'L\'âge doit être inférieur ou égal à 120 ans.',
    ]);
    
       // Création d'un nouvel étudiant
       $etudiant = new Newcustomer();
       $etudiant->nom = $request->nom;
       $etudiant->prenom = $request->prenom;
       $etudiant->age = $request->age;
       $etudiant->save();  // Sauvegarde dans la base de données

       // Redirection avec un message de succès
       return redirect('/ajouter')->with('status', 'L\'étudiant a bien été ajouté avec succès.');
   }
}
