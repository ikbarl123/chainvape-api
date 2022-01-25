<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VapestoreController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ThreadController;

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
Route::group(['middleware'=>['auth:sanctum']],function(){
    // pasang route disini
    Route::post('/logout',[AuthController::class,'logout']);
    Route::get('/thread',[ThreadController::class,'ThreadList']);
    Route::post('/thread/get',[ThreadController::class,'ThreadView']);
    Route::Post('/thread/create',[ThreadController::class,'CreateThread']);
    Route::Post('/thread/reply',[ThreadController::class,'AddReply']);


});

//Route::resource('/vapestore',VapestoreController::class);
Route::get('/vapestore/get',[VapestoreController::class,'getStore']);

Route::post('/auth/register',[AuthController::class,'register']);

Route::post('/auth/login',[AuthController::class,'login']);
