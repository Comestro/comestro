<?php

namespace App\Livewire\Admin\Course;

use Livewire\Component;
use App\Models\Course;
use Livewire\Attributes\Layout;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Storage;
class CreateCourse extends Component
{
    use WithFileUploads;
    #[Layout('components.layouts.adminLayout')]
    public $title;
    public $description;
    public $image;

    protected $rules = [
        'title' => 'required|string|max:255',
        'description' => 'required|string',
        'image' => 'nullable|image|max:2048', 
    ];

    public function save()
    {
        $this->validate();

        $courseData = [
            'title' => $this->title,
            'description' => $this->description,
        ];
      
        if ($this->image) {
            $imagePath = $this->image->store('course-images', 'public');
            $courseData['image'] = $imagePath;
        }

        Course::create($courseData);

        session()->flash('message', 'Course created successfully!');
        
       
        $this->reset(['title', 'description', 'image']);
    }
    public function render()
    {
        return view('livewire.admin.course.create-course');
    }
}




