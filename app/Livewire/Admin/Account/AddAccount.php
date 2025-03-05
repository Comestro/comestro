<?php

namespace App\Livewire\Admin\Account;

use App\Models\Account;
use Livewire\Attributes\Layout;
use Livewire\Component;

class AddAccount extends Component
{
    public $account_name, $phone, $website;


    #[Layout('components.layouts.adminLayout')]

    protected $rules=[
        'account_name' => 'required|string|max:100',
        'phone' => 'required|string|max:15|unique:accounts,phone',
        
        'website' => 'nullable|url|max:100',
    ];

    public function saveAccount(){
        $this->validate();
        $account = new Account();
        $account->account_name = $this->account_name;
        $account->phone = $this->phone;
        $account->website = $this->website;
        $account->save();
        session()->flash('message','Account created successfully');
        $this->reset();
    }

    public function render()
    {
        return view('livewire.admin.account.add-account');
    }
}
