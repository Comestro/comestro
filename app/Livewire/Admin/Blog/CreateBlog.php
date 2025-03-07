<?php

namespace App\Livewire\Admin\Blog;

use Livewire\Component;
use App\Models\Blog;
use Livewire\Attributes\Layout;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Storage;
class CreateBlog extends Component
{
    use WithFileUploads;
    #[Layout('components.layouts.adminLayout')]
    public $title;
    public $content;
    public $image;

    protected $rules = [
        'title' => 'required|string|max:255',
        'content' => 'required|string',
        'image' => 'nullable|image|max:2048', 
    ];

    public function save()
    {
        $this->validate();

        $blogData = [
            'title' => $this->title,
            'content' => $this->content,
        ];

        if ($this->image) {
            $imagePath = $this->image->store('blog-images', 'public');
            $blogData['image'] = $imagePath;
        }

        Blog::create($blogData);

        session()->flash('message', 'Blog created successfully!');
        
       
        $this->reset(['title', 'content', 'image']);
    }

    public function render()
    {
        return view('livewire.admin.blog.create-blog');
    }
}



