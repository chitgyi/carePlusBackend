<?php

namespace App\Http\Livewire\Auth;

use App\Models\Admin;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class Register extends Component
{
    public Admin $admin;
    public $confirm_password;

    protected $rules = [
        'admin.name' => 'required|string|max:255',
        'admin.email' => 'required|string|email|max:255|unique:admins,email',
        'admin.password' => 'required|string|min:6|same:confirm_password',
        'confirm_password' => 'required|string|min:6|same:confirm_password',
    ];

    public function mount()
    {
        $this->admin = new Admin;
    }

    public function render()
    {
        return view('livewire.auth.register')->layout('layouts.guest');
    }

    public function store()
    {
        $this->validate();
        $this->admin->password = Hash::make($this->admin->password);
        $this->admin->save();
        // session()->flush('success', 'You have successfully registered. Please login to continue.');
        return redirect()->route('admin.login');
    }
}
