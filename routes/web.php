<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\EnrollmentController;

Route::get('/', function () {
    return redirect()->route('students.index');
});

// Student routes
Route::get('/students', [StudentController::class, 'index'])->name('students.index');
Route::get('/students/{student}', [StudentController::class, 'show'])->name('students.show');

// Course routes
Route::get('/courses', [CourseController::class, 'index'])->name('courses.index');
Route::get('/courses/{course}', [CourseController::class, 'show'])->name('courses.show');

// Enrollment routes
Route::post('/enrollments', [EnrollmentController::class, 'store'])->name('enrollments.store');
Route::delete('/enrollments', [EnrollmentController::class, 'destroy'])->name('enrollments.destroy');
