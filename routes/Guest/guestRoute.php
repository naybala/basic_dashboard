<?php

use Illuminate\Support\Facades\Route;
use BasicDashboard\Web\Auth\Controllers\AuthController;

Route::get('/', [AuthController::class, 'login'])->name('unauthorize');
Route::post('/', [AuthController::class, 'authorizeOperator']);