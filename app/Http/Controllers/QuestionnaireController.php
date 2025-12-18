<?php

namespace App\Http\Controllers;

use App\Models\Questionnaire;
use Illuminate\Http\Request;

class QuestionnaireController extends Controller
{
    // Recuperer la liste des etudiants
    public function liste(){
        $questionnaires = Questionnaire::all();
        return response()->json([
            'success' => true,
            'data' => $questionnaires,
        ]);
    }
}
