<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Facility extends Model
{
    use HasFactory;

    protected $table = "facilities";

    protected $fillable = [
        'name'
    ];

    public function room() {
        return $this->belongsToMany(Room::class, 'facility_room', 'facility_id', 'room_id');
    }
}
