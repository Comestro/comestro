<?php
namespace App\Livewire\Admin\Contact;

use App\Models\Contact;
use App\Models\Account;
use Livewire\Attributes\Layout;
use Livewire\Component;

class ManageContact extends Component
{
    #[Layout('components.layouts.adminLayout')]

    public $contacts;
    public $editingContactId = null;
    public $contact_name = '';
    public $email = '';
    public $phone = '';
    public $account_id = '';
    public $contact_id = '';
    public $showDeleteModal = false;

    public function mount()
    {
        $this->contacts = Contact::all();
    }

    public function edit($contactId)
    {
        $contact = Contact::find($contactId);
        $this->editingContactId = $contact->id;
        $this->contact_name = $contact->contact_name;
        $this->email = $contact->email;
        $this->phone = $contact->phone;
        $this->account_id = $contact->account_id;
    }

    public function update()
    {
        $validated = $this->validate([
            'contact_name' => 'required|string|max:255',
            'email' => 'required|email|unique:contacts,email,' . $this->editingContactId,
            'phone' => 'required|string|max:20',
            'account_id' => 'required|exists:accounts,id',
        ]);

        $contact = Contact::find($this->editingContactId);
        $contact->update($validated);

        $this->resetForm();
        session()->flash('message', 'Contact updated successfully!');
        $this->contacts = Contact::all();
    }

    public function confirmDelete($contactId)
    {
        $this->contact_id = $contactId;
        $this->showDeleteModal = true;
    }

    public function delete()
    {
        $contact = Contact::find($this->contact_id);
        if ($contact) {
            $contact->delete();
            session()->flash('message', 'Contact deleted successfully!');
        }
        $this->showDeleteModal = false;
        $this->contact_id = null;
        $this->contacts = Contact::all();
    }

    public function cancelEdit()
    {
        $this->resetForm();
    }

    private function resetForm()
    {
        $this->editingContactId = null;
        $this->contact_name = '';
        $this->email = '';
        $this->phone = '';
        $this->account_id = '';
    }

    public function render()
    {
        return view('livewire.admin.contact.manage-contact', [
            'contacts' => $this->contacts,
            'accounts' => Account::all()
        ]);
    }
}