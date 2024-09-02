<?php

use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;
use PhpParser\Node\Stmt\Return_;

Route::get('/', function () {
    // return view('welcome');
    // return view('student.index');
    return redirect()->route("students.index");
});

Route::resource("students", StudentController::class);