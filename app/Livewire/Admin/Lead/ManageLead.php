<?php

namespace App\Livewire\Admin\Lead;

use App\Models\Lead;
use Livewire\Attributes\Layout;
use Livewire\Component;
use Livewire\WithPagination;

class ManageLead extends Component
{
    use WithPagination;
    #[Layout('components.layouts.adminLayout')]

    public $first_name, $last_name, $title, $email, $company, $phone;
    public $lead_status, $lead_source, $street, $city, $state, $zip_code, $country, $description;
    public $lead_id;
    public $showEditModal = false;
    public $showDeleteModal = false;

    public function mount()
    {
        $this->lead_id = null;
    }

    public function editLead($id)
    {
        $lead = Lead::find($id);
        $this->lead_id = $id;
        $this->first_name = $lead->first_name;
        $this->last_name = $lead->last_name;
        $this->title = $lead->title;
        $this->email = $lead->email;
        $this->company = $lead->company;
        $this->phone = $lead->phone;
        $this->lead_status = $lead->lead_status;
        $this->lead_source = $lead->lead_source;
        $this->street = $lead->street;
        $this->city = $lead->city;
        $this->state = $lead->state;
        $this->zip_code = $lead->zip_code;
        $this->country = $lead->country;
        $this->description = $lead->description;
        $this->showEditModal = true;
    }
    public function updateLead()
    {
        $this->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'title' => 'required|string|max:255',
            'email' => 'required|email|unique:leads,email,' . $this->lead_id,
            'company' => 'nullable|string|max:255',
            'phone' => 'nullable|string|max:10',
            'lead_status' => 'required|in:New,Contacted,Qualified,Lost',
            'lead_source' => 'nullable|in:Website,Referral,Direct call,Social Media,Search,Advertisement',
            'street' => 'nullable|string|max:255',
            'city' => 'nullable|string|max:255',
            'state' => 'nullable|string|max:255',
            'zip_code' => 'nullable|string|max:20',
            'country' => 'nullable|string|max:100',
            'description' => 'nullable|string',
        ]);
        $lead = Lead::findOrFail($this->lead_id);
        $lead->update([
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
        session()->flash('message', 'Lead updated successfully!');
        $this->showEditModal = false;
        $this->reset();
    }
    public function confirmDelete($id)
    {
        $this->lead_id = $id;
        $this->showDeleteModal = true;
    }
    public function deleteLead()
    {
        Lead::destroy($this->lead_id);
        session()->flash('message', 'Lead deleted successfully!');
        $this->showDeleteModal = false;
        
    }
    

    public function render()
    {
        $data['leads'] = Lead::all();
        return view('livewire.admin.lead.manage-lead', $data);
    }
}
