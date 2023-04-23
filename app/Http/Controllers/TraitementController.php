<?php

namespace App\Http\Controllers;

use App\Models\Analyse;
use App\Models\Patient;
use App\Models\Produit;
use App\Models\Soin;
use App\Models\Traitement;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TraitementController extends Controller
{
    public function index(){
        $patients = Patient::all();
        $analyses = Analyse::all();

        $dispos = DB::table('produit')
                     ->select('*')
                     ->where('qtestock', '>', 0)
                     ->get();

        return view ('layouts.newtraitement')
               ->with(compact('patients'))
               ->with(compact('analyses'))
               ->with(compact('dispos'));
    }



    public function show(){

        $traitements = DB::table('traitement')->get();

        /*$traitements = Patient::find(1)->traitements;
        $produit = Produit::find(1)->traitements;
        $analyse = Analyse::find(1)->traitements;*/

        //$traitements = Traitement::with('patient', 'produit', 'analyse')->get();

        return view('layouts.listetraitement')
               ->with(compact('traitements'));
               //->with(compact('produit'))
               //->with(compact('analyse'));
    }

    public function nonsoldes(){
        $nonsoldes = DB::table('traitement')
                        ->select('*')
                        ->where('paiement', '=', 'non')
                        ->get();

        return view('layouts.nonsoldes', compact('nonsoldes'));
    }

    public function store(REQUEST $request){
        $request->validate([
            "date"=>"required",
            "patient_id"=>"required",
            "plaintes"=>"required",
            "analyse_id"=>"required",
            "resultat"=>"required",
            "diagnostic"=>"required",
            "produit_id"=>"required",
            "montant"=>"required",
            "paiement"=>"required",


        ]);

        Traitement::create([
            "date"=>$request->date,
            "patient_id"=>$request->patient_id,
            "plaintes"=>$request->plaintes,
            "analyse_id"=>$request->analyse_id,
            "resultat"=>$request->resultat,
            "diagnostic"=>$request->diagnostic,
            "produit_id"=>$request->produit_id,
            "montant"=>$request->montant,
            "paiement"=>$request->paiement
        ]);

        return back()->with("success", "Traitement enregistré");

    }

    public function modify(Traitement $traitement){

        $patients = Patient::all();
        $analyses = Analyse::all();

        $dispos = DB::table('produit')
                     ->select('*')
                     ->where('qtestock', '>', 0)
                     ->get();

        return view('layouts.modifytraitement')
                ->with(compact('patients'))
                ->with(compact('analyses'))
                ->with(compact('traitement'))
                ->with(compact('dispos'));
    }

    public function update(REQUEST $request,Traitement $traitement){
        $request->validate([
            "date"=>"required",
            "patient_id"=>"required",
            "plaintes"=>"required",
            "analyse_id"=>"required",
            "resultat"=>"required",
            "diagnostic"=>"required",
            "produit_id"=>"required",
            "montant"=>"required",
            "paiement"=>"required",
        ]);

        $traitement->update([
            "date"=>$request->date,
            "patient_id"=>$request->patient_id,
            "plaintes"=>$request->plaintes,
            "analyse_id"=>$request->analyse_id,
            "resultat"=>$request->resultat,
            "diagnostic"=>$request->diagnostic,
            "produit_id"=>$request->produit_id,
            "montant"=>$request->montant,
            "paiement"=>$request->paiement
        ]);


        return back()->with("success", "Traitement modifié");
    }
}
