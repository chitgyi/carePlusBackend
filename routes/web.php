<?php

use App\Http\Livewire\Articles;
use App\Http\Livewire\Categories;
use App\Http\Livewire\Dashboard;
use App\Http\Livewire\Doctors;
use App\Http\Livewire\Hospitals;
use App\Http\Livewire\Notifications;
use App\Http\Livewire\Settings;
use App\Http\Livewire\Users;
use Illuminate\Support\Facades\Route;


Route::get('dashboard', Dashboard::class)->name('dashboard');
Route::get('articles', Articles::class)->name('articles');
Route::get('categories', Categories::class)->name('categories');
Route::get('doctors', Doctors::class)->name('doctors');
Route::get('hospitals', Hospitals::class)->name('hospitals');
Route::get('users', Users::class)->name('users');
Route::get('notifications', Notifications::class)->name('notifications');
Route::get('settings', Settings::class)->name('settings');
