<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ListeInfirmierController extends Controller
{
    public function index(){
        $infirmiers = DB::table('infirmier')->get();
        
        return view('layouts.listeinfirmier', ['infirmiers' => $infirmiers]);
    }
}
