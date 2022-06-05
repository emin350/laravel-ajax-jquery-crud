<?php


use App\Http\Controllers\StudentController;


Route::get('students',[StudentController::class, 'index']);
Route::get('fetch-students', [StudentController::class, 'fetchstudent']);
Route::post('students',[StudentController::class,'store']);

Route::get('/', function () {
    return view('welcome');
});
