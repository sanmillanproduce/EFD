<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Year extends Model
{
    protected $fillable = [
        'name'
    ];
    public function filmolgraphies() {
        return $this->hasMany(Filmography::class);
    }
}
