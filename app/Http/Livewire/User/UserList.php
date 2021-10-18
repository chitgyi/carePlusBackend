<?php

namespace App\Http\Livewire\User;

use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;

class UserList extends Component
{
    use WithPagination;
    private $perPage = 50;
    public function render()
    {
        $users = cache()
            ->remember(
                'users-' . $this->page,
                now()->addMilliseconds(env('CACHE_TIMEOUT', 1000)),
                fn () =>  User::paginate($this->perPage)
            );
        return view('livewire.user.index', compact('users'));
    }

    public function delete(User $user)
    {
        $user->delete();
        cache()->forget('users-' . $this->page);
    }
}
