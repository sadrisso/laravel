<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;


Route::get('/', function () {
    return view('home');
});

Route::get('/about', function(){
    return view('about');
});

Route::get('student/create', [StudentController::class, 'index']);
Route::post('student/create', [StudentController::class, 'store']);
Route::get('student/view', [StudentController::class, 'view']);
Route::get('student/delete/{id}', [StudentController::class, 'delete']);
