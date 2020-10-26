<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class formation extends Model
{
    protected $fillable=[
       'tiitre',
        'prix',
        'description',
        'image',
    ];
}
