<?php

namespace Database\Factories;

use App\Models\Department;
use Illuminate\Database\Eloquent\Factories\Factory;

class PositionFactory extends Factory
{
    // Posisi realistis per departemen
    private static array $positionMap = [
        'IT'          => ['System Administrator', 'Network Engineer', 'Software Developer'],
        'HR'          => ['HR Manager', 'Recruiter', 'Payroll Staff'],
        'Finance'     => ['Finance Manager', 'Accountant', 'Tax Specialist'],
        'Operations'  => ['Operations Manager', 'Field Technician', 'Logistics Staff'],
        'Engineering' => ['Project Engineer', 'Site Supervisor', 'Technical Support'],
        'Management'  => ['Director', 'Administrator', 'Secretary'],
    ];

    public function definition(): array
    {
        $dept = Department::inRandomOrder()->first();
        $positions = self::$positionMap[$dept->name] ?? ['Staff', 'Supervisor', 'Manager'];

        return [
            'department_id' => $dept->id,
            'name'          => fake()->randomElement($positions),
        ];
    }
}
