<?php

namespace App\Livewire\Admin\Lead;

use App\Models\Lead;
use App\Models\Deal;
use App\Models\Account;
use App\Models\Contact;
use Livewire\Attributes\Layout;
use Livewire\Component;

class ConvertLead extends Component
{
    public $lead;
    public $account_name, $contact_name, $email, $phone, $amount, $deal_name, $closing_date, $deal_stage;

    public function mount($id)
    {
        $this->lead = Lead::findOrFail($id);
        $this->account_name = $this->lead->company;
        $this->contact_name = $this->lead->first_name . ' ' . $this->lead->last_name;
        $this->email = $this->lead->email;
        $this->phone = $this->lead->phone;
    }

    public function convert()
    {
        $this->validate([
            'amount' => 'required|numeric',
            'deal_name' => 'required|string|max:255',
            'closing_date' => 'required|date',
            'deal_stage' => 'required|string|max:255',
        ]);

        // Step 1: Create Account
        $account = Account::create([
            'account_name' => $this->account_name,
            'phone' => $this->phone,
        ]);

        // Step 2: Create Contact
        $contact = Contact::create([
            'contact_name' => $this->contact_name,
            'account_id' => $account->id,
            'email' => $this->email,
            'phone' => $this->phone,
        ]);

        // Step 3: Create Deal
        Deal::create([
            'account_id' => $account->id,
            'contact_id' => $contact->id,
            'deal_name' => $this->deal_name,
            'amount' => $this->amount,
            'closing_date' => $this->closing_date,
            'deal_stage' => $this->deal_stage,
        ]);

        // Step 4: Delete the Lead
        $this->lead->delete();

        session()->flash('message', 'Lead converted successfully and deleted!');
        
        // Redirect back to leads list
        return redirect()->route('manage_lead');
    }

    #[Layout('components.layouts.adminLayout')]

    public function render()
    {
        return view('livewire.admin.lead.convert-lead', [
            'lead' => $this->lead,
        ]);
    }
}
