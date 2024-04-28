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
Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::get('/forget-password', [LoginController::class, 'forgetPassword'])->name('forget-password');
Route::get('/register', [RegisterController::class, 'index'])->name('register');







