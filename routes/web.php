<?php

use App\Http\Livewire\Articles\ArticleEdit;
use App\Http\Livewire\Articles\ArticleCreate;
use App\Http\Livewire\Articles\ArticleDetail;
use App\Http\Livewire\Articles\ArticleList;
use App\Http\Livewire\Category\CategoryCreate;
use App\Http\Livewire\Category\CategoryDetail;
use App\Http\Livewire\Category\CategoryEdit;
use App\Http\Livewire\Category\CategoryList;
use App\Http\Livewire\Dashboard;
use App\Http\Livewire\Doctor\DoctorCreate;
use App\Http\Livewire\Doctor\DoctorDetail;
use App\Http\Livewire\Doctor\DoctorEdit;
use App\Http\Livewire\Doctor\DoctorList;
use App\Http\Livewire\Hospital\HospitalCreate;
use App\Http\Livewire\Hospital\HospitalList;
use App\Http\Livewire\Notifications;
use App\Http\Livewire\Settings;
use App\Http\Livewire\Users;
use Illuminate\Support\Facades\Route;


Route::get('dashboard', Dashboard::class)->name('dashboard');

Route::get('articles', ArticleList::class)->name('articles');
Route::get('articles/create', ArticleCreate::class)->name('articles.create');
Route::get('articles/{id}/edit', ArticleEdit::class)->name('articles.edit');
Route::get('articles/{id}', ArticleDetail::class)->name('articles.detail');

Route::get('categories', CategoryList::class)->name('categories');
Route::get('categories/create', CategoryCreate::class)->name('categories.create');
Route::get('categories/{id}/edit', CategoryEdit::class)->name('categories.edit');
Route::get('categories/{id}', CategoryDetail::class)->name('categories.detail');

Route::get('doctors', DoctorList::class)->name('doctors');
Route::get('doctors/create', DoctorCreate::class)->name('doctors.create');
Route::get('doctors/{id}/edit', DoctorEdit::class)->name('doctors.edit');
Route::get('doctors/{id}', DoctorDetail::class)->name('doctors.detail');

Route::get('hospitals', HospitalList::class)->name('hospitals');
Route::get('hospitals/create', HospitalCreate::class)->name('hospitals.create');

Route::get('users', Users::class)->name('users');
Route::get('notifications', Notifications::class)->name('notifications');
Route::get('settings', Settings::class)->name('settings');
