<?php

namespace App\Http\Livewire\Auth;

use App\Models\Admin;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Login extends Component
{
    public $email;
    public $password;

    protected $rules = [
        'email' => 'required|email',
        'password' => 'required',
    ];

    public function mount()
    {
        if (Auth::guard('admin')->check()) {
            return redirect()->route('dashboard');
        }
    }

    public function render()
    {
        return view('livewire.auth.login')->layout('layouts.guest');
    }

    public function login()
    {
        $this->validate();
        $admin =  Auth::guard('admin')->attempt(['email' => $this->email, 'password' => $this->password]);
        if ($admin) {
            return redirect()->route('dashboard');
        } else {
            session()->flash('message', 'Invalid Credentials');
        }
    }
}
