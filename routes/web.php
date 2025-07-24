<?php

use App\Models\student;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/', [student::class, 'showStudents']);
// Route::get('/', [StudentController::class, 'showStudents']);
Route::get('/', [StudentController::class, 'showStudents'])->name('home');
Route::get('/student/{id}', [StudentController::class, 'singleStudent'])->name('view.student');



Route::get('/add', [StudentController::class, 'addStudent']);
Route::get('/update', [StudentController::class, 'updateStudent']);
Route::get('/delete', [StudentController::class, 'deleteStudent']);
Route::get('/delete/{id}', [StudentController::class, 'deleteStudent'])->name('delete.student');
Route::get('/deletestudent', [StudentController::class, 'deleteAllStudent']);