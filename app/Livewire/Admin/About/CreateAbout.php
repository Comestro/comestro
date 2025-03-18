<?php

namespace App\Livewire\Admin\About;
use Livewire\Component;
use App\Models\About; 
use Livewire\WithFileUploads;
use Livewire\Attributes\Layout;
use Illuminate\Support\Facades\Storage;
class CreateAbout extends Component
{
  
    use WithFileUploads;

    #[Layout('components.layouts.adminLayout')]
    public $team;
    public $name;
    public $url;
    public $date;
    public $lead;
    public $members;
    public $description;
    public $image;
    public $icon;

    protected $rules = [
        'team' => 'required|string|max:255',
        'name' => 'required|string|max:255',
        'url' => 'required|string|max:255',
        'date' => 'required|date',
        'lead' => 'required|string|max:255',
        'members' => 'required|integer',
        'description' => 'required|string',
        'image' => 'required|image|max:2048',
        'icon' => 'required|image|max:1024', 
    ];

    public function submit()
    {
        $this->validate();

       
        $imagePath = $this->image->store('abouts', 'public');
        $iconPath = $this->icon->store('abouts', 'public');

      
        About::create([
            'team' => $this->team,
            'name' => $this->name,
            'url' => $this->url,
            'date' => $this->date,
            'lead' => $this->lead,
            'members' => $this->members,
            'description' => $this->description,
            'image' => $imagePath,
            'icon' => $iconPath,
        ]);

        
        $this->reset();

      
        $this->dispatch('aboutCreated', message: 'About created successfully!');
    }

    public function render()
    {
        return view('livewire.admin.about.create-about');
    }
}