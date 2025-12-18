<?php

namespace App\Http\Controllers;

use App\Models\Etudiant;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class EtudiantController extends Controller
{
    // Recuperer la liste des etudiants
    public function listeDesEtudiants(){
        try {
            //code...
            $listeEtudiant = Etudiant::all();
            return response()->json([
                'listeEtudiant' => $listeEtudiant,
            ]);
        } catch (Exception $e) {
            return response()->json([
                'success' => false,
                'errors' => ['server' => $e->getMessage()] 
            ], 500); // 500 pour erreur serveur
        }
    }

    // L'ajout d'un etudiant 
    public function store(Request $request){
        try {
            $request->validate([
                'nom' => 'required|string|max:255',
                'prenom' => 'required|string|max:255',
                'classe' => 'required|string|max:255',
                'promotion' => 'required|string|max:255',
                'matricule' => 'required|string|max:255',
                'departement' => 'required|string|max:255',
                'email' => 'nullable|string|email|max:255',
            ]);
            $etudiant = new Etudiant();
            $etudiant->code = Etudiant::generateuniquecode();
            $etudiant->nom = $request->nom;
            $etudiant->prenom = $request->prenom;
            $etudiant->classe = $request->classe;
            $etudiant->promotion = $request->promotion;
            $etudiant->matricule = $request->matricule;
            $etudiant->departement = $request->departement;
            $etudiant->email = $request->email;
            $etudiant->save();
            return response()->json([
                'success' => true,
                'data' => $etudiant
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

    //Recupérer l'étudiant à travers son code
    public function getEtudiant($code) {
        try {
            if(!$code){
                return response()->json([
                    'success' => false,
                    'error' => 'Aucun code envoyé'
                ]);
            }
            $etudiant = Etudiant::where('code',$code)->first();
            if($etudiant){
                return response()->json([
                    'success' => true,
                    'data' => $etudiant
                ]);
            }else {
                return response()->json([
                    'success' => false,
                    'error' => 'Aucun étudiant avec ce code'
                ]);
            }

        } catch (Exception $e) {
            return response()->json([
                'success' => false,
                'errors' => ['server' => $e->getMessage()] 
            ], 500); // 500 pour erreur serveur
        }
    }

}
