<?php

namespace Database\Seeders;

use App\Models\House;
use App\Models\HouseGallery;
use App\Models\HouseLocalisation;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(10)->create();
        HouseLocalisation::factory(40)->create();

        // Générer les maisons
             $houses = House::all();

        foreach ($houses as $house) {
            $imageCount = rand(5, 12); // entre 5 et 12 images
            $coverIndex = rand(0, $imageCount - 1); // index de l'image de couverture

            for ($i = 0; $i < $imageCount; $i++) {
                HouseGallery::factory()->create([
                    'house_id' => $house->id,
                    'is_cover' => $i === $coverIndex,
                ]);
            }
        }
    }
}
