<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Winery extends Model
{
    use HasFactory;

    
    protected $fillable = [
        'name',
        'born',
        'description',
        'email',
        'password',
        'phone',
        'vat',
        'address',
        'city',
        'country',
        'image_path'
    ];

    protected $hidden = [
        'password',
        'rememberToken'
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
