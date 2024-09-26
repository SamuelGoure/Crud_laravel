<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EtudiantController extends Controller
{
   public function liste_etudiant() {
       // Retourne la vue 'etudiant.liste'
       return view('etudiant.liste');
   }

   public function ajouter_etudiant() {
    // Retourne la vue 'etudiant.liste'
    return view('etudiant.ajouter');
}
}
