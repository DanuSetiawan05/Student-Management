<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\HomeUserController;
use App\Http\Controllers\HomeContactController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\BatchController;
use App\Http\Controllers\EnrollmentController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\ReportController;

// Default Route: Redirect ke Login
Route::get('/', [AuthController::class, 'showLoginForm'])->name('login');

// Authentication Routes
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register');
Route::post('/register', [AuthController::class, 'register']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Protected Routes (Hanya dapat diakses setelah login)
Route::middleware('auth')->group(function () {
    // Halaman Dashboard untuk Admin
    Route::get('/home', [HomeController::class, 'index'])->name('home');

    // Halaman User setelah login (homeuser.blade.php)
    Route::get('/homeuser', [HomeUserController::class, 'index'])->name('homeuser');

    // Resource Routes untuk Students, Teachers, Courses, Batches
    Route::resource('/students', StudentController::class);
    Route::resource('/teachers', TeacherController::class);
    Route::resource('/courses', CourseController::class);
    Route::resource('/batches', BatchController::class);

    // Enrollment dan Payment Routes
    Route::resource('/enrollments', EnrollmentController::class);
    Route::resource('/payments', PaymentController::class);

    // Report Routes
    Route::get('report/report1/{id}', [ReportController::class, 'report'])->name('report');

    // Halaman Kontak
    Route::resource('/homecontact', HomeContactController::class);
});


