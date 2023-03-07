<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SchoolController;

Route::redirect('', 'school');
Route::resource('school', SchoolController::class);
Route::get('school\{school}', [SchoolController::class, 'show']);

Route::get('/schools/datatable', [SchoolController::class, 'datatable'])->name('schools.datatable');
