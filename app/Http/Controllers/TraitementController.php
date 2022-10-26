<?php

namespace App\Http\Controllers;

use App\Models\Analyse;
use App\Models\Patient;
use Illuminate\Http\Request;

class TraitementController extends Controller
{
    public function index(){
        $patients = Patient::all();
        $analyses = Analyse::all();
        return view ('layouts.newtraitement', compact('patients', 'analyses'));
    }
}
