<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Trackable;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable, Trackable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function reviews()
    {
        return $this->hasMany(Review::class);
    }

    public function procurements()
    {
        return $this->hasMany(Procurement::class);
    }

    public function sellerProcurements()
    {
        return $this->hasMany(Procurement::class, 'seller_id');
    }

    public function products()
    {
        return $this->hasMany(Product::class, 'seller_id');
    }
}
