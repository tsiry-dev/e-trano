<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class HouseLocalisation extends Model
{
    /** @use HasFactory<\Database\Factories\HouseLocalisationFactory> */
    use HasFactory;

    public function house(): BelongsTo
    {
        return $this->belongsTo(House::class);
    }
}
