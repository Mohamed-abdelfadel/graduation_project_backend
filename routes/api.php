<?php

/////////////////////////////////Resources/////////////////////////////////
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GameController ;
use App\Http\Controllers\NewsController ;
use App\Http\Controllers\GamerController ;


/////////////////////////////////Secured Routes/////////////////////////////////
Route::group(['middleware' => ['auth:sanctum']] , function (){
    Route::post('/v1/logout' , [GamerController::class , 'logout']) ;
    Route::get('/v1/games' , [GameController::class , 'index_api']) ;
});

/////////////////////////////////Public Routes/////////////////////////////////
Route::post('/v1/login_data' , [GamerController::class , 'login']) ;
Route::get('/v1/news' , [NewsController::class , 'index_api']) ;
Route::post('/v1/signup_data' , [GamerController::class , 'register']) ;
