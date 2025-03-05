<?php

namespace App\Livewire\Admin\Lead;

use App\Models\Lead;
use Livewire\Attributes\Layout;
use Livewire\Component;

class ManageLead extends Component
{  
      #[Layout('components.layouts.adminLayout')]

    public function render()
    {
        $data['leads']=Lead::all();
        return view('livewire.admin.lead.manage-lead',$data);
    }
}
