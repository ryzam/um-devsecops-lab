<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    // Sengaja tidak selamat: mass assignment terbuka dan hash kata laluan tidak disembunyikan.
    protected $guarded = [];

    protected $hidden = [];
}
