<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ListeInjectableController extends Controller
{
    public function index(){
        $injectables = DB::table('produit')
                        ->select('*')
                        ->where('type_id', '3')
                        ->get();

        return view('layouts.listeinjectables', ['injectables' => $injectables]);
    }
}
