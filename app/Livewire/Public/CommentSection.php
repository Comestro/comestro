<?php
namespace App\Livewire\Public;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Comment;

class CommentSection extends Component
{
    use WithPagination;
    public $name, $content;
    protected $paginationTheme = 'tailwind'; 

    protected $rules = [
        'name' => 'required|string|max:255',
        'content' => 'required|string',
    ];

    public function postComment()
    {
        $this->validate();

        Comment::create([
            'name' => $this->name,
            'content' => $this->content,
        ]);

        $this->reset(['name', 'content']);
        session()->flash('message', 'Comment posted successfully!');
    }

    public function render()
    {
        return view('livewire.public.comment-section', [
            'comments' => Comment::latest()->paginate(5) 
        ]);
    }
}