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
Route::get('/calendrier', [CalendrierController::class,'index']);
Route::get('/evenement', [EvenementController::class,'index']);
Route::get('/inscrire', [InscrireController::class,'index']);
Route::get('clubs', [ClubController::class, 'index'])->name('posts.index');   // Afficher tous les posts
Route::get('clubs/create', [ClubController::class, 'create'])->name('posts.create'); // Formulaire de création
Route::post('clubs', [ClubController::class, 'store']);  // Sauvegarder un post
Route::get('clubs/{id}', [ClubController::class, 'show'])->name('posts.show');  // Afficher un post
Route::get('clubs/{id}/edit', [ClubController::class, 'edit'])->name('posts.edit'); // Formulaire d'édition
Route::put('clubs/{id}', [ClubController::class, 'update']);  // Mettre à jour un post
Route::delete('clubs/{id}', [ClubController::class, 'destroy']);  // Supprimer un post

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
