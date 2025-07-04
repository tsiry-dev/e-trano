<?php

namespace Database\Factories;

use App\Models\House;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\House>
 */
class HouseFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $title = $this->faker->sentence();

        return [
            'user_id' => User::all()->random()->id,
            'title' => $title,
            'slug' => \Illuminate\Support\Str::slug($title),
            'description' => $this->faker->text(),
            'address' => $this->faker->address(),
            'city' => $this->faker->city(),
            'price_per_month' => $this->faker->numberBetween(90000,3000000 ),
            'reservation_price' => $this->faker->numberBetween(10000, 40000),
            'status' => fake()->randomElement([House::DISPONIBLE,House::RENSERVER,House::DEJA_LOUER]),
        ];
    }
}
