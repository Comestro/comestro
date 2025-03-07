<?php

namespace App\Livewire\Admin\Deal;

use App\Models\Deal;
use App\Models\Account;
use App\Models\Contact;
use Livewire\Attributes\Layout;
use Livewire\Component;


class ManageDeal extends Component
{
   

    #[Layout('components.layouts.adminLayout')]

    public $selectedDealId = null; 
    public $deal_name, $amount, $closing_date, $deal_stage, $account_id, $contact_id;
    public $showDeleteModal = false;
    public $deal_id;

    public function edit($dealId)
    {
        $deal = Deal::find($dealId);
        if ($deal) {
            $this->selectedDealId = $deal->id;
            $this->deal_name = $deal->deal_name;
            $this->amount = $deal->amount;
            $this->closing_date = $deal->closing_date;
            $this->deal_stage = $deal->deal_stage;
            $this->account_id = $deal->account_id;
            $this->contact_id = $deal->contact_id;
        }
    }

    public function update()
    {
        $this->validate([
            'deal_name' => 'required|string|max:50|unique:deals,deal_name,' . $this->selectedDealId,
            'amount' => 'required|numeric|min:0',
            'closing_date' => 'required|date',
            'deal_stage' => 'required|string|max:100',
            'account_id' => 'required|exists:accounts,id',
            'contact_id' => 'required|exists:contacts,id',
        ]);

        $deal = Deal::find($this->selectedDealId);
        if ($deal) {
            $deal->update([
                'deal_name' => $this->deal_name,
                'amount' => $this->amount,
                'closing_date' => $this->closing_date,
                'deal_stage' => $this->deal_stage,
                'account_id' => $this->account_id,
                'contact_id' => $this->contact_id,
            ]);

            session()->flash('message', 'Deal updated successfully!');
            $this->resetForm();
        }
    }

    public function confirmDelete($dealId)
    {
        $this->deal_id = $dealId;
        $this->showDeleteModal = true;
    }

    public function delete($dealId)
    {
        $deal = Deal::find($dealId);
        if ($deal) {
            $deal->delete();
            session()->flash('message', 'Deal deleted successfully!');
        }
        $this->showDeleteModal = false;
        $this->deal_id = null;
    }

    public function resetForm()
    {
        $this->selectedDealId = null;
        $this->deal_name = '';
        $this->amount = '';
        $this->closing_date = '';
        $this->deal_stage = '';
        $this->account_id = '';
        $this->contact_id = '';
    }

    public function render()
    {
        return view('livewire.admin.deal.manage-deal', [
            'deals' => Deal::all(),
            'accounts' => Account::all(),
            'contacts' => Contact::all(),
            'selectedDealId' => $this->selectedDealId, 
        ]);
    }
}