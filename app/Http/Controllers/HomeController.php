<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $countpatient = DB::table('patient')->count();
        $countinf = DB::table('infirmier')->count();
        $countprod = DB::table('produit')->count();
        $countrupt = DB::table('produit')
                            ->select(DB::raw('COUNT(id) as Nbre'))
                            ->where('qtestock', '<', 5)
                            ->get();

        //dd($countrupt[0]->Nbre);
        $countrupture = $countrupt[0]->Nbre;
        //dd($countrupture);

        return view('home')
               ->with(compact('countprod'))
               ->with(compact('countpatient'))
               ->with(compact('countinf'))
               ->with(compact('countrupture'));
    }
}
