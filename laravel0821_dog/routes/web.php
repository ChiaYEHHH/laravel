<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DogController;

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/dogs_create', function () {
//     return view('dog.create');
// })->name('add');


Route::resource('dogs', DogController::class);