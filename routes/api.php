<?php

/////////////////////////////////resources/////////////////////////////////

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\GamerController ;
use App\Http\Controllers\GameController ;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\TournamentController ;
use App\Http\Controllers\PlayerController ;
use App\Http\Controllers\TeamController ;
use App\Http\Controllers\PlayoffController;
use App\Http\Controllers\DuelController ;
use App\Http\Controllers\ResultController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

//Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//    return $request->user();
//});
/////////////////////////////////secured routes/////////////////////////////////
route::group(['middleware' => ['auth:sanctum']] , function (){
    route::post('/v1/logout' , [GamerController::class , 'logout']) ;
});

/////////////////////////////////public routes/////////////////////////////////
Route::controller(GamerController::class)->group(function () {
    Route::post('/v1/login_data' ,'login') ;
    Route::post('/v1/signup_data','register') ;
});

Route::controller(GameController::class)->group(function () {
    Route::get('/v1/games' ,'index') ;
    Route::get('/v1/game-tournaments/{id}' ,'tournaments') ;
    Route::get('/v1/game/{id}' ,'show') ;
    Route::get('/v1/game-news/{id}' ,'news') ;
    Route::get('/v1/matches' ,'matches') ;
    Route::get('/v1/matches/{id}' ,'show') ;


});

Route::controller(NewsController::class)->group(function () {
    Route::get('/v1/news','index') ;
});

Route::controller(TeamController::class)->group(function () {
        Route::get('/v1/teams','index') ;
        Route::get('/v1/team-players/{id}' ,'players') ;

});

Route::controller(TournamentController::class)->group(function () {
    Route::get('/v1/tournaments' ,'index') ;
    Route::get('/v1/tournament-teams/{id}' ,'team') ;
    Route::get('/v1/tournament/{id}' ,'show') ;
    Route::get('/v1/tournament-matches/{id}' ,'duels') ;
    Route::get('/v1/tournament-news' ,'news') ;


});

Route::controller(PlayerController::class)->group(function () {
    Route::get('/v1/players' ,'index');

});

Route::controller(DuelController::class)->group(function () {
//    Route::get('/v1/matches','index');
//    Route::get('/v1/tournament-matches/{id}' ,'tournament');

});


Route::get('/v1/playoffs' ,[PlayoffController::class , 'index']);
Route::get('/v1/results' ,[ResultController::class , 'index']);








