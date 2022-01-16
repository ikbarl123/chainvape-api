<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VapestoreController;

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

Route::resource('/vapestore',VapestoreController::class);
Route::get('/vapestore/get',[VapestoreController::class,'getStore']);


