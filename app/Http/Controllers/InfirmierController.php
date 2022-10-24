<?php

namespace App\Http\Controllers;

use App\Models\Infirmier;
use Illuminate\Http\Request;

class InfirmierController extends Controller
{
    public function index(){

        return view('layouts.newinfirmier');
    }

    public function modify(Infirmier $infirmier){

        return view('layouts.modifyinfirmier', compact("infirmier"));
    }

    public function store(REQUEST $request){
        $request->validate([
            "nom"=>"required",
            "prenom"=>"required",
            "grade"=>"required",
        ]);

        //Infirmier::create($request->all());

        Infirmier::create([
            "nom"=> $request->nom,
            "prenom"=> $request->prenom,
            "grade"=> $request->grade
        ]);

        return back()->with("success", "Infirmier ajouté avec succès!");
    }

    public function edit(){
        return view('layouts.editinfirmier');
    }


    public function update(REQUEST $request,Infirmier $infirmier){
        $request->validate([
            "date"=>"required",
            "nom"=>"required",
            "prenom"=>"required",
            "grade"=>"required"
        ]);

        //Patient::create($request->all());

        $infirmier->update([
            "nom"=> $request->nom,
            "prenom"=> $request->prenom,
            "grade"=> $request->grade,
        ]);

        return back()->with("success", "Patient modifié avec succès!");
    }

    public function delete($infirmier){
        Infirmier::find($infirmier)->delete();
        $nomcomplet = $infirmier->nom . " " . $infirmier->prenom;

        return back()->with("successDelete", "Infirmier '$nomcomplet' supprimé!");
    }


}
