<?php

namespace App\Http\Controllers;

use App\Models\Patient;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class PatientController extends Controller
{
    public function index(){

        return view('layouts.newpatient');
    }

    public function modify(Patient $patient){

        return view('layouts.modifypatient', compact("patient"));
    }

     public function create(){

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

    public function show($id){

    }

    public function edit(){
        return view('layouts.editpatient');
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
        $nomcomplet = $patient->nom . " " . $patient->prenom;

        return back()->with("successDelete", "Le patient '$nomcomplet' a été supprimé!");
    }


}
