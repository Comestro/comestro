<?php

namespace App\Livewire\Public;

use Livewire\Component;
use App\Models\Subscriber;

class Subscription extends Component
{
    public $email = '';
    public $message = '';

    public function subscribe()
    {
        $this->validate([
            'email' => 'required|email:dns|unique:subscribers,email',
        ]);

        Subscriber::create([
            'email' => $this->email,
        ]);

        $this->message = 'Thanks for subscribing!';
        $this->email = '';
    }

    public function render()
    {
        return view('livewire.public.subscription');
    }
}