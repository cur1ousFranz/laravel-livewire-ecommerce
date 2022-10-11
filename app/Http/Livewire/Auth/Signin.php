<?php

namespace App\Http\Livewire\Auth;

use App\Models\User;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class Signin extends Component
{

    public $email;
    public $password;

    public $isLogin = false;

    protected $rules = [
        'email' => 'required|email',
        'password' => 'required',
    ];

    protected $messages = [
        'email.required' => 'Email is required',
        'email.email' => 'Must be a valid email',
        'password.required' => 'Password is required',
    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function store()
    {
        $user = User::where('email', $this->email)->first();

        if(Auth::attempt(['email' => $this->email, 'password' => $this->password])){
            if($user->role == "customer"){

                $this->reset();
                session()->regenerate();

                return redirect(route('home'));
                $this->emit('redirect', '/');
            }

            if($user->role == "seller"){

            }
        }else{
            session()->flash('error');
        }

    }

    public function render()
    {
        return view('livewire.auth.signin');
    }
}
