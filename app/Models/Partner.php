<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Partner extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'company', 'responsible_person', 'role', 'contact_person', 'email',  'country', 'status'
    ];

    protected $dates = ['deleted_at'];
}
