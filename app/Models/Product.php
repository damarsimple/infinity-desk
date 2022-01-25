<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'code',
        'serial',
        'materials',
        'images',
        'colors',
        'sizes',
        'types',
        'description',
        'seller_id',
        'price',
        'price_type',
        'stock',
    ];

    protected $casts = [
        'materials' => 'array',
        'images' => 'array',
        'colors' => 'array',
        'sizes' => 'array',
        'types' => 'array',
    ];

    public function seller()
    {
        return $this->belongsTo(User::class);
    }

    public function reviews()
    {
        return $this->hasMany(Review::class);
    }
}
