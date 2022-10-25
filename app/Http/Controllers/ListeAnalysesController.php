<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ListeAnalysesController extends Controller
{
    public function index(){
        $analyses = DB::table('analyse')->get();

        return view('layouts.listeanalyses', ['analyses' => $analyses]);
    }
}
