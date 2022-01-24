<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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

Route::middleware("guest")->group(function (){
    Route::get("/login",[UserController::class,"login"]);
    Route::post("/login",[UserController::class,"loginWithEmail"]);
    Route::get("/login/google",[UserController::class,"loginWithGoogle"]);
    Route::get("/login/google/callback",[UserController::class,"loginWithGoogle"]);
});

Route::middleware("auth")->group(function (){
    Route::get("/logout",[UserController::class,"logout"]);
});


