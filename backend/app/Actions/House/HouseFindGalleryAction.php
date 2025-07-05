<?php

namespace App\Actions\House;

use App\Models\House;
use App\Repositories\Houses\HouseReposirory;

class HouseFindGalleryAction
{
    /**
     * Create a new class instance.
     */
    public function __construct(
        private HouseReposirory $houseReposirory
    ) {}

    public function handle(string $slug):House|null
    {
        $house = $this->houseReposirory->findBySlug($slug);
        return $house;
    }
}
