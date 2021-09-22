<?php

namespace App\Http\Livewire\Hospital;

use App\Models\Hospital;
use Livewire\Component;

class HospitalDetail extends Component
{
    public Hospital $hospital;

    public function mount($id)
    {
        $this->hospital = Hospital::findOrFail($id);
    }

    public function render()
    {
        return view('livewire.hospital.detail');
    }
}
