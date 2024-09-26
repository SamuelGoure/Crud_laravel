<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EtudiantController;

// Route pour afficher la liste des étudiants
Route::get('etudiant', [EtudiantController::class, 'liste_etudiant']);

// Route pour afficher le formulaire d'ajout d'un étudiant
Route::get('ajouter', [EtudiantController::class, 'ajouter_etudiant']);

// Route pour traiter l'ajout d'un étudiant (doit être POST)
Route::post('ajouter/traitement', [EtudiantController::class, 'ajouter_etudiant_traitement']);
