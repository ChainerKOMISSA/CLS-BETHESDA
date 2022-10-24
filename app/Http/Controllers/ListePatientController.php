<?php

namespace App\Http\Controllers;

use App\Models\Patient;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ListePatientController extends Controller
{
    public function index(){
        $patients = DB::table('patient')->get();
        return view('layouts.listepatient', ['patients' => $patients]);
    }

}
