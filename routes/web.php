<?php

use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/', function(){
//     return view('index');
// })->name('index');
Route::get('/', [StudentController::class, 'index'])->name('index');
Route::get('/add-student', function () {
    return view('add-student');
});
Route::post('/add-student', [StudentController::class, 'add'])->name('student.add');
Route::get('/edit/{id}', [StudentController::class, 'edit'])->name('student.edit');
Route::put('/update/{id}', [StudentController::class, 'update'])->name('student.update');
Route::delete('/students/{id}', [StudentController::class, 'destroy'])->name('students.delete');
