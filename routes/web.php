<?php

use App\Livewire\Public\Home;
use Illuminate\Support\Facades\Route;

Route::get('/',Home::class)->name('home');
