<?php

use App\Http\Controllers\CoursesController;
use App\Http\Controllers\ProfilesController;
use App\Http\Controllers\UsersController;
use Illuminate\Support\Facades\Route;

Route::get('/', [ProfilesController::class,'allUser']);
Route::get('/profile/{user}', [UsersController::class,'Profile']);
Route::get('/course/{course}', [CoursesController::class,'courseUsers']);

