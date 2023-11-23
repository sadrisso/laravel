<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use Symfony\Component\HttpFoundation\Request;


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
Route::get('student/edit/{id}', [StudentController::class, 'edit']);
Route::post('student/update/{id}',[ StudentController::class, 'update']);


Route::get('get-all-session', function(){
    $session = session()->all();
    return demo($session);
});

Route::get('set-session', function(Request $req){
    $req->session()->put('Name', 'Shoeb Drisso');
    $req->session()->put('Address', 'Rangpur');
    $req->session()->flash('Action', 'Success');
    return redirect('get-all-session');
});

Route::get('delete-session', function(){
    session()->forget('Name', 'Shoeb Drisso');
    session()->forget('Address', 'Rangpur');
    return redirect('get-all-session');
});

Route::get('student/trash', [StudentController::class, 'trash']);
Route::get('student/restore/{id}', [StudentController::class, 'restore']);
Route::get('student/force-delete/{id}', [StudentController::class, 'forceDelete']);