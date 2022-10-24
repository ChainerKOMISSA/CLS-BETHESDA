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

Route::get('/editinfirmier', [App\Http\Controllers\InfirmierController::class, 'edit'])->name('editinfirmier');

Route::delete('/deleteinfirmier/{infirmier}', [App\Http\Controllers\InfirmierController::class, 'delete'])->name('deleteinfirmier');

Route::put('/updateinfirmier/{infirmier}', [App\Http\Controllers\InfirmierController::class, 'update'])->name('updateinfirmier');

Route::get('/modifyinfirmier/{infirmier}', [App\Http\Controllers\InfirmierController::class, 'modify'])->name('modifyinfirmier');




//PHARMACIE
Route::get('/listecomprimes', [App\Http\Controllers\ListeComprimesController::class, 'index'])->name('listecomprimes');

Route::get('/newproduit', [App\Http\Controllers\ProduitController::class, 'create'])->name('newproduit');

Route::post('/ajoutproduit', [App\Http\Controllers\ProduitController::class, 'store'])->name('ajoutproduit');

Route::get('/editproduit', [App\Http\Controllers\ProduitController::class, 'edit'])->name('editproduit');

Route::delete('/deleteproduit/{produit}', [App\Http\Controllers\ProduitController::class, 'delete'])->name('deleteproduit');

Route::put('/updateproduit/{produit}', [App\Http\Controllers\ProduitController::class, 'update'])->name('updateproduit');

Route::get('/modifyproduit/{produit}', [App\Http\Controllers\ProduitController::class, 'modify'])->name('modifyproduit');





//GYNECOLOGIE
Route::get('/newcpn', [App\Http\Controllers\PatientGController::class, 'index'])->name('newcpn');







