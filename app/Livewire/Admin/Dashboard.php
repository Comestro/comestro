<?php
namespace App\Livewire\Admin;

use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Layout;
use Livewire\Component;
use App\Models\Account; 
use App\Models\Deal;    
use App\Models\Contact;
use App\Models\Blog; 
use App\Models\Customer;
use App\Models\Service;


class Dashboard extends Component
{
   
    #[Layout('components.layouts.adminLayout')]

   
    public $totalAccounts;
    public $totalDeals;
    public $totalContacts;
    public $blogs;
    public $customers;
    public $services;

    public function mount()
    {
      
        $this->totalAccounts = Account::count();
        $this->totalDeals = Deal::count();
        $this->totalContacts = Contact::count();
        $this->blogs = Blog::latest()->take(4)->get();
        $this->customers = Customer::latest()->take(5)->get();
        $this->services = Service::latest()->take(5)->get();
    }

    public function render()
    {
        return view('livewire.admin.dashboard');
    }
}