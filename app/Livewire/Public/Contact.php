<?php

namespace App\Livewire\Public;

use Livewire\Component;
use App\Models\Setting;
class Contact extends Component
{

    public $name;
    public $email;
    public $message;

    protected $rules =[
        'name' =>'required|string|max:255',
        'email' =>'required|email|max:255',
        'message' =>'required|string|max:1000',

    ];
    public function submit(){
        $this->validate();
        Setting::create([
            'name' => $this->name,
            'email' => $this->email,
            'message' => $this->message,
        ]);
        session()->flash('message','Your message has been sent successfully');
        $this->reset(['name','email','message']);
        
    }
    
    public function render()
    {
        return view('livewire.public.contact');
    }
}
