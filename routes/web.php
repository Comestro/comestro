<?php

use App\Livewire\Admin\Account\AddAccount;
use App\Livewire\Admin\Account\ManageAccount;
use App\Livewire\Admin\AddLead;
use App\Livewire\Admin\Blog\CreateBlog;
use App\Livewire\Admin\Customer\CreateCustomer;
use App\Livewire\Admin\Customer\ManageCustomer;
use App\Livewire\Admin\Contact\ManageContact;
use App\Livewire\Admin\Blog\ManageBlog;
use App\Livewire\Admin\Contact\CreateContact;
use App\Livewire\Admin\Course\CreateCourse;
use App\Livewire\Admin\Course\ManageCourse;
use App\Livewire\Admin\Deal\AddDeal;
use App\Livewire\Admin\Setting\ManageSetting;
use App\Livewire\Admin\Dashboard;
use App\Livewire\Admin\Deal\ManageDeal;
use App\Livewire\Admin\Lead\ConvertLead;
use App\Livewire\Admin\Lead\LeadInformation;
use App\Livewire\Admin\Lead\LeadView;
use App\Livewire\Admin\Lead\ManageLead;
use App\Livewire\Auth\Login;
use App\Livewire\Auth\Logout;
use App\Livewire\Public\Home;
use App\Livewire\Public\Contact;
use App\Livewire\Public\Portfolio;
use App\Livewire\Public\About;
use App\Livewire\Public\Blog;
use App\Livewire\Public\Service;
use App\Livewire\Public\ReadMore;
use Illuminate\Support\Facades\Route;

Route::get('/',Home::class)->name('home');
Route::get('/contact',Contact::class)->name('contact');
Route::get('/service',Service::class)->name('service');
Route::get('/about',About::class)->name('about');
Route::get('/blog',Blog::class)->name('blog');
Route::get('/portfolio',Portfolio::class)->name('portfolio');
Route::get('/read-more/{blogId}', ReadMore::class)->name('read-more');
Route::get('/admin-login',Login::class)->name('login');

Route::middleware(['middleware' => 'auth'])->group(function(){
    Route::get('/admin-dashboard',Dashboard::class)->name('admin-dashboard');
    Route::get('/logout',Logout::class)->name('logout');

    Route::group(['prefix' => 'leads'], function () {
        Route::get('/add-lead',LeadInformation::class)->name('add_lead');
        Route::get('/manage-lead',ManageLead::class)->name('manage_lead');
        Route::get('/admin/leads/view/{id}', LeadView::class)->name('admin.lead.view');
        Route::get('/admin/leads/view/{id}', LeadView::class)->name('admin.lead.view');
        Route::get('/admin/convert-lead/{id}', ConvertLead::class)->name('admin.convert.lead');

    });
     Route::group(['prefix' => 'accounts'], function () {
        Route::get('/add-accounts',AddAccount::class)->name('add_accounts');
        Route::get('/manage-accounts',ManageAccount::class)->name('manage_accounts');
       

    });
     Route::group(['prefix' => 'contacts'], function () {
        // Route::get('/add-lead',LeadInformation::class)->name('add_lead');
        Route::get('/manage-contacts',ManageContact::class)->name('manage_contacts');
        Route::get('/create',CreateContact::class)->name('create');
       

    });  
    Route::group(['prefix' => 'deals'], function () {
        Route::get('/add-deal',AddDeal::class)->name('add_deal');
        Route::get('/manage-deals',ManageDeal::class)->name('manage_deals');
       

    });
   
  Route::get('/admin/settings', ManageSetting::class)->name('admin.settings');
  Route::get('/admin/customers', CreateCustomer::class)->name('admin.customers.create');
  Route::get('/admin/customers/manage-customer', ManageCustomer::class)->name('admin.customers.manage-customer');
  Route::get('/admin/blogs', CreateBlog::class)->name('admin.blogs.create');
  Route::get('/admin/blogs/manage-blog', ManageBlog::class)->name('admin.blogs.manage-blog');
  Route::get('/admin/courses', CreateCourse::class)->name('admin.course.create');
  Route::get('/admin/courses/manage-course', ManageCourse::class)->name('admin.course.manage-course');
 
});
// Route::get('/admin-dashboard',Dashboard::class)->name('admin-dashboard');

// Route::get('/clear-cache', function () {
//     Artisan::call('cache:clear');
//     Artisan::call('config:cache');
//     Artisan::call('config:clear');
//     Artisan::call('view:clear');
//     Artisan::call('route:clear');
//     // Artisan::call('optimize:clear');

//     return "All Caches are cleared by @Roni";
// });

