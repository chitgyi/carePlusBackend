<?php

namespace App\Http\Livewire\Hospital;

use App\Models\Hospital;
use Livewire\Component;
use Livewire\WithFileUploads;

class HospitalEdit extends Component
{

    use WithFileUploads;

    public $photo;
    public Hospital $hospital;

    protected $rules = [
        'hospital.name' => 'required|max:255',
        'hospital.description' => 'required|string',
        'hospital.address' => 'required|max:255',
        'hospital.city' => 'required|max:255',
        'hospital.state' => 'required|max:255',
        'hospital.zip' => 'nullable|max:255',
        'hospital.phone' => 'required|numeric',
        'hospital.email' => 'email|max:255|nullable',
        'hospital.website' => 'url|max:255|nullable',
        'hospital.longitude' => 'required|numeric',
        'hospital.latitude' => 'required|numeric',
        'hospital.type' => 'nullable|string',
        'photo' => 'nullable|image|max:2028',
    ];

    protected $messages = [
        'hospital.name.required' => 'Please enter the hospital name.',
        'hospital.name.max' => 'Hospital name cannot be longer than 255 characters.',
        'hospital.description.required' => 'Please enter the hospital description.',
        'hospital.description.string' => 'Hospital description must be a string.',
        'hospital.address.required' => 'Please enter the hospital address.',
        'hospital.address.max' => 'Hospital address cannot be longer than 255 characters.',
        'hospital.city.required' => 'Please enter the hospital city.',
        'hospital.city.max' => 'Hospital city cannot be longer than 255 characters.',
        'hospital.state.required' => 'Please enter the hospital state.',
        'hospital.state.max' => 'Hospital state cannot be longer than 255 characters.',
        'hospital.zip.max' => 'Hospital zip cannot be longer than 255 characters.',
        'hospital.phone.required' => 'Please enter the hospital phone number.',
        'hospital.phone.numeric' => 'Hospital phone number must be a number.',
        'hospital.email.email' => 'Hospital email address is not valid.',
        'hospital.email.max' => 'Hospital email address cannot be longer than 255 characters.',
        'hospital.website.url' => 'Hospital website address is not valid.',
        'hospital.website.max' => 'Hospital website address cannot be longer than 255 characters.',
        'hospital.longitude.required' => 'Please enter the hospital longitude.',
        'hospital.longitude.numeric' => 'Hospital longitude must be a number.',
        'hospital.latitude.required' => 'Please enter the hospital latitude.',
        'hospital.latitude.numeric' => 'Hospital latitude must be a number.',
        'hospital.type.required' => 'Please enter the hospital type.',
        'hospital.type.string' => 'Hospital type must be a string.',
        'photo.max' => 'Hospital image cannot be larger than 2018 pixels.',
        'photo.image' => 'Hospital image must be an image.',
    ];

    public function mount($id)
    {
        $this->hospital = Hospital::findOrFail($id);
    }

    public function render()
    {
        return view('livewire.hospital.edit');
    }

    public function update()
    {
        $this->validate();
        if ($this->photo) {
            if ($this->hospital->image && $this->hospital->image != '/uploads/dummy.jpg') {
                unlink(public_path($this->hospital->image));
            }
            $this->hospital->image = '/uploads/' . $this->photo->store('photos/hospitals', 'public_uploads');
        }
        $this->hospital->save();
        return redirect()->route('hospitals');
    }
}
