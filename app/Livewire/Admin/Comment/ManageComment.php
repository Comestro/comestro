<?php
namespace App\Livewire\Admin\Comment;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Comment;
use Livewire\Attributes\Layout;
class ManageComment extends Component
{
    use WithPagination;
    #[Layout('components.layouts.adminLayout')]
    protected $paginationTheme = 'tailwind';

    public $name, $content, $selectedCommentId;
    public $showDeleteModal = false;
    public $comment_id;

    protected $rules = [
        'name' => 'required|string|max:255',
        'content' => 'required|string',
    ];

    public function edit($id)
    {
        $comment = Comment::findOrFail($id);
        $this->selectedCommentId = $id;
        $this->name = $comment->name;
        $this->content = $comment->content;
    }

    public function update()
    {
        $this->validate();

        Comment::find($this->selectedCommentId)->update([
            'name' => $this->name,
            'content' => $this->content,
        ]);

        $this->resetForm();
        session()->flash('message', 'Comment updated successfully!');
    }

    public function confirmDelete($id)
    {
        $this->showDeleteModal = true;
        $this->comment_id = $id;
    }

    public function delete($id)
    {
        Comment::find($id)->delete();
        $this->showDeleteModal = false;
        $this->comment_id = null;
        session()->flash('message', 'Comment deleted successfully!');
    }

    public function resetForm()
    {
        $this->selectedCommentId = null;
        $this->name = '';
        $this->content = '';
    }

    public function render()
    {
        return view('livewire.admin.comment.manage-comment', [
            'comments' => Comment::latest()->paginate(5)
        ]);
    }
}