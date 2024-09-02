<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CarController;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('car.index');
});

// Route::get('/cars', function () {
//     return view('car.index');
// });

Route::get('/cars_create', function () {
    return view('car.create');
})->name('add');

Route::get('/cars_edit', function () {
    return view('car.edit');
})->name('edit');

 
Route::resource('cars', CarController::class);