<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserDashboardController;
use App\Http\Controllers\UserServicesController;
use App\Http\Controllers\UserCoursesController;
use App\Http\Controllers\UserConsultationController;
use App\Http\Controllers\UserRequestDocumentController;
use App\Http\Controllers\UserProfileController;


Route::redirect('/', '/login');


Route::middleware('guest')->group(function () {
    Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
    Route::post('/login', [AuthController::class, 'login']);

    Route::get('/register', [AuthController::class, 'showRegister'])->name('register');
    Route::post('/register', [AuthController::class, 'register']);
});

Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::middleware(['auth'])->prefix('user')->group(function () {
    Route::get('/dashboard/{name?}', [UserDashboardController::class, 'index'])->name('dashboard');
    Route::get('/services', [UserServicesController::class, 'index'])->name('services');
    Route::get('/courses', [UserCoursesController::class, 'index'])->name('courses');
    Route::get('/consultation', [UserConsultationController::class, 'index'])->name('consultation');
    Route::get('/request-document', [UserRequestDocumentController::class, 'index'])->name('request.document');
Route::get('/profile/{name}', [UserProfileController::class, 'index'])->name('profile');


});

