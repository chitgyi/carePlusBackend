<?php

namespace App\Http\Livewire\User;

use App\Models\User;
use Livewire\Component;

class UserDetail extends Component
{
    public User $user;

    public function mount($id)
    {
        $this->user = User::find($id);
    }

    public function render()
    {
        return view('livewire.user.detail', [
            'user' => $this->user,
        ]);
    }
}
