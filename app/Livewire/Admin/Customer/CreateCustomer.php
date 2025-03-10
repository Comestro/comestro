<?php
namespace App\Livewire\Admin\Customer;

use Livewire\Component;
use App\Models\Customer;
use Livewire\Attributes\Layout;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Storage;

class CreateCustomer extends Component
{
    use WithFileUploads;
    #[Layout('components.layouts.adminLayout')]
    public $image;
    public $name;
    public $designation;
    public $message;

    protected $rules = [
        'image' => 'required|image|max:1024',
        'name' => 'required|string|max:255',
        'designation' => 'required|string|max:255',
        'message' => 'required|string',
    ];

    public function submit()
    {
        $validatedData = $this->validate();

      
        $imagePath = $this->image->store('customers', 'public');

       
        Customer::create([
            'image' => $imagePath,
            'name' => $this->name,
            'designation' => $this->designation,
            'message' => $this->message,
        ]);

       
        $this->reset();

       
        session()->flash('message', 'Customer created successfully!');
    }

    public function render()
    {
        return view('livewire.admin.customer.create-customer');
    }
}