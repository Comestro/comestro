<?php

namespace App\Livewire\Auth;

use Livewire\Attributes\Layout;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;


class Login extends Component
{
 #[Layout('components.layouts.app')]


    public $email;
    public $password;

    protected $rules = [
        'email' => 'required|email',
        'password' => 'required|min:6',
    ];

    public function login(){
        $this->validate();
        if(Auth::attempt(['email' => $this->email, 'password' => $this->password])){
            session()->flash('success', 'Login successful');
            return redirect()->route('admin-dashboard');
        }else{
            session()->flash('error', 'Invalid email or password');
        }
    }
    public function render()
    {
        return view('livewire.auth.login');
    }
}
