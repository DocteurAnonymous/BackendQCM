<?php

use App\Http\Controllers\EtudiantController;
use App\Http\Controllers\QuestionnaireController;
use App\Http\Controllers\ResultatController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


//LES ROUTES POUR LES ETUDIANTS
// Creer un etudiant
Route::post('/etudiant',[EtudiantController::class,'store']);
// Recupérer les informations d'un etudiant à travers son code
Route::get('/etudiant/{code}',[EtudiantController::class,'getEtudiant']);


// LES ROUTES POUR LES RESULTATS
// enregistrer un resultat (celui de l'étudiant)
Route::post('/resultat/{code}',[ResultatController::class,'store']);



//LES ROUTES POUR LES QUESTIONNAIRES
//Obtenir la liste des questionnaires
Route::get('/questionnaires',[QuestionnaireController::class,'liste']);