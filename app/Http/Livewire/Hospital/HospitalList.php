<?php

namespace App\Http\Livewire\Hospital;

use App\Models\Hospital;
use Livewire\Component;
use Livewire\WithPagination;

class HospitalList extends Component
{
    use WithPagination;

    public function render()
    {
        $hospitals = cache()
            ->remember(
                'hospitals-' . $this->page,
                now()->addMinutes(env('CACHE_TIMEOUT', 1000)),
                fn () => Hospital::latest()->paginate(50),
            );
        return view('livewire.hospital.index', compact('hospitals'));
    }

    public function delete(Hospital $hospital)
    {
        if ($hospital->image && $hospital->image != '/uploads/dummy.jpg') {
            unlink(public_path($hospital->image));
        }
        $hospital->delete();
        cache()->forget('hospitals-' . $this->page);
    }
}
