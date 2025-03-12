<?php

namespace App\Livewire\Public;
use App\Models\Blog;
use Livewire\Component;

class RecentBlog extends Component
{
    public $blogs;

    public function mount(){
        $this->blogs = Blog::latest()->take(3)->get();  
    }
    public function render()
    {
        return view('livewire.public.recent-blog',[
            'blogs' => $this->blogs
        ]);
    }
}

