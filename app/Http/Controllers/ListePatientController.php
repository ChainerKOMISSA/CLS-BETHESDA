<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ListePatientController extends Controller
{
    public function index(){
        return view('layouts.listepatient');
    }
}
