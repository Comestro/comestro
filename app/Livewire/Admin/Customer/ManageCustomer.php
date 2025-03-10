<?php

namespace App\Livewire\Admin\Customer;

use Livewire\Component;
use App\Models\Customer;
use Livewire\WithPagination;
use Livewire\Attributes\Layout;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Storage;
class ManageCustomer extends Component
{
    use WithPagination, WithFileUploads;
    #[Layout('components.layouts.adminLayout')]
    public $search = '';
    public $perPage = 10;
    public $editingCustomerId;
    public $name, $designation, $message, $image, $existingImage;
    public $showDeleteModal = false;
    public $customerIdToDelete;

    protected $rules = [
        'name' => 'required|string|max:255',
        'designation' => 'required|string|max:255',
        'message' => 'required|string',
        'image' => 'nullable|image|max:1024',
    ];

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function edit($id)
    {
        $customer = Customer::findOrFail($id);
        $this->editingCustomerId = $id;
        $this->name = $customer->name;
        $this->designation = $customer->designation;
        $this->message = $customer->message;
        $this->existingImage = $customer->image;
        $this->image = null;
    }

    public function update()
    {
        $this->validate();

        $customer = Customer::findOrFail($this->editingCustomerId);
        
        $data = [
            'name' => $this->name,
            'designation' => $this->designation,
            'message' => $this->message,
        ];

        if ($this->image) {
            $data['image'] = $this->image->store('customers', 'public');
        }

        $customer->update($data);

        $this->resetEditForm();
        session()->flash('message', 'Customer updated successfully!');
    }

    public function cancelEdit()
    {
        $this->resetEditForm();
    }

    public function confirmDelete($id)
    {
        $this->showDeleteModal = true;
        $this->customerIdToDelete = $id;
    }

    public function delete()
    {
        Customer::findOrFail($this->customerIdToDelete)->delete();
        $this->showDeleteModal = false;
        $this->customerIdToDelete = null;
        session()->flash('message', 'Customer deleted successfully!');
    }

    private function resetEditForm()
    {
        $this->editingCustomerId = null;
        $this->name = null;
        $this->designation = null;
        $this->message = null;
        $this->image = null;
        $this->existingImage = null;
    }

    public function render()
    {
        $customers = Customer::where('name', 'like', '%' . $this->search . '%')
            ->orWhere('designation', 'like', '%' . $this->search . '%')
            ->paginate($this->perPage);

        return view('livewire.admin.customer.manage-customer', [
            'customers' => $customers
        ]);
    }
}