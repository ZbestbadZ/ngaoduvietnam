<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tour extends Model
{
    use HasFactory;

    protected $table = "tours";

    protected $fillable = [
        'name', 'slug', 'duration', 'image_seo', 'price', 'address', 'overview', 'active'
    ];

    public function tourBookings()
    {
        return $this->hasMany(TourBooking::class, 'tour_id');
    }

    public function categories()
    {
        return $this->belongsToMany(Category::class, 'category_tour', 'tour_id', 'category_id');
    }

    public function itineraries()
    {
        return $this->hasMany(Itinerary::class, 'tour_id');
    }

    public function destination()
    {
        return $this->belongsTo(Destination::class, 'destination_id');
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
