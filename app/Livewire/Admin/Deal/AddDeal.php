<?php

namespace App\Livewire\Admin\Deal;

use App\Models\Account;
use App\Models\Contact;
use App\Models\Deal;
use Livewire\Attributes\Layout;
use Livewire\Component;

class AddDeal extends Component
{
    public $amount, $closing_date, $deal_stage,$account_id,$contact_id,$deal_name;


    #[Layout('components.layouts.adminLayout')]

    public function saveDeal()
    {
        $this->validate([
            'amount' => 'required|numeric|min:0',
            'closing_date' => 'required|date',
            'deal_stage' => 'required|string|max:100',
            'deal_name' => 'required|string|max:50|unique:deals,deal_name',
            'account_id' => 'required|exists:accounts,id',
            'contact_id' => 'required|exists:contacts,id',
        ]);
    
        Deal::create([
            'amount' => $this->amount,
            'closing_date' => $this->closing_date,
            'deal_stage' => $this->deal_stage,
            'deal_name' => $this->deal_name,
            'account_id' => $this->account_id,
            'contact_id' => $this->contact_id,
        ]);
    
        session()->flash('message', 'Deal created successfully!');
    
        $this->reset(['amount', 'closing_date', 'deal_stage', 'deal_name', 'account_id', 'contact_id']);
    }
    
    public function render()
    {
        $data['accounts'] = Account::all();
        $data['contacts'] = Contact::all();
        return view('livewire.admin.deal.add-deal',$data);
    }
}
