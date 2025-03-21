<?php

namespace App\Livewire\Admin\Team;

use Livewire\Component;
use App\Models\Team;
use Livewire\Attributes\Layout;
use Livewire\WithPagination;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Storage;

class ManageTeam extends Component
{
    use WithPagination, WithFileUploads;

    #[Layout('components.layouts.adminLayout')]
    
    public $editingTeamId;
    public $name;
    public $role;
    public $image;
    public $existingImage;
    public $showDeleteModal = false;
    public $team_id;

    protected $rules = [
        'name' => 'required|string|max:255',
        'role' => 'required|string|max:255',
        'image' => 'nullable|image|max:2048',
    ];

    public function edit($id)
    {
        $team = Team::findOrFail($id);
        $this->editingTeamId = $id;
        $this->name = $team->name;
        $this->role = $team->role;
        $this->existingImage = $team->image;
    }

    public function update()
    {
        $this->validate();
        
        $team = Team::findOrFail($this->editingTeamId);
        
        $teamData = [
            'name' => $this->name,
            'role' => $this->role,
        ];

        if ($this->image) {
            if ($team->image) {
                Storage::disk('public')->delete($team->image);
            }
            $imagePath = $this->image->store('team-images', 'public');
            $teamData['image'] = $imagePath;
        }

        $team->update($teamData);

        $this->cancelEdit();
        session()->flash('message', 'Team member updated successfully!');
    }

    public function cancelEdit()
    {
        $this->reset(['editingTeamId', 'name', 'role', 'image', 'existingImage']);
    }

    public function confirmDelete($id)
    {
        $this->team_id = $id;
        $this->showDeleteModal = true;
    }

    public function delete()
    {
        $team = Team::findOrFail($this->team_id);
        if ($team->image) {
            Storage::disk('public')->delete($team->image);
        }
        $team->delete();
        
        $this->showDeleteModal = false;
        $this->team_id = null;
        session()->flash('message', 'Team member deleted successfully!');
    }

    public function render()
    {
        $teams = Team::latest()->paginate(10);
        return view('livewire.admin.team.manage-team', [
            'teams' => $teams
        ]);
    }
}