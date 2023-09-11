<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PeopleController;
use App\Http\Controllers\ClientsController;
use App\Http\Controllers\EquipmentsController;

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

// Route::get('/', [PersonaController::class, 'index'])->name('persona');
Route::get('/people', [PeopleController::class, 'index']);
Route::post('/', [PeopleController::class, 'store'])->name('persona');
Route::post('/equipos', [EquipmentsController::class,'index'])->name('equipos');