<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EtudiantController;


Route::get('etudiant', [EtudiantController::class,'liste_etudiant']);
Route::get('ajouter', [EtudiantController::class,'ajouter_etudiant']);