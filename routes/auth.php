<?php

use App\Http\Livewire\Auth\Login;
use App\Http\Livewire\Auth\Register;
use Illuminate\Support\Facades\Route;

Route::prefix('admin')->group(function () {
    Route::get('/register', Register::class)->name('admin.register');
    Route::get('/login', Login::class)->name('admin.login');
});
