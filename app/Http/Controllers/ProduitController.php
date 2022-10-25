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

        return view('layouts.listeproduits', compact('produits'));
    }

    public function index2(){
        $ruptures = DB::table('produit')
                        ->select('*')
                        ->where('qtestock', '<', 5)
                        ->get();

        return view('layouts.listerupture', compact('ruptures'));
    }

    public function modify(Produit $produit){

        return view('layouts.modifyproduit', compact("patient"));
    }

    public function create(){

        $types = Type::all();
        return view('layouts.newproduit', compact("types"));
    }

    public function store(REQUEST $request){
        $request->validate([
            "nomproduit"=>"required",
            "prixproduit"=>"required",
            "type_id"=>"required"
        ]);

        Produit::create([
            "nomproduit"=> $request->nomproduit,
            "prixproduit"=> $request->prixproduit,
            "type_id"=> $request->type_id
        ]);

        return back()->with("success", "Produit ajouté avec succès!");
    }

    public function edit(){
        return view('layouts.editproduit');
    }


    public function update(REQUEST $request,Produit $produit){
        $request->validate([
            "nomproduit"=>"required",
            "prixproduit"=>"required",
            "type_id"=>"required",
            "qte"=>"required",
        ]);

        $produit->update([
            "nomproduit"=> $request->nomproduit,
            "prixproduit"=> $request->prixproduit,
            "type_id"=> $request->required
        ]);

        return back()->with("success", "Produit modifié avec succès!");
    }

    public function delete($produit){
        Produit::find($produit)->delete();

        return back()->with("successDelete", "Le produit a été supprimé!");
    }


}
