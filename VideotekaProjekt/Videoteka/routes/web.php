<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GenreController;
use App\Http\Controllers\CountryController;
use App\Http\Controllers\DirectorController;
use App\Http\Controllers\ActorController;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\MovieActorController;
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

Route::get('/', function () {
    return redirect(route('login'));
});

Route::middleware(['auth:sanctum', 'verified'])->get('/', function () {
    return view('index');
})->name('index');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('index');
})->name('dashboard');

Route::middleware(['auth:sanctum', 'verified'])->get('movies',[MovieController::class,'index'])->name('movies');
Route::middleware(['auth:sanctum', 'verified'])->get('add_movie',[MovieController::class,'create'])->name('add_movie');
Route::middleware(['auth:sanctum', 'verified'])->post('store_movie',[MovieController::class,'store'])->name('store_movie');
Route::middleware(['auth:sanctum', 'verified'])->post('edit_movie',[MovieController::class,'edit'])->name('edit_movie');
Route::middleware(['auth:sanctum', 'verified'])->post('delete_movie',[MovieController::class,'delete'])->name('delete_movie');
Route::middleware(['auth:sanctum', 'verified'])->post('update_movie',[MovieController::class,'update'])->name('update_movie');

Route::middleware(['auth:sanctum', 'verified'])->get('countries',[CountryController::class,'index'])->name('countries');
Route::middleware(['auth:sanctum', 'verified'])->get('add_country',[CountryController::class,'create'])->name('add_country');
Route::middleware(['auth:sanctum', 'verified'])->post('store_country',[CountryController::class,'store'])->name('store_country');


Route::middleware(['auth:sanctum', 'verified'])->get('directors',[DirectorController::class,'index'])->name('directors');
Route::middleware(['auth:sanctum', 'verified'])->get('add_director',[DirectorController::class,'create'])->name('add_director');
Route::middleware(['auth:sanctum', 'verified'])->post('store_director',[DirectorController::class,'store'])->name('store_director');


Route::middleware(['auth:sanctum', 'verified'])->get('actors',[ActorController::class,'index'])->name('actors');
Route::middleware(['auth:sanctum', 'verified'])->get('add_actor',[ActorController::class,'create'])->name('add_actor');
Route::middleware(['auth:sanctum', 'verified'])->post('store_actor',[ActorController::class,'store'])->name('store_actor');


Route::middleware(['auth:sanctum', 'verified'])->get('genres',[GenreController::class,'index'])->name('genres');
Route::middleware(['auth:sanctum', 'verified'])->get('add_genre',[GenreController::class,'create'])->name('add_genre');
Route::middleware(['auth:sanctum', 'verified'])->post('store_genre',[GenreController::class,'store'])->name('store_genre');

Route::middleware(['auth:sanctum', 'verified'])->get('movieactors',[MovieActorController::class,'index'])->name('movieactors');
Route::middleware(['auth:sanctum', 'verified'])->get('add_movieactors',[MovieActorController::class,'create'])->name('add_movieactors');
Route::middleware(['auth:sanctum', 'verified'])->post('store_movieactors',[MovieActorController::class,'store'])->name('store_movieactors');
Route::middleware(['auth:sanctum', 'verified'])->get('movieactors.indexUpit',[MovieActorController::class,'indexUpit'])->name('movieactors.indexUpit');