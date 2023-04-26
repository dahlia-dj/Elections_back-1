<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\support\str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Participant>
 */
class ParticipantFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "nom" => $this->faker->name(),
            "num_cni" =>Str::random(10),
            "age" => rand(21,100),
            "id_region" => rand(1,20),
            "login" => Str::random(10),
            "pwd" => Str::random(15),
            "email" =>$this->faker->email(),
            "tel" => $this->faker->phoneNumber(),
        ];
    }
}
