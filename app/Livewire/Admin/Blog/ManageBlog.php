<?php

namespace App\Livewire\Admin\Blog;

use Livewire\Component;
use App\Models\Blog;
use Livewire\Attributes\Layout;
use Livewire\WithPagination;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Storage;

class ManageBlog extends Component
{
    use WithPagination, WithFileUploads;
    #[Layout('components.layouts.adminLayout')]
    
    public $editingBlogId;
    public $title;
    public $content;
    public $image;
    public $existingImage;
    public $showDeleteModal = false;
    public $blog_id;

    protected $rules = [
        'title' => 'required|string|max:255',
        'content' => 'required|string',
        'image' => 'nullable|image|max:2048',
    ];

    public function edit($id)
    {
        $blog = Blog::findOrFail($id);
        $this->editingBlogId = $id;
        $this->title = $blog->title;
        $this->content = $blog->content;
        $this->existingImage = $blog->image;
    }

    public function update()
    {
        $this->validate();
        
        $blog = Blog::findOrFail($this->editingBlogId);
        
        $blogData = [
            'title' => $this->title,
            'content' => $this->content,
        ];

        if ($this->image) {
            // Delete old image if it exists
            if ($blog->image) {
                Storage::disk('public')->delete($blog->image);
            }
            // Store new image
            $imagePath = $this->image->store('blog-images', 'public');
            $blogData['image'] = $imagePath;
        }

        $blog->update($blogData);

        $this->cancelEdit();
        session()->flash('message', 'Blog updated successfully!');
    }

    public function cancelEdit()
    {
        $this->reset(['editingBlogId', 'title', 'content', 'image', 'existingImage']);
    }

    public function confirmDelete($id)
    {
        $this->blog_id = $id;
        $this->showDeleteModal = true;
    }

    public function delete()
    {
        $blog = Blog::findOrFail($this->blog_id);
        if ($blog->image) {
            Storage::disk('public')->delete($blog->image);
        }
        $blog->delete();
        
        $this->showDeleteModal = false;
        $this->blog_id = null;
        session()->flash('message', 'Blog deleted successfully!');
    }

    public function render()
    {
        $blogs = Blog::latest()->paginate(10);
        return view('livewire.admin.blog.manage-blog', [
            'blogs' => $blogs
        ]);
    }
}