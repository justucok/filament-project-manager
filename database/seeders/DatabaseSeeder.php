<?php

namespace Database\Seeders;

use App\Models\Employee;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        Employee::create([
            'first_name' => 'Admin',
            'last_name' => 'User',
            'position' => 'Administrator',
            'department' => 'Management',
            'date_hire' => now(),
        ]);

        User::factory()->create([
            'name' => 'User Admin',
            'email' => 'admin@mail.com',
            'password' => 'admin123',
            'employee_id' => 1, // Assuming employee_id is set to 0 for the admin user
            'is_admin' => true,
        ]);
    }
}
