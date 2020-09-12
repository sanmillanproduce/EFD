<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Filmography extends Model
{
    protected $fillable = [
        'year_id','name', 'slug', 'file'
    ];
    public function year() {
        return $this->belongsTo(Year::class);
    }
}
