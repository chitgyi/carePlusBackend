<?php

namespace App\Http\Livewire\Doctor;

use App\Models\Doctor;
use Livewire\Component;
use Livewire\WithFileUploads;

class DoctorEdit extends Component
{
    use WithFileUploads;

    public $photo;
    public Doctor $doctor;

    protected $rules = [
        'doctor.name' => 'required',
        'doctor.email' => 'required|email',
        'doctor.phone' => 'required|string',
        'doctor.address' => 'required|string',
        'doctor.education' => 'required|string',
        'photo' => 'image|max:2014|nullable',
    ];

    protected $messages = [
        'doctor.name.required' => 'Name is required',
        'doctor.email.required' => 'Email is required',
        'doctor.email.email' => 'Email is not valid',
        'doctor.phone.required' => 'Phone is required',
        'doctor.phone.string' => 'Phone is not valid',
        'doctor.address.required' => 'Address is required',
        'doctor.address.string' => 'Address is not valid',
        'doctor.education.required' => 'Education is required',
        'doctor.education.string' => 'Education is not valid',
        'photo.image' => 'Photo is not valid',
        'photo.max' => 'Photo is too large',
    ];

    public function mount($id)
    {
        $this->doctor = Doctor::find($id);
    }

    public function render()
    {
        return view('livewire.doctor.edit');
    }

    public function update()
    {
        $this->validate();
        if ($this->photo) {
            if ($this->doctor->image && $this->doctor->image != '/uploads/dummy.jpg') {
                unlink(public_path($this->doctor->image));
            }
            $this->doctor->image = '/uploads/' . $this->photo->store('photos/doctors', 'public_uploads');
        }
        $this->doctor->save();
        return redirect()->route('doctors');
    }
}
