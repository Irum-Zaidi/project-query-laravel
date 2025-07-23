<?php

use App\Models\student;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/', [student::class, 'showStudents']);
Route::get('/', [StudentController::class, 'showStudents']);
Route::get('/student/{id}', [StudentController::class, 'singleStudent'])->name('view.student');


