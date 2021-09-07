<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;

    protected $table = "reviews";

    protected $fillable = [
        'reviewable_id','reviewable_type','title','rate','description'
    ];

    public function reviewable()
    {
        return $this->morphTo();
    }
}
