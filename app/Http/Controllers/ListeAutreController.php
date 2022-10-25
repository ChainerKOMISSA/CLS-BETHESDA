<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ListeAutreController extends Controller
{
    public function index(){
        $autres = DB::table('produit')
                        ->select('*')
                        ->where('type_id', '4')
                        ->get();

        return view('layouts.listeautres', ['autres' => $autres]);
    }
}
