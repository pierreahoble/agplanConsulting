<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class bien extends Model
{
    protected $fillable=[
        'nom',
        'type',
        'prix',
        'quartier',
        'description',
        'image'
    ];
}
