<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Generator as Faker;
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
             'name' => $this ->faker->word,
             'description' => $this->faker->paragraph,
             'price' => $this->faker->numberBetween(100,1000),
             'category_id' => $this->faker->randomDigit,
             'subCategory_id' => $this->faker->randomDigit,
             'stock' => $this->faker->randomDigit,
             'discount' => $this->faker->numberBetween(2,40),

        ];
    }
}
