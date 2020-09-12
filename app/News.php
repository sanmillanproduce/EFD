<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    protected $fillable = [
        'name', 'slug', 'body'
    ];
    public function images() {
        return $this->hasMany(Image::class);
    }
}
