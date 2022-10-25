<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ListeSiropController extends Controller
{
    public function index(){
        $sirops = DB::table('produit')
                        ->select('*')
                        ->where('type_id', '2')
                        ->get();

        return view('layouts.listesirops', ['sirops' => $sirops]);
    }
}
