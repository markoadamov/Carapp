<?php

use App\Http\Controllers\CarController;
use App\Http\Controllers\PartController;
use App\Models\Car;

use Illuminate\Support\Facades\Route;

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


Route::get('/cars',[CarController::class,'index']);

Route::get('/cars/{id}',[CarController::class,'show']);

Route::get('/parts',[PartController::class,'index']);

Route::get('/parts/{id}',[PartController::class,'show']);
