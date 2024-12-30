<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index']);
Route::get('/archives', [\App\Http\Controllers\ArchiveController::class, 'index']);
Route::post('/archive/update', [\App\Http\Controllers\ArchiveController::class, 'update']);
