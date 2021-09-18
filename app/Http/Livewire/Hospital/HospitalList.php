<?php

namespace App\Http\Livewire\Hospital;

use App\Models\Hospital;
use Livewire\Component;

class HospitalList extends Component
{
    public function render()
    {
        $hospitals = Hospital::latest()->get();
        return view('livewire.hospital.index', compact('hospitals'));
    }

    public function delete(Hospital $hospital)
    {
        if ($hospital->image && $hospital->image != '/uploads/dummy.jpg') {
            unlink(public_path($hospital->image));
        }
        $hospital->delete();
    }
}
