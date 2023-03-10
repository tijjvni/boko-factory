<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

use App\Models\MaterialType;

class MaterialFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            "name" => $this->faker->word,
            "quantity" => $this->faker->randomDigit,
            "type_id" => MaterialType::factory()->create()->id
        ];
    }
}
