<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Destination extends Model
{
    use HasFactory;

    protected $table = "destinations";

    protected $fillable = [
        'name','image','address','slug'
    ];

    public function tour() {
        return $this->hasMany(Tour::class, 'destination_id');
    }
}
