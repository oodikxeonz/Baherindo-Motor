<?php

use App\Http\Controllers\MotorController;
use App\Http\Controllers\MobilController;
use App\Http\Controllers\Omen;
use App\Http\Controllers\Nemo;
use App\Http\Controllers\Brims;
use App\Http\Controllers\Harbor;
// use App\Http\Controllers\sage;
use Illuminate\Support\Facades\Route;



Route::resource('welcome',  Omen::class);
Route::resource('welmob',  Nemo::class);
Route::resource('contact', Brims::class);
Route::resource('about', Harbor::class);
// Route::resource('form', sage::class);
Route::resource('motor', MotorController::class);
Route::resource('mobil', MobilController::class);

