<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Admin extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $table = "admins";
    protected $guard = 'admin';

    protected $fillable = [
        'name', 'contact_name', 'address', 'bank_account', 'phone', 'email', 'password'
    ];

    protected $hidden = [
        'password'
    ];
}
