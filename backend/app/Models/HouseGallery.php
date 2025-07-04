<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class HouseGallery extends Model
{
    /** @use HasFactory<\Database\Factories\HouseGalleryFactory> */
    use HasFactory;


    public function house(): BelongsTo
    {
        return $this->belongsTo(House::class);
    }
}
