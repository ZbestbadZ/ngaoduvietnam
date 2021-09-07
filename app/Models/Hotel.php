<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hotel extends Model
{
    use HasFactory;

    protected $table = "hotels";

    protected $fillable = [
        'name','description','address','rating','city', 'zip', 'latitude', 'longitude'
    ];

    public function rooms() {
        return $this->hasMany(Room::class, 'hotel_id');
    }

    public function hotelBookings() {
        return $this->hasMany(HotelBooking::class, 'hotel_id');
    }

    public function amenities() {
        return $this->belongsToMany(Amenity::class, 'amenity_hotel', 'hotel_id', 'amenity_id');
    }

    public function reviews()
    {
        return $this->morphMany(Review::class, 'reviewable');
    }

    public function images()
    {
        return $this->morphMany(Image::class, 'imageable');
    }
}
