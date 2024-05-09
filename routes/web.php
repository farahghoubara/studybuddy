<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RoomsController;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\PracticeController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ScheduleController;


Route::get('/', [LandingController::class, 'index'])->name('landing');
Route::get('/rooms', [RoomsController::class, 'index'])->name('rooms');
Route::get('/schedule', [ScheduleController::class, 'index'])->name('schedule');
Route::get('/practice', [PracticeController::class, 'index'])->name('practice');
Route::Post('/practice/handle', [PracticeController::class, 'createTest'])->name('test.create');
Route::get('/practice/test', [PracticeController::class, 'test'])->name('test');
Route::post('/practice/test/result', [PracticeController::class, 'result'])->name('test.result');


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
    Route::post('/rooms/store', [RoomsController::class, 'store'])->name('rooms.store');
    Route::get('/schedule/create', [ScheduleController::class, 'create'])->name('schedule.create');
    Route::post('/schedule/store', [ScheduleController::class, 'store'])->name('schedule.store');
    Route::get('/rooms/{room}', [RoomsController::class, 'join'])->name('join_room');
    Route::delete('/rooms/{room}', [RoomsController::class, 'destroy'])->name('rooms.destroy');
    

});
