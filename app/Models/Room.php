<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    use HasFactory;

    protected $table = "rooms";

    protected $fillable = [
        'room_type', 'room_code', 'area', 'floor', 'bed', 'extra_bed', 'price', 'description', 'status'
    ];

    public function hotel()
    {
        return $this->belongsTo(Hotel::class, 'hotel_id');
    }

    public function facilities()
    {
        return $this->belongsToMany(Facility::class, 'facility_room', 'facility_id', 'room_id');
    }

    public function hotelBookings()
    {
        return $this->belongsToMany(HotelBooking::class, 'hotel_booking_room', 'hotel_booking_id', 'room_id');
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
