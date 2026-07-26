<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class SoltemFactory extends Factory
{
    // Status hanya 3 nilai sesuai enum di migration
    private static array $validStatus = ['ready', 'out', 'used'];

    public function definition(): array
    {
        return [
            'name'               => 'NEA-' . strtoupper(fake()->bothify('??-##')),
            'cpe_type'           => fake()->randomElement([
                                        'MIKROTIK RB750r2', 'MIKROTIK hAP ac2',
                                        'TP-Link TL-MR6400', 'Huawei B315'
                                    ]),
            'cpe_registration'   => 'CPE-' . fake()->numerify('####-####'),
            'modem_type'         => fake()->randomElement(['ZTE MF79', 'Huawei E8372', 'Sierra RV55']),
            'modem_registration' => 'MDM-' . fake()->numerify('####-####'),
            'gsm_number'         => '0812' . fake()->numerify('########'),
            'data_quota'         => fake()->randomElement(['10 GB', '20 GB', '50 GB', '100 GB', 'Unlimited']),
            'quota_expiry_date'  => fake()->dateTimeBetween('now', '+1 year')->format('Y-m-d'),
            'sim_expiry_date'    => fake()->dateTimeBetween('+6 months', '+2 years')->format('Y-m-d'),
            'status'             => 'ready', // default ready; seeder akan override sebagian
            'notes'              => fake()->optional(0.3)->sentence(),
        ];
    }

    // State untuk override status
    public function out(): static
    {
        return $this->state(['status' => 'out']);
    }

    public function used(): static
    {
        return $this->state(['status' => 'used']);
    }
}
