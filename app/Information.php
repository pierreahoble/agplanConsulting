<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class information extends Model
{
    
    protected $fillable =[
        'titre',
        'type',
        'description',
        'image'
    ];
}
