<?php

namespace App\Http\Controllers;

use App\Models\Produit;
use Illuminate\Http\Request;

class VenteController extends Controller
{
    public function index(){
        $produits = Produit::all();

        return view ('layouts.venteproduit', compact('produits'));
    }


}
