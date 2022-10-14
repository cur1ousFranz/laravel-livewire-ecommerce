<?php

namespace App\Http\Livewire\Auth;

use App\Models\User;
use Livewire\Component;

class Signup extends Component
{

    public $email;
    public $contactNumber;
    public $password;
    public $password_confirmation;

    protected $rules = [
        'email' => 'required|email|unique:users,email',
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

        $user = User::create([
            'email' => $this->email,
            'contact' => $this->contactNumber,
            'password' => bcrypt($this->password),
            'role' => 'customer',
        ]);

        $customer = $user->customer()->create();
        $customer->address()->create();

        $this->reset();
        $this->dispatchBrowserEvent('stored', [
            'title' => 'Registered Successfully!',
            'icon' => 'success',
            'iconColor' => 'green',
        ]);

    }

    public function render()
    {
        return view('livewire.auth.signup');
    }
}
