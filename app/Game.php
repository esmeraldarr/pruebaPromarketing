<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    protected $fillable = [
        'name',
        'url',
        'description',
        'url_image',
        'status'
    ];
}
