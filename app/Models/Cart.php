<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Trackable;

class Cart extends Model
{
    use HasFactory;

    public const PRICE_TYPE_USD = 'USD';
    public const PRICE_TYPE_IDR = 'IDR';


    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    public function procurement()
    {
        return $this->belongsTo(Procurement::class);
    }
}
