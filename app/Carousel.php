<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Carousel extends Model
{
    protected $fillable = [
        'name', 'slug', 'subarea_id', 'file', 'url'
    ];
}
