<?php

namespace App\Livewire\Admin\Service;

use Livewire\Component;
use App\Models\Service;
use Livewire\WithFileUploads;
use Livewire\WithPagination;
use Livewire\Attributes\Layout;
use Illuminate\Support\Facades\Storage;

class ManageService extends Component
{
    use WithFileUploads, WithPagination;
    #[Layout('components.layouts.adminLayout')]
    public $editingServiceId = null;
    public $title;
    public $description;
    public $icon;
    public $existingIcon;
    public $showDeleteModal = false;
    public $service_id;
    public $search = '';

    protected $rules = [
        'title' => 'required|string|max:255',
        'description' => 'required|string',
        'icon' => 'nullable|image|max:2048',
    ];

   
    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function edit($id)
    {
        $service = Service::findOrFail($id);
        $this->editingServiceId = $id;
        $this->title = $service->title;
        $this->description = $service->description;
        $this->existingIcon = $service->icon;
        $this->icon = null;
    }

    public function update()
    {
        $this->validate();

        $service = Service::findOrFail($this->editingServiceId);
        
        $data = [
            'title' => $this->title,
            'description' => $this->description,
        ];

        if ($this->icon) {
            if ($service->icon) {
                Storage::disk('public')->delete($service->icon);
            }
            $data['icon'] = $this->icon->store('services', 'public');
        }

        $service->update($data);

        $this->resetForm();
        session()->flash('message', 'Service updated successfully!');
    }

    public function confirmDelete($id)
    {
        $this->service_id = $id;
        $this->showDeleteModal = true;
    }

    public function delete()
    {
        $service = Service::findOrFail($this->service_id);
        if ($service->icon) {
            Storage::disk('public')->delete($service->icon);
        }
        $service->delete();
        
        $this->showDeleteModal = false;
        $this->service_id = null;
        session()->flash('message', 'Service deleted successfully!');
    }

    public function cancelEdit()
    {
        $this->resetForm();
    }

    private function resetForm()
    {
        $this->editingServiceId = null;
        $this->title = '';
        $this->description = '';
        $this->icon = null;
        $this->existingIcon = null;
    }

    public function render()
    {
        $services = Service::where('title', 'like', '%' . $this->search . '%')
            ->paginate(10);
        
        return view('livewire.admin.service.manage-service', [
            'services' => $services
        ]);
    }
}