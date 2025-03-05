<?php

namespace App\Livewire\Admin\Setting;

use Livewire\Component;
use App\Models\Setting;
use Livewire\Attributes\Layout;
use Livewire\WithPagination;

class ManageSetting extends Component
{
  
    use WithPagination;
    #[Layout('components.layouts.adminLayout')]
    public $perPage = 10;
    
    public $selectedSettingId;
    public $name, $email, $message;

    protected $rules = [
        'name' => 'required|string|max:255',
        'email' => 'required|email|max:255',
        'message' => 'required|string|max:1000',
    ];

   

    public function edit($id)
    {
        $setting = Setting::findOrFail($id);
        $this->selectedSettingId = $id;
        $this->name = $setting->name;
        $this->email = $setting->email;
        $this->message = $setting->message;
    }

    public function update()
    {
        $this->validate();

        $setting = Setting::findOrFail($this->selectedSettingId);
        $setting->update([
            'name' => $this->name,
            'email' => $this->email,
            'message' => $this->message,
        ]);

        session()->flash('message', 'Setting updated successfully!');
        $this->resetForm();
    }

    public function delete($id)
    {
        Setting::findOrFail($id)->delete();
        session()->flash('message', 'Setting deleted successfully!');
    }

    public function resetForm()
    {
        $this->selectedSettingId = null;
        $this->name = '';
        $this->email = '';
        $this->message = '';
    }

    public function render()
    {
        return view('livewire.admin.setting.manage-setting', [
            'settings' => Setting::paginate($this->perPage)
        ]);
    }
}