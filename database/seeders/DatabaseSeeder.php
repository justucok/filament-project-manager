<?php

namespace Database\Seeders;

use App\Models\Department;
use App\Models\Employee;
use App\Models\Position;
use App\Models\Soltem;
use App\Models\SoltemInstallation;
use App\Models\SoltemRequest;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // Prevent duplicate seeding if run multiple times
        if (User::where('email', 'admin@demo.com')->exists()) {
            return;
        }

        // ─── 1. Departments (6 fixed) ────────────────────────────────────────
        $deptNames = ['IT', 'HR', 'Finance', 'Operations', 'Engineering', 'Management'];
        foreach ($deptNames as $name) {
            Department::create(['name' => $name]);
        }

        // ─── 2. Positions (3 per dept = 18 total) ────────────────────────────
        $positionMap = [
            'IT'          => ['System Administrator', 'Network Engineer', 'Software Developer'],
            'HR'          => ['HR Manager', 'Recruiter', 'Payroll Staff'],
            'Finance'     => ['Finance Manager', 'Accountant', 'Tax Specialist'],
            'Operations'  => ['Operations Manager', 'Field Technician', 'Logistics Staff'],
            'Engineering' => ['Project Engineer', 'Site Supervisor', 'Technical Support'],
            'Management'  => ['Director', 'Administrator', 'Secretary'],
        ];
        Department::all()->each(function ($dept) use ($positionMap) {
            foreach ($positionMap[$dept->name] as $posName) {
                Position::create(['department_id' => $dept->id, 'name' => $posName]);
            }
        });

        // ─── 3. Employees (20 orang) ─────────────────────────────────────────
        Employee::factory()->count(20)->create();

        // ─── 4. Admin User ───────────────────────────────────────────────────
        User::create([
            'name'        => 'Admin Demo',
            'email'       => 'admin@demo.com',
            'password'    => 'demo1234',   // otomatis di-hash oleh cast 'hashed'
            'employee_id' => Employee::first()->id,
            'is_admin'    => true,
            'is_active'   => true,
        ]);

        // ─── 5. Soltems (25 unit) ────────────────────────────────────────────
        // 15 ready (untuk request baru), 5 out, 5 used
        Soltem::factory()->count(15)->create(['status' => 'ready']);
        Soltem::factory()->count(5)->out()->create();
        Soltem::factory()->count(5)->used()->create();

        // ─── 6. SoltemRequests (30 request) ──────────────────────────────────
        // Tidak set request_number — auto-generated oleh booted()
        $employees     = Employee::all();
        $readySoltems  = Soltem::where('status', 'ready')->get();
        $statuses      = ['pending', 'approved', 'rejected', 'returned'];

        for ($i = 0; $i < 30; $i++) {
            SoltemRequest::create([
                'employee_id'  => $employees->random()->id,
                'ticket_number'=> 'TKT-' . str_pad($i + 1, 4, '0', STR_PAD_LEFT),
                'client_name'  => fake()->company(),
                'soltem_id'    => $readySoltems->random()->id,
                'status'       => $statuses[$i % count($statuses)],   // distribusi merata
                'request_date' => fake()->dateTimeBetween('-6 months', 'now')->format('Y-m-d'),
                'notes'        => fake()->optional(0.4)->sentence(),
            ]);
        }

        // ─── 7. SoltemInstallations (10 instalasi) ───────────────────────────
        // Hanya buat untuk request yang 'approved'
        // booted() di model akan otomatis update soltem status → 'used'
        $approvedRequests = SoltemRequest::where('status', 'approved')->get();

        $approvedRequests->take(10)->each(function ($request) use ($employees) {
            SoltemInstallation::create([
                // installation_number auto-generated oleh booted()
                'employee_id'          => $employees->random()->id,
                'soltem_request_id'    => $request->id,
                'ticket_project'       => 'PRJ-' . fake()->numerify('####'),
                'client_name'          => $request->client_name,
                'installation_date'    => fake()->dateTimeBetween($request->request_date, 'now')->format('Y-m-d'),
                'installation_address' => fake()->address(),
                'case_number'          => 'CASE-' . fake()->numerify('####'),
                'category'             => fake()->randomElement(['New Installation', 'Relocation', 'Replacement']),
                'access'               => fake()->randomElement(['Fiber', '4G LTE', 'Hybrid']),
                'pic_name'             => fake()->name(),
                'pic_contact'          => '0813' . fake()->numerify('########'),
                'complaint'            => fake()->optional(0.3)->sentence(),
                'notes'                => fake()->optional(0.3)->sentence(),
            ]);
        });
    }
}
