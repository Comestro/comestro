<?php

namespace App\Livewire\Public;

use Livewire\Component;
use App\Models\About as AboutModel;
use App\Models\Team;

class About extends Component
{
    public $abouts;
    public $teams;
    public function mount()
    {
        $this->abouts = AboutModel::all(); 
        $this->teams = Team::all();
    }

    public function render()
    {
        return view('livewire.public.about');
    }
}