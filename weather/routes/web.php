<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WeatherController;

Route::get('/', function () {
    // return view('welcome');
    return redirect()->route('weathers.index');
});

 
Route::resource('weathers', WeatherController::class);