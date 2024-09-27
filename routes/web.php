<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EtudiantController;

// Route pour afficher la liste des étudiants
Route::get('/etudiant', [EtudiantController::class, 'liste_etudiant'])->name('etudiant.liste');

// Route pour afficher le formulaire d'ajout d'un étudiant
Route::get('/ajouter', [EtudiantController::class, 'ajouter_etudiant'])->name('etudiant.ajouter');

// Route pour traiter l'ajout d'un étudiant (POST)
Route::post('/ajouter/traitement', [EtudiantController::class, 'ajouter_etudiant_traitement'])->name('etudiant.ajouter.traitement');

// Route pour afficher le formulaire de mise à jour d'un étudiant
Route::get('/update-etudiant/{id}', [EtudiantController::class, 'update_etudiant'])->name('etudiant.update');

// Route pour traiter la mise à jour d'un étudiant (POST)
Route::post('/update/traitement', [EtudiantController::class, 'update_etudiant_traitement'])->name('etudiant.update.traitement');
