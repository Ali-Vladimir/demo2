<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SafarioController;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/',[SafarioController::class,'index']);
Route::get('/about',[SafarioController::class,'about']);
Route::get('/contact',[SafarioController::class,'contact']);
Route::get('/reservation',[SafarioController::class,'reservation']);
Route::get('/packages',[SafarioController::class,'packages']);
