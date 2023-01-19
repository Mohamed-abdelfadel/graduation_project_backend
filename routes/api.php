<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GameController ;
use App\Http\Controllers\NewsController ;
use App\Http\Controllers\GamerController ;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('/v1/games' , [GameController::class , 'index_api']) ;
Route::get('/v1/news' , [NewsController::class , 'index_api']) ;
Route::post('/v1/signup_data' , [GamerController::class , 'store']) ;
Route::post('/v1/login_data' , [GamerController::class , 'login']) ;

