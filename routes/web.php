<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SafarioController;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/',[SafarioController::class,'index']);
Route::get('/about',[SafarioController::class,'about']);
Route::get('/packages',[SafarioController::class,'packages']);
Route::get('/reservations',[SafarioController::class,'reservations']);
Route::get('/contact',[SafarioController::class,'contact']);
Route::get('/login',[SafarioController::class,'login']);
Route::get('/signup',[SafarioController::class,'signup']);
