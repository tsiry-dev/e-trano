<?php

namespace Database\Factories;

use App\Models\House;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\HouseGallery>
 */
class HouseGalleryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

        $houses = House::all();

        return [
            'house_id' => $houses->random()->id,
            'picture' => fake()->imageUrl(),
            'is_cover' => fake()->boolean(),
            'description' => fake()->text(),
        ];
    }
}
