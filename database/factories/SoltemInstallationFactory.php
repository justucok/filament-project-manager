<?php

namespace Database\Factories;

use App\Models\Employee;
use App\Models\SoltemRequest;
use Illuminate\Database\Eloquent\Factories\Factory;

class SoltemInstallationFactory extends Factory
{
    public function definition(): array
    {
        $request = SoltemRequest::where('status', 'approved')->inRandomOrder()->first();

        return [
            // installation_number TIDAK di-set — auto-generated oleh booted()
            'employee_id'          => Employee::inRandomOrder()->first()->id,
            'soltem_request_id'    => $request->id,
            'ticket_project'       => 'PRJ-' . fake()->numerify('####'),
            'client_name'          => $request->client_name,
            'installation_date'    => fake()->dateTimeBetween($request->request_date, 'now')->format('Y-m-d'),
            'installation_address' => fake()->address(),
            'case_number'          => 'CASE-' . fake()->numerify('####'),
            'category'             => fake()->randomElement(['New Installation', 'Relocation', 'Replacement', 'Upgrade']),
            'access'               => fake()->randomElement(['Fiber', '4G LTE', 'Hybrid']),
            'pic_name'             => fake()->name(),
            'pic_contact'          => '0813' . fake()->numerify('########'),
            'complaint'            => fake()->optional(0.3)->sentence(),
            'notes'                => fake()->optional(0.3)->sentence(),
        ];
    }
}
