<?php

namespace App\Livewire\Admin\Work;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\Work;
use Livewire\Attributes\Layout;
use Illuminate\Support\Facades\Storage;

class ManageWork extends Component
{
    use WithFileUploads;
    #[Layout('components.layouts.adminLayout')]
    
    public $works;
    public $editingWorkId = null;
    public $category, $title, $description, $image, $link, $image_position, $existingImage;
    public $showDeleteModal = false;
    public $workIdToDelete = null;

    protected $rules = [
        'category' => 'nullable|string|max:255',
        'title' => 'required|string|max:255',
        'description' => 'required|string',
        'image' => 'nullable|image|max:2048', 
        'link' => 'required|url',
        'image_position' => 'required|boolean',
    ];

    public function mount()
    {
        $this->works = Work::all(); 
    }

    public function edit($workId)
    {
        $work = Work::findOrFail($workId);
        $this->editingWorkId = $work->id;
        $this->category = $work->category;
        $this->title = $work->title;
        $this->description = $work->description;
        $this->link = $work->link;
        $this->image_position = $work->image_position;
        $this->existingImage = $work->image;
    }

    public function update()
    {
        $this->validate();

        $work = Work::findOrFail($this->editingWorkId);

        $data = [
            'category' => $this->category,
            'title' => $this->title,
            'description' => $this->description,
            'link' => $this->link,
            'image_position' => $this->image_position,
        ];

        if ($this->image) {
            if ($work->image) {
                Storage::disk('public')->delete($work->image);
            }
            $data['image'] = $this->image->store('home/projects', 'public');
        }

        $work->update($data);

        session()->flash('message', 'Work updated successfully!');
        $this->cancelEdit();
        $this->works = Work::all(); 
    }

    public function cancelEdit()
    {
        $this->editingWorkId = null;
        $this->reset(['category', 'title', 'description', 'image', 'link', 'image_position', 'existingImage']);
    }

    public function confirmDelete($workId)
    {
        $this->showDeleteModal = true;
        $this->workIdToDelete = $workId;
    }

    public function delete()
    {
        $work = Work::findOrFail($this->workIdToDelete);
        if ($work->image) {
            Storage::disk('public')->delete($work->image);
        }
        $work->delete();

        session()->flash('message', 'Work deleted successfully!');
        $this->showDeleteModal = false;
        $this->workIdToDelete = null;
        $this->works = Work::all(); // Reload works after delete
    }

    public function render()
    {
        return view('livewire.admin.work.manage-work');
    }
}