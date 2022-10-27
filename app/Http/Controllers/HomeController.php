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
        $countrupture = $countrupt[0]->Nbre;
        $counttraitement = DB::table('traitement')->count();

        $non = DB::table('traitement')
                        ->select(DB::raw('COUNT(id) as Nbre'))
                        ->where('paiement', '=', 'non')
                        ->get();
        $nonsoldes = $non[0]->Nbre;
        //dd($nonsoldes);

        return view('home')
               ->with(compact('countprod'))
               ->with(compact('countpatient'))
               ->with(compact('countinf'))
               ->with(compact('countrupture'))
               ->with(compact('counttraitement'))
               ->with(compact('nonsoldes'));
    }
}
