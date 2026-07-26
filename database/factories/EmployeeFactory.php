<?php

namespace Database\Factories;

use App\Models\Department;
use App\Models\Position;
use Illuminate\Database\Eloquent\Factories\Factory;

class EmployeeFactory extends Factory
{
    public function definition(): array
    {
        $dept     = Department::inRandomOrder()->first();
        $position = Position::where('department_id', $dept->id)->inRandomOrder()->first()
                    ?? Position::inRandomOrder()->first();

        return [
            // department_id & position_id adalah string di migration
            'department_id' => (string) $dept->id,
            'position_id'   => (string) $position->id,
            'first_name'    => fake()->firstName(),
            'last_name'     => fake()->lastName(),
            'date_hire'     => fake()->dateTimeBetween('-5 years', 'now')->format('Y-m-d'),
        ];
    }
}
