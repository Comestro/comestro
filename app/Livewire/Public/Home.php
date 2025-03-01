<?php

namespace App\Livewire\Public;

use Livewire\Component;

class Home extends Component
{
    public $isScrolled = false;

    public function updatedIsScrolled()
    {
        $this->dispatchBrowserEvent('header-updated', ['isScrolled' => $this->isScrolled]);
    }
    public function render()
    {
        return view('livewire.public.home');
    }
}
