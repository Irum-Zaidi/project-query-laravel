<?php

use App\Models\student;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;


// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/', [student::class, 'showStudents']);

  // Route::get('/', [StudentController::class, 'showStudents']);
    // Route::get('/', [StudentController::class, 'showStudents'])->name('home');
    // Route::get('/student/{id}', action: [StudentController::class, 'singleStudent'])->name('view.student');
    // // Route::get('/add', [StudentController::class, 'addStudent'])->name('addStudent');
    // // Route::get('/update', [StudentController::class, 'updateStudent']);
    // Route::get('/delete', [StudentController::class, 'deleteStudent']);
    // Route::get('/delete/{id}', [StudentController::class, 'deleteStudent'])->name('delete.student');
    // Route::get('/deletestudent', [StudentController::class, 'deleteAllStudent']);

    // Route::post('/add', [StudentController::class, 'addStudent'])->name('addStudent');
    // Route::get('/updatepage/{id}', [StudentController::class, 'updatePage'])->name('update.page');



// Route::get('/', function () {
//     // return view('welcome');
// });


Route::controller(StudentController::class)->group(function () {

    // Route::get('/', 'showStudents');
    Route::get('/', 'showStudents')->name('home');
    Route::get('/student/{id}', action: 'singleStudent')->name('view.student');
    // Route::get('/add', 'addStudent')->name('addStudent');
    // Route::get('/update', 'updateStudent');
    Route::get('/delete', 'deleteStudent');
    Route::get('/delete/{id}', 'deleteStudent')->name('delete.student');
    Route::get('/deletestudent', 'deleteAllStudent');
    
    Route::post('/add', 'addStudent')->name('addStudent');
    Route::get('/updatepage/{id}', 'updatePage')->name('update.page');
    // Route::post('/update{id}', 'updateStudent')->name('update.student');
    Route::put('/update{id}', 'updateStudent')->name('update.student');
});
Route::view('newstudent', '/addstudent');
 