<?php

use App\Http\Controllers\Omen;
use App\Http\Controllers\Brims;
use App\Http\Controllers\Harbor;
use App\Http\Controllers\sage;
use Illuminate\Support\Facades\Route;



Route::resource('welcome',  Omen::class);
Route::resource('contact', Brims::class);
Route::resource('about', Harbor::class);
Route::resource('form', sage::class);

