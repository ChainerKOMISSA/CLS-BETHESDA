<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


//PATIENT
Route::get('/newpatient', [App\Http\Controllers\PatientController::class, 'index'])->name('newpatient');

Route::get('/listepatient', [App\Http\Controllers\ListePatientController::class, 'index'])->name('listepatient');

Route::post('/ajoutpatient', [App\Http\Controllers\PatientController::class, 'store'])->name('ajoutpatient');

Route::get('/editpatient', [App\Http\Controllers\PatientController::class, 'edit'])->name('editpatient');

Route::delete('/deletepatient/{patient}', [App\Http\Controllers\PatientController::class, 'delete'])->name('deletepatient');

Route::put('/updatepatient/{patient}', [App\Http\Controllers\PatientController::class, 'update'])->name('updatepatient');

Route::get('/modifypatient/{patient}', [App\Http\Controllers\PatientController::class, 'modify'])->name('modifypatient');





//PERSONNEL
Route::get('/newinfirmier', [App\Http\Controllers\InfirmierController::class, 'index'])->name('newinfirmier');

Route::get('/listeinfirmier', [App\Http\Controllers\ListeInfirmierController::class, 'index'])->name('listeinfirmier');

Route::post('/ajoutinfirmier', [App\Http\Controllers\InfirmierController::class, 'store'])->name('ajoutinfirmier');

Route::delete('/deleteinfirmier/{infirmier}', [App\Http\Controllers\InfirmierController::class, 'delete'])->name('deleteinfirmier');

Route::put('/updateinfirmier/{infirmier}', [App\Http\Controllers\InfirmierController::class, 'update'])->name('updateinfirmier');

Route::get('/modifyinfirmier/{infirmier}', [App\Http\Controllers\InfirmierController::class, 'modify'])->name('modifyinfirmier');




//PHARMACIE
Route::get('/listecomprimes', [App\Http\Controllers\ListeComprimesController::class, 'index'])->name('listecomprimes');

Route::get('/listesirop', [App\Http\Controllers\ListeSiropController::class, 'index'])->name('listesirop');

Route::get('/listeinjectable', [App\Http\Controllers\ListeInjectableController::class, 'index'])->name('listeinjectables');

Route::get('/listeautre', [App\Http\Controllers\ListeAutreController::class, 'index'])->name('listeautre');

Route::get('/listeproduits', [App\Http\Controllers\ProduitController::class, 'index'])->name('listeproduits');

Route::get('/listerupture', [App\Http\Controllers\ProduitController::class, 'index2'])->name('listerupture');

Route::get('/newproduit', [App\Http\Controllers\ProduitController::class, 'create'])->name('newproduit');

Route::post('/ajoutproduit', [App\Http\Controllers\ProduitController::class, 'store'])->name('ajoutproduit');

Route::put('/updateproduit/{produit}', [App\Http\Controllers\ProduitController::class, 'update'])->name('updateproduit');

Route::get('/modifyproduit/{produit}', [App\Http\Controllers\ProduitController::class, 'modify'])->name('modifyproduit');





//GYNECOLOGIE
Route::get('/newcpn', [App\Http\Controllers\PatientGController::class, 'index'])->name('newcpn');




//BOUTONS DU TABLEAU DE BORD
Route::get('/analyses', [App\Http\Controllers\ListeAnalysesController::class, 'index'])->name('listeanalyses');

Route::get('/newanalyse', [App\Http\Controllers\AnalyseController::class, 'index'])->name('newanalyse');

Route::post('/ajoutanalyse', [App\Http\Controllers\AnalyseController::class, 'store'])->name('ajoutanalyse');

Route::put('/updateanalyse/{analyse}', [App\Http\Controllers\AnalyseController::class, 'update'])->name('updateanalyse');

Route::get('/modifyanalyse/{analyse}', [App\Http\Controllers\AnalyseController::class, 'modify'])->name('modifyanalyse');


//TRAITEMENT
Route::get('/newtraitement', [App\Http\Controllers\TraitementController::class, 'index'])->name('newtraitement');

Route::post('/ajouttraitement', [App\Http\Controllers\TraitementController::class, 'store'])->name('ajouttraitement');

Route::get('/listetraitement', [App\Http\Controllers\TraitementController::class, 'show'])->name('listetraitement');

Route::get('/nonsoldes', [App\Http\Controllers\TraitementController::class, 'nonsoldes'])->name('nonsoldes');

Route::put('/updatetraitement/{traitement}', [App\Http\Controllers\TraitementController::class, 'update'])->name('updatetraitement');

Route::get('/modifytraitement/{traitement}', [App\Http\Controllers\TraitementController::class, 'modify'])->name('modifytraitement');


//VENTE DE PRODUIT
Route::get('/venteproduit', [App\Http\Controllers\VenteController::class, 'index'])->name('venteproduit');



//FACTURE
Route::get('/facture', [App\Http\Controllers\FactureController::class, 'index'])->name('facture');
