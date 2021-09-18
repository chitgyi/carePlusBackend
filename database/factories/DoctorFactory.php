<?php

namespace Database\Factories;

use App\Models\Doctor;
use Illuminate\Database\Eloquent\Factories\Factory;

class DoctorFactory extends Factory
{

    protected $model = Doctor::class;


    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'email' => $this->faker->unique()->safeEmail,
            'phone' => $this->faker->phoneNumber,
            'education' => $this->faker->lexify('???'),
            'address' => $this->faker->lexify('????????'),
            'image' => '/uploads/dummy.jpg',
        ];
    }
}
