<?php

namespace App\Livewire\Admin\Lead;

use App\Models\Lead;
use Livewire\Attributes\Layout;
use Livewire\Component;
use Livewire\WithFileUploads;

class LeadInformation extends Component
{
    use WithFileUploads;

    public $first_name, $last_name, $title, $email, $company, $phone;
    public $lead_status, $lead_source, $street, $city, $state, $zip_code, $country, $description;
    public $lead_id; // Store lead ID for updates

    protected $rules = [
        'first_name' => 'required|string|max:255',
        'last_name' => 'required|string|max:255',
        'title' => 'required|string|max:255',
        'email' => 'required|email|unique:leads,email',
        'company' => 'nullable|string|max:255',
        'phone' => 'nullable|string|max:10',
        'lead_status' => 'required|in:New,Contacted,Qualified,Lost',
        'lead_source' => 'nullable|in:Website,Referral,Social Media,Advertisement',
        'street' => 'nullable|string|max:255',
        'city' => 'nullable|string|max:255',
        'state' => 'nullable|string|max:255',
        'zip_code' => 'nullable|string|max:20',
        'country' => 'nullable|string|max:100',
        'description' => 'nullable|string',
    ];

    public function saveLead()
    {
        $this->validate();

        $lead = Lead::create([
            'first_name' => $this->first_name,
            'last_name' => $this->last_name,
            'title' => $this->title,
            'email' => $this->email,
            'company' => $this->company,
            'phone' => $this->phone,
            'lead_status' => $this->lead_status,
            'lead_source' => $this->lead_source,
            'street' => $this->street,
            'city' => $this->city,
            'state' => $this->state,
            'zip_code' => $this->zip_code,
            'country' => $this->country,
            'description' => $this->description,
        ]);

        $this->lead_id = $lead->id; // Store lead ID for further updates
        session()->flash('message', 'Lead created successfully!');
    }

    public function saveAddress()
    {
        $this->validate([
            'street' => 'required|string|max:255',
            'city' => 'required|string|max:255',
            'state' => 'required|string|max:255',
            'zip_code' => 'required|string|max:10',
            'country' => 'required|string|max:50',
        ]);

        if ($this->lead_id) {
            Lead::where('id', $this->lead_id)->update([
                'street' => $this->street,
                'city' => $this->city,
                'state' => $this->state,
                'zip_code' => $this->zip_code,
                'country' => $this->country,
            ]);
            session()->flash('message', 'Address updated successfully.');
        } else {
            session()->flash('error', 'Please create a lead first.');
        }
    }

    public function saveDescription()
    {
        $this->validate([
            'description' => 'required|string|max:1000',
        ]);

        if ($this->lead_id) {
            Lead::where('id', $this->lead_id)->update([
                'description' => $this->description,
            ]);
            session()->flash('message', 'Description updated successfully.');
        } else {
            session()->flash('error', 'Please create a lead first.');
        }
    }

    #[Layout('components.layouts.adminLayout')]
    public function render()
    {
        return view('livewire.admin.lead.lead-information');
    }
}
