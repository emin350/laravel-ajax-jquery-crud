<?php


use App\Http\Controllers\StudentController;


Route::get('students',[StudentController::class, 'index']);
Route::get('fetch-students', [StudentController::class, 'fetchstudent']);
Route::post('students',[StudentController::class,'store']);
Route::get('edit-student/{id}', [StudentController::class, 'edit']);
Route::put('update-student/{id}', [StudentController::class, 'update']);
Route::delete('delete-student/{id}', [StudentController::class, 'destroy']);


Route::get('/', function () {
    return view('welcome');
});
