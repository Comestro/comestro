<?php

namespace App\Livewire\Admin\Subscribe;

use Livewire\Component;
use App\Models\Subscriber;
use Livewire\WithPagination;
use Livewire\Attributes\Layout;

class ManageSubscribe extends Component
{
    use WithPagination;
    #[Layout('components.layouts.adminLayout')]
    public $email = '';
    public $selectedSubscriberId = null;
    public $showDeleteModal = false;
    public $subscriber_id;

    protected $rules = [
        'email' => 'required|email:dns|unique:subscribers,email',
    ];

    public function render()
    {
        $subscribers = Subscriber::latest()->paginate(10);
        
        return view('livewire.admin.subscribe.manage-subscribe', [
            'subscribers' => $subscribers
        ]);
    }

    public function edit($id)
    {
        $subscriber = Subscriber::findOrFail($id);
        $this->selectedSubscriberId = $id;
        $this->email = $subscriber->email;
    }

    public function update()
    {
        $this->validate([
            'email' => 'required|email:dns|unique:subscribers,email,' . $this->selectedSubscriberId,
        ]);

        $subscriber = Subscriber::findOrFail($this->selectedSubscriberId);
        $subscriber->update([
            'email' => $this->email
        ]);

        session()->flash('message', 'Subscriber updated successfully!');
        $this->resetForm();
    }

    public function confirmDelete($id)
    {
        $this->showDeleteModal = true;
        $this->subscriber_id = $id;
    }

    public function delete($id)
    {
        Subscriber::findOrFail($id)->delete();
        $this->showDeleteModal = false;
        $this->subscriber_id = null;
        session()->flash('message', 'Subscriber deleted successfully!');
    }

    public function resetForm()
    {
        $this->selectedSubscriberId = null;
        $this->email = '';
    }
}