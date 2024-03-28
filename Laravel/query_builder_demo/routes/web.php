<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\Student;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get("/", [Student::class, 'index'])->name('list.student');
Route::get('/create', [Student::class,'create'])->name('create.student');
Route::post('/create', [Student::class,'createStudent'])->name('create.student');
Route::get('/delete/{id}', [Student::class, 'deleteStudent'])->name('delete.student');
Route::get('/update/{id}', [Student::class, 'getStudentById'])->name('updateForm.student');
Route::put('/update/{id}', [Student::class, 'updateStudentById'])->name('update.student');