<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\V1\Auth;
use App\Http\Controllers\Api\V1\User;

Route::post('auth/register', Auth\RegisterController::class)->name('register');
Route::get('users', User\ListController::class)->name('users_list');
Route::get('users/{id}/profile', User\ProfileController::class)->name('user_profile');
