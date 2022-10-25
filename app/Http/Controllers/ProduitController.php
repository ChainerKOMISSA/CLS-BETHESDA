<?php

namespace App\Http\Controllers;

use App\Models\Produit;
use App\Models\Type;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProduitController extends Controller
{
    public function index(){

        $produits = DB::table('produit')->get();
        $types = Type::all();
        Produit::with('type')->get();

        return view('layouts.listeproduits', compact('produits', 'types'));
    }

    public function create(){

        $types = Type::all();
        return view('layouts.newproduit', compact("types"));
    }

    public function index2(){
        $ruptures = DB::table('produit')
                        ->select('*')
                        ->where('qtestock', '<', 5)
                        ->get();

        return view('layouts.listerupture', compact('ruptures'));
    }

    public function modify(Produit $produit){

        $types = Type::all();
        return view('layouts.modifyproduit', compact("produit", "types"));
    }

    public function store(REQUEST $request){
        $request->validate([
            "nomproduit"=>"required",
            "indication"=>"required",
            "prixproduit"=>"required",
            "type_id"=>"required",
            "qtestock"=>"required",
            "qtevendue"=>"required"
        ]);

        //Produit::create($request->all());

        Produit::create([
            "nomproduit"=>$request->nomproduit,
            "indication"=>$request->indication,
            "prixproduit"=>$request->prixproduit,
            "type_id"=>$request->type_id,
            "qtestock"=>$request->qtestock,
            "qtevendue"=>$request->qtevendue
        ]);

        return back()->with("success", "Produit ajouté avec succès!");
    }

    public function edit(){
        return view('layouts.editproduit');
    }


    public function update(REQUEST $request,Produit $produit){
        $request->validate([
            "nomproduit"=>"required",
            "indication"=>"required",
            "prixproduit"=>"required",
            "type_id"=>"required",
            "qtestock"=>"required",
            "qtevendue"=>"required"
        ]);

        $produit->update([
            "nomproduit"=>$request->nomproduit,
            "indication"=>$request->indication,
            "prixproduit"=>$request->prixproduit,
            "type_id"=>$request->type_id,
            "qtestock"=>$request->qtestock,
            "qtevendue"=>$request->qtevendue
        ]);


        return back()->with("success", "Produit modifié avec succès!");
    }

    /*public function delete($produit){
        Produit::find($produit)->delete();

        return back()->with("successDelete", "Le produit a été supprimé!");
    }*/


}
