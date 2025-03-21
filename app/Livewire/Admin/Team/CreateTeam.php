<?php

namespace App\Livewire\Admin\Team;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\Team;
use Illuminate\Support\Facades\Storage;
use Livewire\Attributes\Layout;
class CreateTeam extends Component
{
    use WithFileUploads;
    #[Layout('components.layouts.adminLayout')]
    public $name = '';
    public $role = '';
    public $image;
    public $teams;

    protected $rules = [
        'name' => 'required|string|max:255',
        'role' => 'required|string|max:255',
        'image' => 'nullable|image|max:1024',
    ];

    public function mount()
    {
        $this->teams = Team::all();
    }

    public function save()
    {
        $this->validate();

        $imagePath = null;
        if ($this->image) {
            $imagePath = $this->image->store('team-images', 'public');
        }

        Team::create([
            'name' => $this->name,
            'role' => $this->role,
            'image' => $imagePath,
        ]);

        $this->reset(['name', 'role', 'image']);
        $this->teams = Team::all(); 
        session()->flash('message', 'Team member added successfully!');
    }

    public function render()
    {
        return view('livewire.admin.team.create-team');
    }
}