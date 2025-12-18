<?php

use App\Http\Controllers\EtudiantController;
use App\Http\Controllers\QuestionnaireController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


//LES ROUTES POUR LES ETUDIANTS
// Creer un etudiant
Route::post('/etudiant',[EtudiantController::class,'store']);



//LES ROUTES POUR LES QUESTIONNAIRES
//Obtenir la liste des questionnaires
Route::get('/questionnaires',[QuestionnaireController::class,'liste']);