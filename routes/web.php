<?php

use App\Http\Controllers\PacientesController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/pacientes', [PacientesController::class, 'index'])->name('pacientes.index');
Route::get('/pacientes/{$id}', [PacientesController::class, 'show'])->name('pacientes.show');
Route::get('/pacientes/insert', [PacientesController::class, 'insert'])->name('pacientes.insert');
Route::post('/pacientes/save', [PacientesController::class, 'save'])->name('pacientes.save');
