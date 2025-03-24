<?php

namespace App\Livewire\Public;

use Livewire\Component;
use App\Models\Work;

class OurProject extends Component
{
    public $works;

    public function mount()
    {
        $this->works = Work::all();
    }

    public function render()
    {
        return view('livewire.public.our-project');
    }
}