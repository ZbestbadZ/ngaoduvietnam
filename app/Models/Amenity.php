<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Amenity extends Model
{
    use HasFactory;

    protected $table = "amenities";

    protected $fillable = [
        'name','price'
    ];

    public function hotels() {
        return $this->belongsToMany(Hotel::class, 'amenity_hotel', 'hotel_id', 'amenity_id');
    }
}
