<?php

namespace App\Livewire\Public;

use Livewire\Component;
use App\Models\Blog as BlogModel;
use App\Models\Course;
class Blog extends Component
{
    public $blogs;
    public $courses;
    public function mount()
    {
        
       $this->blogs = BlogModel::latest()->get();
       $this->courses = Course::latest()->get();
    }
    public function render()
    {
       
        return view('livewire.public.blog');
    }
}
