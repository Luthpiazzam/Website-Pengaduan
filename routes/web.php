<?php

use App\Http\Controllers\User\UserController;
use Illuminate\Support\Facades\Route;



Route::get('/', [UserController::class, 'index'])->name('ereporthub.index');

Route::get('/register', [UserController::class, 'formregister'])->name('ereporthub.formregister');

