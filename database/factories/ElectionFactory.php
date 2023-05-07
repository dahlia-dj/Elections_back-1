<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Carbon\Carbon;
use Illuminate\support\str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Election>
 */
class ElectionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "description"=>Str::random(300),
            "label" =>Str::random(15),
            "statut"=>Str::random(10),
            "date" => Carbon::createFromFormat('Y-m-d', $this->faker->date('Y-m-d', '2000-01-01')),
        ];
    }
}

