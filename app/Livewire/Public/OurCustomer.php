<?php

namespace App\Livewire\Public;

use Livewire\Component;
use App\Models\Customer;
class OurCustomer extends Component
{
    public $customers;

    public function mount(){
        $this->customers = Customer::latest()->take(3)->get();  
    }
    public function render()
    {
        return view('livewire.public.our-customer',[
            'customers' => $this->customers,
        ]);
    }
}

