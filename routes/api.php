<?php

/////////////////////////////////resources/////////////////////////////////

use App\Http\Controllers\GameNewsController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GamerController ;
use App\Http\Controllers\GameController ;
use App\Http\Controllers\TournamentController ;
use App\Http\Controllers\PlayerController ;
use App\Http\Controllers\TeamController ;
use App\Http\Controllers\DuelController ;
use App\Http\Controllers\TournamentNewsController;
use App\Events\PlaygroundEvent ;
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

// USAGE-> SECURED routes
route::group(['middleware' => ['auth:sanctum']] , function (){
    route::post('/v1/logout' , [GamerController::class , 'logout']) ;
    Route::get('/v1/profile',[GamerController::class , 'profile']) ;
});
// USAGE-> PUBLIC routes >>

//USAGE-> GAMER routes
Route::controller(GamerController::class)->group(function () {
    Route::post('/v1/login_data' ,'login') ;
    Route::post('/v1/signup_data','register') ;
});
// USAGE-> GAME routes
Route::controller(GameController::class)->group(function () {
    Route::get('/v1/games' ,'index') ;
    Route::get('/v1/game-tournaments/{id}' ,'tournaments') ;
    Route::get('/v1/game/{id}' ,'show') ;
    Route::get('/v1/matches' ,'matches') ;
    Route::get('/v1/matches/{id}' ,'show') ;
});

// USAGE-> GAME_NEWS routes
Route::controller(GameNewsController::class)->group(function () {
    Route::get('/v1/news','index') ;
});

// USAGE-> TEAM routes
Route::controller(TeamController::class)->group(function () {
        Route::get('/v1/teams','index') ;
        Route::get('/v1/team-players/{id}' ,'players') ;
        Route::get('/v1/top-teams/{id}' ,'top_teams') ;
        Route::get('/v1/result/{id}' ,'result') ;
        Route::get('/v1/result/' ,'result') ;
        Route::get('/v1/update_result/{id}' ,'update_result') ;


});

// USAGE-> TOURNAMENT routes
Route::controller(TournamentController::class)->group(function () {
    Route::get('/v1/tournaments' ,'index') ;
    Route::get('/v1/tournament-teams/{id}' ,'team') ;
    Route::get('/v1/tournament-overview/{id}' ,'teams') ;
    Route::get('/v1/tournament/{id}' ,'show') ;
    Route::get('/v1/tournament-matches/{id}' ,'duels') ;
    Route::get('/v1/tournament-news/{id}' ,'news') ;
});
Route::controller(TournamentNewsController::class)->group(function () {
    Route::get('/v1/tournaments_news' ,'index') ;
    Route::get('/v1/tournament_news/{id}' ,'tournament_news') ;
});

// USAGE-> PLAYER routes
Route::controller(PlayerController::class)->group(function () {
    Route::get('/v1/players' ,'index');
    Route::get('/v1/top-players/{id}' ,'top_players') ;

});

// USAGE-> DUELS(MATCHES) routes
Route::controller(DuelController::class)->group(function () {
    Route::post('/v1/match','store');
    Route::get('/v1/matchess','index');
    Route::get('/v1/matchess/{id}','show');
    Route::get('/v1/update_matches','Reset_Status');
    Route::get('/v1/match/{id}','show');
    Route::get('/v1/match-trash','trash');
    Route::delete('/v1/match/{id}','destroy');
});
Route::get('/playground', function (){
    event(PlaygroundEvent::broadcast());
});
//Route::get('/v1/results' ,[ResultController::class , 'index']);








