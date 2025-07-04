<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class House extends Model
{
    /** @use HasFactory<\Database\Factories\HouseFactory> */
    use HasFactory;

    const DISPONIBLE = 'disponible';
    const RENSERVER = 'réserver';
    const DEJA_LOUER = 'déja louer';


    public function gallery(): HasMany
    {
        return $this->hasMany(HouseGallery::class, 'house_id');
    }

    public function localisation()
    {
        return $this->hasOne(HouseLocalisation::class, 'house_id');
    }
}
