<?php

namespace App\Http\Livewire\Doctor;

use App\Models\Doctor;
use Livewire\Component;

class DoctorDetail extends Component
{
    public Doctor $doctor;

    public function mount($id)
    {
        $this->doctor = Doctor::findOrFail($id);
    }
    public function render()
    {
        return view('livewire.doctor.detail');
    }
}
