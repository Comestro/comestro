<?php

namespace App\Livewire\Admin\Service;

use Livewire\Component;
use App\Models\Service;
use Livewire\Attributes\Layout;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Storage;

class CreateService extends Component
{
    use WithFileUploads;

    #[Layout('components.layouts.adminLayout')]
    public $icon; 
    public $title;
    public $description;
    
    protected $rules = [
        'icon' => 'required|image|max:2048',
        'title' => 'required|string|max:255',
        'description' => 'required|string',
    ];

    public function save()
    {
        $this->validate();

        
        $iconPath = $this->icon->store('services', 'public');

        Service::create([
            'icon' => $iconPath, 
            'title' => $this->title,
            'description' => $this->description,
        ]);

        $this->reset(['icon', 'title', 'description']);
        session()->flash('message', 'Service created successfully!');
    }

    public function render()
    {
        return view('livewire.admin.service.create-service');
    }
}