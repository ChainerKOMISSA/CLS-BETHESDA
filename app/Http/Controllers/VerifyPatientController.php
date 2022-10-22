<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VerifyPatientController extends Controller
{
    public function index(){
        return view('layouts.verifypatient');
    }
}
