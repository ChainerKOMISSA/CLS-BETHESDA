<?php

namespace App\Http\Controllers;

use App\Models\Analyse;
use App\Models\Patient;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Symfony\Component\Console\Input\Input;

class PatientController extends Controller
{
    public function index(){

        return view('layouts.newpatient');
    }

    public function modify(Patient $patient){

        return view('layouts.modifypatient', compact("patient"));
    }

    public function store(REQUEST $request){
        $request->validate([
            "date"=>"required",
            "nom"=>"required",
            "prenom"=>"required",
            "age"=>"required",
            "quartier"=>"required",
            "sexe"=>"required",
            "telephone"=>"required",
            "temp"=>"required",
            "poids"=>"required",
            "tadroit"=>"required",
            "tagauche"=>"required",
        ]);

        //Patient::create($request->all());

        Patient::create([
            "nom"=> $request->nom,
            "prenom"=> $request->prenom,
            "age"=> $request->age,
            "quartier"=> $request->quartier,
            "sexe"=> $request->sexe,
            "telephone"=> $request->telephone
        ]);

        return back()->with("success", "Patient ajouté avec succès!");
    }

    public function edit(REQUEST $request){
        /*$data = Http::get('http://127.0.0.1:8000/listepatient', [
            "nom"=>$request->nom
        ]);*/

        $patient = Patient::all();
        $analyses = Analyse::all();
        return view('layouts.editpatient', compact("patient","analyses"));
    }


    public function update(REQUEST $request,Patient $patient){
        $request->validate([
            "date"=>"required",
            "nom"=>"required",
            "prenom"=>"required",
            "age"=>"required",
            "quartier"=>"required",
            "sexe"=>"required",
            "telephone"=>"required",
            "temp"=>"required",
            "poids"=>"required",
            "tadroit"=>"required",
            "tagauche"=>"required",
        ]);

        //Patient::create($request->all());

        $patient->update([
            "nom"=> $request->nom,
            "prenom"=> $request->prenom,
            "age"=> $request->age,
            "quartier"=> $request->quartier,
            "sexe"=> $request->sexe,
            "telephone"=> $request->telephone
        ]);

        return back()->with("success", "Patient modifié avec succès!");
    }

    public function delete($patient){
        Patient::find($patient)->delete();

        return back()->with("successDelete", "Le patient a été supprimé!");
    }



}
