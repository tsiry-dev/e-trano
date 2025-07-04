<?php

namespace App\Actions\House;

use App\Services\Houses\HouseService;

class HouseAction
{
    /**
     * Create a new class instance.
     */
    public function __construct(
        protected HouseService $houseService
    ) {}

    public function handle()
    {
        return $this->houseService->getAllWithPaginate();
    }
}
