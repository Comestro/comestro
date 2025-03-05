<?php

namespace App\Livewire\Admin\Account;

use App\Models\Account;
use Livewire\Attributes\Layout;
use Livewire\Component;

class ManageAccount extends Component
{
    #[Layout('components.layouts.adminLayout')]

    public function render()
    {
        $data['accounts']=Account::all();
        return view('livewire.admin.account.manage-account',$data);
    }
}
