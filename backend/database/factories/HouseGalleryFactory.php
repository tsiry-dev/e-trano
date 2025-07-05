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
            'picture' => 'https://i.pinimg.com/736x/3c/3b/0b/3c3b0b3df0405be64b39ce9586350305.jpg',
            'is_cover' => fake()->boolean(),
            'description' => fake()->text(),
        ];
    }
}
