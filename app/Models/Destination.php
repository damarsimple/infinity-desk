<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Sanctum\HasApiTokens;

class Destination extends Model
{
    use HasFactory, HasApiTokens;

    protected $fillable = [
        'name',
        'phone',
        'address_label',
        'city_district',
        'address',
        'Note for Courier',
    ];
}
