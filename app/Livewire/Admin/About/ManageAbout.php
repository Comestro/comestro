<?php
namespace App\Livewire\Admin\About;
    use Livewire\Component;
    use App\Models\About;
    use Livewire\WithPagination;
    use Livewire\WithFileUploads;
    use Livewire\Attributes\Layout;
    use Illuminate\Support\Facades\Storage;
    class ManageAbout extends Component
    {
        use WithPagination, WithFileUploads;
        #[Layout('components.layouts.adminLayout')]
        public $perPage = 10;
        public $showDeleteModal = false;
        public $aboutIdToDelete;
        public $editingAboutId;
        public $team, $name, $url, $date, $lead, $members, $description, $image, $icon, $existingImage, $existingIcon;
    
        public function confirmDelete($id)
        {
            $this->aboutIdToDelete = $id;
            $this->showDeleteModal = true;
        }
    
        public function delete()
        {
            $about = About::findOrFail($this->aboutIdToDelete);
            Storage::disk('public')->delete($about->image);
            Storage::disk('public')->delete($about->icon);
            $about->delete();
    
            $this->showDeleteModal = false;
            session()->flash('message', 'About entry deleted successfully!');
        }
    
        public function edit($id)
        {
            $about = About::findOrFail($id);
            $this->editingAboutId = $id;
            $this->team = $about->team;
            $this->name = $about->name;
            $this->url = $about->url;
            $this->date = $about->date;
            $this->lead = $about->lead;
            $this->members = $about->members;
            $this->description = $about->description;
            $this->existingImage = $about->image;
            $this->existingIcon = $about->icon;
        }
    
        public function update()
        {
            $this->validate([
                'team' => 'required|string|max:255',
                'name' => 'required|string|max:255',
                'url' => 'required|string|max:255',
                'date' => 'required|date',
                'lead' => 'required|string|max:255',
                'members' => 'required|integer',
                'description' => 'required|string',
                'image' => 'nullable|image|max:2048', 
                'icon' => 'nullable|image|max:1024',  
            ]);
    
            $about = About::findOrFail($this->editingAboutId);
    
            $data = [
                'team' => $this->team,
                'name' => $this->name,
                'url' => $this->url,
                'date' => $this->date,
                'lead' => $this->lead,
                'members' => $this->members,
                'description' => $this->description,
            ];
    
            if ($this->image) {
                Storage::disk('public')->delete($about->image);
                $data['image'] = $this->image->store('abouts', 'public');
            }
    
            if ($this->icon) {
                Storage::disk('public')->delete($about->icon);
                $data['icon'] = $this->icon->store('abouts', 'public');
            }
    
            $about->update($data);
    
            $this->cancelEdit();
            session()->flash('message', 'About entry updated successfully!');
        }
    
        public function cancelEdit()
        {
            $this->editingAboutId = null;
            $this->reset(['team', 'name', 'url', 'date', 'lead', 'members', 'description', 'image', 'icon', 'existingImage', 'existingIcon']);
        }
    
        public function render()
        {
            $abouts = About::orderBy('date', 'desc')->paginate($this->perPage);
    
            return view('livewire.admin.about.manage-about', [
                'abouts' => $abouts,
            ]);
        }
    }