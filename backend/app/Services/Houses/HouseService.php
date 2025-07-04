<?php

namespace App\Services\Houses;

use App\Repositories\Houses\HouseReposirory;

class HouseService
{
    /**
     * Create a new class instance.
     */
    public function __construct(
       protected HouseReposirory $houseReposirory
    ) {}

    public function getAllWithPaginate()
    {
         //FILTER

         $houses = $this->houseReposirory->findAllWithPaginate(10);

         return $houses;
    }
}
