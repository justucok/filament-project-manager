<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class DepartmentFactory extends Factory
{
    public function definition(): array
    {
        // Kita gunakan fixed list agar terlihat profesional di demo
        static $departments = [
            'IT', 'HR', 'Finance', 'Operations', 'Engineering', 'Management'
        ];
        static $index = 0;

        return [
            'name' => $departments[$index++ % count($departments)],
        ];
    }
}
