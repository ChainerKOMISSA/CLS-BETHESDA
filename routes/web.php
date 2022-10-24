<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/newpatient', [App\Http\Controllers\PatientController::class, 'index'])->name('newpatient');

Route::get('/listepatient', [App\Http\Controllers\ListePatientController::class, 'index'])->name('listepatient');

Route::post('/ajoutpatient', [App\Http\Controllers\PatientController::class, 'store'])->name('ajoutpatient');

Route::get('/editpatient', [App\Http\Controllers\PatientController::class, 'edit'])->name('editpatient');

Route::delete('/deletepatient/{patient}', [App\Http\Controllers\PatientController::class, 'delete'])->name('deletepatient');

Route::put('/updatepatient/{patient}', [App\Http\Controllers\PatientController::class, 'update'])->name('updatepatient');

Route::get('/modifypatient/{patient}', [App\Http\Controllers\PatientController::class, 'modify'])->name('modifypatient');


Route::get('/newcpn', [App\Http\Controllers\PatientGController::class, 'index'])->name('newcpn');


