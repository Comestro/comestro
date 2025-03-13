<?php
namespace App\Livewire\Admin;

use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Layout;
use Livewire\Component;
use App\Models\Account; 
use App\Models\Deal;    
use App\Models\Contact;
use App\Models\Blog; 

class Dashboard extends Component
{
    #[Layout('components.layouts.adminLayout')]

   
    public $totalAccounts;
    public $totalDeals;
    public $totalContacts;
    public $blogs;
    public function mount()
    {
      
        $this->totalAccounts = Account::count();
        $this->totalDeals = Deal::count();
        $this->totalContacts = Contact::count();
        $this->blogs = Blog::latest()->take(4)->get();
    }

    public function render()
    {
        return view('livewire.admin.dashboard');
    }
}