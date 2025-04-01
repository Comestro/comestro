<?php

namespace App\Livewire\Public;

use Livewire\Component;
use App\Models\Service as ServiceModel;

class Service extends Component
{
    public function render()
    {
        
        $services = ServiceModel::take(6)->get();

      
        return view('livewire.public.service', [
            'services' => $services
        ]);
    }
}