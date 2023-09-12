<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PeopleController;
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

// Route::get('/', function () {
//     return view('home');
// });

Route::get('/', [PeopleController::class, 'index']);
Route::post('/people_confirm', [PeopleController::class, 'store'])->name('persona');

// Route::resource('/',PeopleController::class)->name('add_persona');


Route::post('/equipos', [EquipmentsController::class,'index'])->name('equipos');
Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');