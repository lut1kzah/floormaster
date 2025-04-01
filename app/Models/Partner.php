<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Partner extends Model
{
    protected $fillable = [
        'id',
        'name',
        'director',
        'email',
        'phone',
        'address',
        'rating',
        'inn',
        'partner_type_id',
    ];
    protected $hidden = [
        'partner_type_id',
    ];
}
