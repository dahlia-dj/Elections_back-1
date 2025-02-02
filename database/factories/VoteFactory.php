<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Vote>
 */
class VoteFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [

            'date' => $this->faker->date($format = 'Y-m-d'),
            'id_election' => 1,
            'id_bulletin'=> rand(1,5),
            'id_participant'=> rand(1,200),
        ];
    }
}
