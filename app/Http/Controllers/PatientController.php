<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PatientController extends Controller
{
    public function index(){
        return view('layouts.newpatient');
    }

    public function getinfo(REQUEST $request){
        $date = $request->input('date');
        $nom = $request->input('nom');
        $prenom = $request->input('prenom');
        $quartier = $request->input('quartier');
        $sexe = $request->input('sexe');
        $age = $request->input('age');
        $telephone = $request->input('telephone');
        $temp = $request->input('temp');
        $tadroit = $request->input('tadroit');
        $tagauche = $request->input('tagauche');
    }

}
