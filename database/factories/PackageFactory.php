<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PackageFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'price' => $this->faker->randomFloat(2, 500, 2000),
            'billing_type' => $this->faker->randomElement(['monthly', 'annually']),
            'storage' => $this->faker->numberBetween(250, 1000),
            'projects' => $this->faker->numberBetween(250, 1000),
            'tasks' => $this->faker->numberBetween(250, 1000),
            'users' => $this->faker->numberBetween(250, 1000),
            'modules' => $this->faker->randomElements(['projects', 'tasks', 'gantt', 'timesheet', 'team_members', 'clients', 'invoices', 'payments']),
        ];
    }
}
