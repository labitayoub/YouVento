<?php

use App\Http\Controllers\CalendrierController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ClubController;
use App\Http\Controllers\EvenementController;
use App\Http\Controllers\InscrireController;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [HomeController::class,'index']);
Route::get('/clubs', [ClubController::class,'index']);
Route::get('/calendrier', [CalendrierController::class,'index']);
Route::get('/evenement', [EvenementController::class,'index']);
Route::get('/inscrire', [InscrireController::class,'index']);

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
