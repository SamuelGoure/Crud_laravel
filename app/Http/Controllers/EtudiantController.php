<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Newcustomer;

class EtudiantController extends Controller
{
   // Méthode pour afficher la liste des étudiants
   public function liste_etudiant() {
       $etudiants = Newcustomer::all();
       // Retourne la vue 'etudiant.liste'
       return view('etudiant.liste', compact('etudiants'));
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
       return redirect('/etudiant')->with('status', 'L\'étudiant a bien été ajouté avec succès.');
   }

   // Méthode pour afficher le formulaire de mise à jour d'un étudiant
   public function update_etudiant($id) {
       // Trouve l'étudiant par son ID
       $etudiant = Newcustomer::find($id);

       // Vérifie si l'étudiant existe
       if (!$etudiant) {
           return redirect('/etudiant')->with('error', 'Étudiant non trouvé.');
       }

       // Retourne la vue 'etudiant.update' avec l'étudiant trouvé
       return view('etudiant.update', compact('etudiant'));
   }

   // Méthode pour traiter la mise à jour d'un étudiant
   public function update_etudiant_traitement(Request $request) {
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
       
       // Trouver l'étudiant et mettre à jour ses données
       $etudiant = Newcustomer::findOrFail($request->id);
       $etudiant->nom = $request->nom;
       $etudiant->prenom = $request->prenom;
       $etudiant->age = $request->age;
       $etudiant->save();  // Sauvegarder les modifications

       // Redirection avec un message de succès
       return redirect('/etudiant')->with('status', 'L\'étudiant a bien été modifié avec succès.');
   }
}
