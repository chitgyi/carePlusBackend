<?php

namespace App\Http\Livewire\User;

use App\Models\User;
use Livewire\Component;
use Livewire\WithFileUploads;

class UserEdit extends Component
{
    use WithFileUploads;
    public $photo;
    public User $user;

    protected $rules = [
        'user.name' => 'required',
        'user.email' => 'required|email',
        'user.phone' => 'string|max:13',
        'user.address' => 'string',
        'photo' => 'image|max:1024|nullable',
    ];

    public function mount($id)
    {
        $this->user = User::find($id);
    }

    public function render()
    {
        return view('livewire.user.edit');
    }

    public function update()
    {
        $this->validate();
        if ($this->photo) {
            if ($this->user->image && $this->user->image != '/uploads/dummy.jpg') {
                unlink(public_path($this->user->image));
            }
            $this->user->image = '/uploads/' . $this->photo->store('photos/users', 'public_uploads');
        }
        $this->user->save();
        return redirect()->route('users');
    }
}
