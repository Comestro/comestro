<?php

namespace App\Livewire\Admin\Contact;

use App\Models\Contact;
use Livewire\Attributes\Layout;
use Livewire\Component;

class ManageContact extends Component
{
    #[Layout('components.layouts.adminLayout')]

    public function render()
    {
        $data['contacts'] = Contact::all();
        return view('livewire.admin.contact.manage-contact', $data);
    }
}
