<?php

namespace App\Http\Livewire\Auth;

use Livewire\Component;

class Signup extends Component
{

    public $email;
    public $contactNumber;
    public $password;
    public $password_confirmation;

    protected $rules = [
        'email' => 'required|email',
        'contactNumber' => 'required',
        'password' => 'required|confirmed',
    ];

    protected $messages = [
        'email.required' => 'Email is required',
        'email.email' => 'Must be a valid email',
        'contactNumber.required' => 'Contact number is required',
        'password.required' => 'Password is required',
        'password.confirmed' => 'Password does not match!',
    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function store()
    {

        $this->validate([
            'email' => 'required|email',
            'contactNumber' => 'required',
            'password' => 'required|confirmed',
        ]);

    }

    public function render()
    {
        return view('livewire.auth.signup');
    }
}
