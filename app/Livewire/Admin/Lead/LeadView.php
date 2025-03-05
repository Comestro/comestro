<?php

namespace App\Livewire\Admin\Lead;

use App\Models\Lead;
use Livewire\Attributes\Layout;
use Livewire\Component;

class LeadView extends Component
{
    public $lead;

    public function mount($id)
    {
        $this->lead = Lead::findOrFail($id); // Fetch lead details
    }
    #[Layout('components.layouts.adminLayout')]

    public function render()
    {
        return view('livewire.admin.lead.lead-view', [
            'lead' => $this->lead,
        ]);
    }
}
