<?php

use App\Livewire\Admin\AddLead;
use App\Livewire\Admin\Dashboard;
use App\Livewire\Admin\Lead\ConvertLead;
use App\Livewire\Admin\Lead\LeadInformation;
use App\Livewire\Admin\Lead\LeadView;
use App\Livewire\Admin\Lead\ManageLead;
use App\Livewire\Auth\Login;
use App\Livewire\Public\Home;
use App\Livewire\Public\Contact;
use App\Livewire\Public\About;
use App\Livewire\Public\Blog;
use App\Livewire\Public\Service;
use Illuminate\Support\Facades\Route;

Route::get('/',Home::class)->name('home');
Route::get('/contact',Contact::class)->name('contact');
Route::get('/service',Service::class)->name('service');
Route::get('/about',About::class)->name('about');
Route::get('/blog',Blog::class)->name('blog');
Route::get('/login',Login::class)->name('login');

Route::middleware(['middleware' => 'auth'])->group(function(){
    Route::get('/admin-dashboard',Dashboard::class)->name('admin-dashboard');

    Route::group(['prefix' => 'leads'], function () {
        Route::get('/add-lead',LeadInformation::class)->name('add_lead');
        Route::get('/manage-lead',ManageLead::class)->name('manage_lead');
        Route::get('/admin/leads/view/{id}', LeadView::class)->name('admin.lead.view');
        Route::get('/admin/leads/view/{id}', LeadView::class)->name('admin.lead.view');
        Route::get('/admin/convert-lead/{id}', ConvertLead::class)->name('admin.convert.lead');

    });
});
// Route::get('/admin-dashboard',Dashboard::class)->name('admin-dashboard');

