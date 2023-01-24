<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

use App\Models\ProductType;
class ProductFactory extends Factory
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
            "quantity" => $this->faker->randomDigit(),
            "price" => $this->faker->randomDigit(),
            "type_id" => ProductType::factory()->create()->id
        ];
    }
}
