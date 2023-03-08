<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SchoolController;
use App\Http\Controllers\StudentController;

Route::redirect('', 'school');


Route::resource('school', SchoolController::class);
Route::resource('student', StudentController::class);

Route::get('/schools/datatable', [SchoolController::class, 'datatable'])->name('schools.datatable');
Route::get('/students/datatable', [StudentController::class, 'datatable'])->name('students.datatable');
