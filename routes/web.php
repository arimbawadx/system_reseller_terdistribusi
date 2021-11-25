<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;


Route::get('/users', [UsersController::class, 'index']);
Route::get('/users/read', [UsersController::class, 'read']);
Route::get('/users/export', [UsersController::class, 'export']);
Route::post('/users/import', [UsersController::class, 'import']);
Route::post('/user/store', [UsersController::class, 'store']);

