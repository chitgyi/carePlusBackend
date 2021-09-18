<?php

namespace App\Http\Livewire\Doctor;

use App\Models\Doctor;
use Livewire\Component;

class DoctorList extends Component
{
    public function render()
    {
        $doctors = Doctor::latest()->get();
        return view('livewire.doctor.index', compact('doctors'));
    }
}
