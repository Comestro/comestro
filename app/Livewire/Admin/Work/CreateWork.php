<?php

namespace App\Livewire\Admin\Work;
use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\Work;
use Livewire\Attributes\Layout;
use Illuminate\Support\Facades\Storage;
class CreateWork extends Component
{
    use WithFileUploads;
    #[Layout('components.layouts.adminLayout')]

    public $category, $title, $description, $image, $link, $image_position;

    protected $rules = [
        'category' => 'nullable|string|max:255',
        'title' => 'required|string|max:255',
        'description' => 'required|string',
        'image' => 'required|image|max:2048', 
        'link' => 'required|url',
        'image_position' => 'required|boolean',
    ];

    public function save()
    {
        $this->validate();

       
        $imagePath = $this->image->store('home/projects', 'public');

        Work::create([
            'category' => $this->category,
            'title' => $this->title,
            'description' => $this->description,
            'image' => $imagePath,
            'link' => $this->link,
            'image_position' => $this->image_position,
        ]);

        session()->flash('message', 'Work created successfully!');

       
        $this->reset(['category', 'title', 'description', 'image', 'link', 'image_position']);
    }

    public function render()
    {
        return view('livewire.admin.work.create-work');
    }
}