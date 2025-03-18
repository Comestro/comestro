<?php

namespace App\Livewire\Public;

use Livewire\Component;
use App\Models\About as AboutModel;

class About extends Component
{
    public $abouts;

    public function mount()
    {
        $this->abouts = AboutModel::all(); 
    }

    public function render()
    {
        return view('livewire.public.about');
    }
}