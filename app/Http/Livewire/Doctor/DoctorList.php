<?php

namespace App\Http\Livewire\Doctor;

use App\Models\Doctor;
use Livewire\Component;
use Livewire\WithPagination;

class DoctorList extends Component
{
    use WithPagination;

    public function render()
    {
        $doctors = cache()
            ->remember(
                'doctors-' . $this->page,
                now()->addMinutes(env('CACHE_TIMEOUT', 1000)),
                fn () => Doctor::latest()->paginate(50),
            );
        return view('livewire.doctor.index', compact('doctors'));
    }

    public function delete(Doctor $doctor)
    {
        if ($doctor->image && $doctor->image != '/uploads/dummy.jpg') {
            unlink(public_path($doctor->image));
        }
        $doctor->delete();
        cache()->forget('doctors-' . $this->page);
    }
}
