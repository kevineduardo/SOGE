<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Classe extends Model
{
    protected $fillable = [
        'name', 'capacity', 'shift', 'school_id',
    ];
}
