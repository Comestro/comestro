<?php
namespace App\Livewire\Admin\Course;

use Livewire\Component;
use App\Models\Course;
use Livewire\Attributes\Layout;
use Livewire\WithFileUploads;
use Livewire\WithPagination;
use Illuminate\Support\Facades\Storage;

class ManageCourse extends Component
{
    use WithFileUploads, WithPagination;
    
    #[Layout('components.layouts.adminLayout')]
    
    public $title;
    public $description;
    public $image;
    public $editingCourseId;
    public $existingImage;
    public $showDeleteModal = false;
    public $course_id;
    
    protected $rules = [
        'title' => 'required|string|max:255',
        'description' => 'required|string',
        'image' => 'nullable|image|max:2048',
    ];

   

    public function edit($id)
    {
        $course = Course::findOrFail($id);
        $this->editingCourseId = $id;
        $this->title = $course->title;
        $this->description = $course->description;
        $this->existingImage = $course->image;
    }

    public function update()
    {
        $this->validate();

        $course = Course::findOrFail($this->editingCourseId);
        $courseData = [
            'title' => $this->title,
            'description' => $this->description,
        ];

        if ($this->image) {
            if ($course->image) {
                Storage::disk('public')->delete($course->image);
            }
            $imagePath = $this->image->store('course-images', 'public');
            $courseData['image'] = $imagePath;
        }

        $course->update($courseData);

        session()->flash('message', 'Course updated successfully!');
        $this->cancelEdit();
    }

    public function confirmDelete($id)
    {
        $this->course_id = $id;
        $this->showDeleteModal = true;
    }

    public function delete()
    {
        $course = Course::findOrFail($this->course_id);
        if ($course->image) {
            Storage::disk('public')->delete($course->image);
        }
        $course->delete();
        
        session()->flash('message', 'Course deleted successfully!');
        $this->showDeleteModal = false;
    }

    public function cancelEdit()
    {
        $this->reset(['editingCourseId', 'title', 'description', 'image', 'existingImage']);
    }

    public function render()
    {
        $courses = Course::latest()->paginate(10);
        return view('livewire.admin.course.manage-course', [
            'courses' => $courses
        ]);
    }
}