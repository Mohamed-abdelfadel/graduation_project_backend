<?php

use App\Http\Controllers\ProfileController;

use App\Http\Controllers\NewsController;
use App\Http\Controllers\GameController;
use App\Http\Controllers\TournamentController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\PlayerController;
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
    return view('welcome');
});


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
Route::get('/v1/news',[NewsController::class , 'index'])->name('news') ;
Route::get('/v1/games',[GameController::class , 'index'])->name('games') ;
Route::get('/v1/tournaments',[TournamentController::class , 'index'])->name('tournaments') ;
Route::get('/v1/teams',[TeamController::class , 'index'])->name('teams') ;
Route::get('/v1/players',[PlayerController::class , 'index'])->name('players') ;
Route::get('/v1/news',[NewsController::class , 'index'])->name('news') ;

require __DIR__.'/auth.php';
