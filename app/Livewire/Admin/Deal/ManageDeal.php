<?php

namespace App\Livewire\Admin\Deal;

use App\Models\Deal;
use Livewire\Attributes\Layout;
use Livewire\Component;

class ManageDeal extends Component
{
    #[Layout('components.layouts.adminLayout')]

    public function render()
    {
        $data['deals'] = Deal::all();
        return view('livewire.admin.deal.manage-deal', $data);
    }
}
