<?php

use App\Livewire\Admin\Dashboard;
use App\Livewire\Public\Home;
use Illuminate\Support\Facades\Route;

Route::get('/',Home::class)->name('home');
Route::get('/admin-dashboad',Dashboard::class)->name('home');
Route::get('/admin', function () {
    return view('admin.adminbase');
})->name('admin');