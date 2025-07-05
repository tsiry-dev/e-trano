<?php

namespace App\Actions\House;

use App\Models\House;
use App\Repositories\Houses\HouseReposirory;

class HouseFindAction
{
    /**
     * Create a new class instance.
     */
    public function __construct(
        protected HouseReposirory $houseReposirory
    ) {}

    public function handle(string $slug): House|null
    {
        return $this->houseReposirory->findBySlug($slug);
    }
}
