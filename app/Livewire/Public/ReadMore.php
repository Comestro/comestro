<?php
namespace App\Livewire\Public;

use Livewire\Component;
use App\Models\Blog;

class ReadMore extends Component
{
    public $blog;

    public function mount($blogId)
    {
        $this->blog = Blog::findOrFail($blogId);
    }

    public function render()
    {
        return view('livewire.public.read-more', [
            'blog' => $this->blog,
        ]);
    }
}
