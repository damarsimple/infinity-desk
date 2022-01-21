<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Trackable;

class Promo extends Model
{
    use HasFactory, Trackable;

    public function procurements()
    {
        return $this->hasMany(Procurement::class);
    }
}
