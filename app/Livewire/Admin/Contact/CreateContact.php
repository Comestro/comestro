<?php

namespace App\Livewire\Admin\Contact;

use App\Models\Contact;
use App\Models\Account;
use Livewire\Attributes\Layout;
use Livewire\Component;

class CreateContact extends Component
{
    #[Layout('components.layouts.adminLayout')]

    public $contact_name = '';
    public $email = '';
    public $phone = '';
    public $account_id = '';
    
    public $accounts;

    public function mount()
    {
        $this->accounts = Account::all();
    }

    public function save()
    {
        $validated = $this->validate([
            'contact_name' => 'required|string|max:255',
            'email' => 'required|email|unique:contacts,email',
            'phone' => 'required|string|max:20',
            'account_id' => 'required|exists:accounts,id',
        ]);

        Contact::create($validated);

        session()->flash('message', 'Contact created successfully!');
        $this->reset(['contact_name', 'email', 'phone','account_id']);
    }

    public function render()
    {
        return view('livewire.admin.contact.create-contact');
    }
}