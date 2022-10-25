<?php

namespace App\Http\Controllers;

use App\Models\Analyse;
use Illuminate\Http\Request;

class AnalyseController extends Controller
{
    public function index(){

        return view('layouts.newanalyse');
    }

    public function store(REQUEST $request){
        $request->validate([
            "nom"=>"required",
            "description"=>"required",
            "prix"=>"required",
            "prixCMS"=>"required"
        ]);

        Analyse::create([
            "nom"=> $request->nom,
            "description"=> $request->description,
            "prix"=> $request->prix,
            "prixCMS"=> $request->prixCMS
        ]);

        return back()->with("success", "Analyse ajoutée avec succès!");
    }

    public function update(REQUEST $request,Analyse $analyse){
        $request->validate([
            "nom"=>"required",
            "description"=>"required",
            "prix"=>"required",
            "prixCMS"=>"required"
        ]);

        $analyse->update([
            "nom"=> $request->nom,
            "description"=> $request->description,
            "prix"=> $request->prix,
            "prixCMS"=> $request->prixCMS
        ]);

        return back()->with("success", "Analyse modifiée avec succès!");
    }

    public function modify(Analyse $analyse){

        return view('layouts.modifyanalyse', compact("analyse"));
    }
}
