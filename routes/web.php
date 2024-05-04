<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RoomsController;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ScheduleController;


Route::get('/', [LandingController::class, 'index'])->name('landing');
Route::get('/public-rooms', [RoomsController::class, 'publicRooms'])->name('public-rooms');
Route::get('/private-rooms', [RoomsController::class, 'privateRooms'])->name('private-rooms');
Route::get('/schedule', [ScheduleController::class, 'index'])->name('schedule');
Route::get('/exam-question', [QuestionController::class, 'index'])->name('questions');


// Guest Middleware
Route::middleware('guest')->group(function () {
    Route::get('/login', [LoginController::class, 'index'])->name('login');
    Route::post('/login', [LoginController::class, 'login'])->name('userLogin');
    Route::get('/forget-password', [LoginController::class, 'forgetPassword'])->name('forget-password');
    Route::get('/register', [RegisterController::class, 'index'])->name('register');
    Route::post('/register', [RegisterController::class, 'store'])->name('register.store');
    Route::post('/reset-password', [LoginController::class, 'resetPassword'])->name('reset.password');
});

// Auth Middleware
Route::middleware('auth')->group(function () {
    Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
    Route::get('/profile', [RegisterController::class, 'edit'])->name('profile');
    Route::post('/profile/update', [RegisterController::class, 'update'])->name('profile.update');
    Route::post('/profile/update-password', [RegisterController::class, 'updatePassword'])->name('profile.updatePassword');

});
