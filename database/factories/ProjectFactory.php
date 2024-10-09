<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Project>
 */
class ProjectFactory extends Factory
{

    public function definition(): array
    {
        return [
            'title' => collect(fake()->words(5))->join(' '),
            'description' => "oi",
            'ends_at' => fake()->dateTimeBetween('now', '+ 3 days'),
            'status' => fake()->randomElement(['open', 'closed']),
            'tech_stack' => fake()->randomElements(['nodejs', 'react', 'javascript', 'vite', 'nextjs'], random_int(1, 5)),
            'created_by' => User::factory(),
        ];
    }
}
