<?php

use App\Livewire\Admin\Dashboard;
use App\Livewire\Auth\Login;
use App\Livewire\Public\Home;
use App\Livewire\Public\Contact;
use App\Livewire\Public\About;
use App\Livewire\Public\Blog;
use App\Livewire\Public\Service;
use Illuminate\Support\Facades\Route;

Route::get('/',Home::class)->name('home');
Route::get('/admin-dashboard',Dashboard::class)->name('admin-dashboard');
Route::get('/contact',Contact::class)->name('contact');
Route::get('/service',Service::class)->name('service');
