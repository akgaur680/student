<?php

namespace Database\Factories;

use App\Models\Student;
use Illuminate\Database\Eloquent\Factories\Factory;

class StudentFactory extends Factory
{
    protected $model = Student::class;

    public function definition(): array
    {
        return [
            'name' => $this->faker->name,
            'father_name' => $this->faker->firstName,
            'dob' => $this->faker->date('Y-m-d', '2005-08-06'),
            'class' => $this->faker->randomElement(['IX', 'X', 'XI', 'XII']),
            'stream' => $this->faker->randomElement(['Medical', 'Non-Medical', 'Commerce', 'Arts']),
        ];
    }
}
