<?php

namespace App\Http\Controllers;

use App\Models\resultat;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;


class ResultatController extends Controller
{
    //Ajouter le résultat d'un etudiant
    public function store(Request $request, string $code){
        try {
            
            if(!$code) {
                return response()->json([
                'success' => false,
                'errors' => 'Aucun donnée fournie'
            ], 422);

            }
            $request->validate([
                'note' => 'required|integer',
                'appreciation' => 'required|string|max:255',
                'pourcentage' => 'required|numeric',
            ]);
            $resultat = new resultat();
            $resultat->code = resultat::generateuniquecode();
            $resultat->codeEtudiant = $code;
            $resultat->note = $request->note;
            $resultat->appreciation = $request->appreciation;
            $resultat->pourcentage = $request->pourcentage;
            $resultat->save();
            return response()->json([
                'success' => true,
                'data' => $resultat
            ],200);
        } catch (ValidationException $e) {
            return response()->json([
                'success' => false,
                'errors' => $e->errors()
            ], 422);
        } catch (Exception $e) {
            return response()->json([
                'success' => false,
                'errors' => ['server' => $e->getMessage()] 
            ], 500); // 500 pour erreur serveur
        }
    }
}
