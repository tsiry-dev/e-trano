<?php

namespace App\Repositories\Houses;

use App\Models\House;
use Illuminate\Contracts\Database\Eloquent\Builder;
use Illuminate\Pagination\LengthAwarePaginator;

class HouseReposirory
{
    public function findAllWithPaginate(int $paginate): LengthAwarePaginator
    {
        $houses = House::with([
            'gallery' => function($query) {
                $query->where('is_cover', true)->limit(1);
            },
            // 'localisation'
        ])->paginate($paginate);
        return $houses;
    }
}
