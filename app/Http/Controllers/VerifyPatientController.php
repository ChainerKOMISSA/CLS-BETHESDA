<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class VerifyPatientController extends Controller
{
    public function index(REQUEST $request){
        $date = $request->input('date');
        $nom = $request->input('nom');
        /*$request = Http::post('https://localhost:8000/newpatient', [
            'date' => $request->date,
            'nom' => $request->nom,
            'prenom' => $request->prenom,
            'quartier' => $request->quartier,
            'sexe' => $request->sexe,
            'age' => $request->age,
            'telephone' => $request->telephone,
            'temp' => $request->temp,
            'tadroit' => $request->tadroit,
            'tagauche' => $request->tagauche,
            'poids' => $request->poids
        ]);*/
    return view('layouts.verifypatient', [$date], [$nom]);
    }
}
