<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HotelBooking extends Model
{
    use HasFactory;

    protected $table = "hotel_bookings";

    protected $fillable = [
        'checkin','checkout','total_price','amount'
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function hotel() {
        return $this->belongsTo(Hotel::class, 'hotel_id');
    }

    public function room() {
        return $this->belongsToMany(Room::class, 'hotel_booking_room', 'hotel_booking_id','room_id');
    }
}
