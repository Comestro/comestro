<?php

use App\Livewire\Public\Home;
use App\Livewire\Public\Contact;
use App\Livewire\Public\Service;
use Illuminate\Support\Facades\Route;

Route::get('/',Home::class)->name('home');
Route::get('/contact',Contact::class)->name('contact');
Route::get('/service',Service::class)->name('service');
