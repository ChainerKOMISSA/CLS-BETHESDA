<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ListeComprimesController extends Controller
{
    public function index(){
        $comprimes = DB::table('produit')
                        ->select('*')
                        ->where('type_id', '1')
                        ->get();

        return view('layouts.listecomprimes', ['comprimes' => $comprimes]);
    }
}
