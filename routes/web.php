<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ManagerController;
use App\Http\Controllers\StaffController;

// Route::get('/user', [UserController::class, 'index']);
Route::get('/login', [UserController::class, 'login']);
Route::get('/logout', [UserController::class, 'logout']);
Route::post('/login', [UserController::class, 'postLogin']);
Route::get('/manager', [ManagerController::class, 'index']);
Route::get('/staff', [StaffController::class, 'index']);