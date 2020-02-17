<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class member extends Model
{
    protected $fillable = [
        'name',
        'email',
        'department',
        'roll',
        'home_dist',
    ];
}
