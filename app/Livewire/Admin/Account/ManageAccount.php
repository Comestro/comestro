<?php

namespace App\Livewire\Admin\Account;

use App\Models\Account;
use Livewire\Attributes\Layout;
use Livewire\Component;

class ManageAccount extends Component
{
    public $account_name, $phone, $website;
    public $account_id;
    public $showEditModal = false;
    public $showDeleteModal = false;

    public function mount()
    {
        $this->account_id = null;
    }

    public function editAccount($id)
    {
        $lead = Account::find($id);
        $this->account_id = $id;
        $this->account_name = $lead->account_name;
        $this->phone = $lead->phone;
        $this->website = $lead->website;


        $this->showEditModal = true;
    }
    public function updateAccount()
    {
        $this->validate([
            'account_name' => 'required|string|max:100',
            'phone' => 'required|string|max:15|unique:accounts,phone,' . $this->account_id,

            'website' => 'nullable|url|max:100',
        ]);
        $account = Account::findOrFail($this->account_id);
        $account->update([
            'account_name' => $this->account_name,
            'phone' => $this->phone,
            'website' => $this->website,
        ]);
        session()->flash('message', 'account updated successfully!');
        $this->showEditModal = false;
        $this->reset();
    }
    public function confirmDelete($id)
    {
        $this->account_id = $id;
        $this->showDeleteModal = true;
    }
    public function deleteAccount()
    {
        Account::destroy($this->account_id);
        session()->flash('message', 'Account deleted successfully!');
        $this->showDeleteModal = false;
    }
    #[Layout('components.layouts.adminLayout')]


    public function render()
    {
        $data['accounts'] = Account::all();
        return view('livewire.admin.account.manage-account', $data);
    }
}
