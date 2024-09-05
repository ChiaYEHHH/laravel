<?php

use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PhoneController;


Route::get('/', function () {
    // return view('welcome');
    // return view('student.index');
    return redirect()->route("students.index");
});

Route::resource("students", StudentController::class);
Route::resource('phones', PhoneController::class);
