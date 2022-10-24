<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PatientGController extends Controller
{
    public function index(){
        return view('layouts.newcpn');
    }

}
