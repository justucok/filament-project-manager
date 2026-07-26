<?php

namespace Database\Factories;

use App\Models\Employee;
use App\Models\Soltem;
use Illuminate\Database\Eloquent\Factories\Factory;

class SoltemRequestFactory extends Factory
{
    public function definition(): array
    {
        return [
            // request_number TIDAK di-set — auto-generated oleh booted()
            'employee_id'   => Employee::inRandomOrder()->first()->id,
            'ticket_number' => 'TKT-' . fake()->numerify('####'),
            'client_name'   => fake()->company(),
            'soltem_id'     => Soltem::inRandomOrder()->first()->id,
            'status'        => fake()->randomElement(['pending', 'approved', 'rejected', 'returned']),
            'request_date'  => fake()->dateTimeBetween('-6 months', 'now')->format('Y-m-d'),
            'notes'         => fake()->optional(0.4)->sentence(),
        ];
    }
}
