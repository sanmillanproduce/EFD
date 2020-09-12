<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Classification extends Model
{
    protected $fillable = [
        'name', 'slug', 'png', 'gif'
    ];
    public function warehouse() {
        return $this->belongsTo(Warehouse::class);
    }
    public function subclassifications() {
        return $this->hasMany(Subclassification::class);
    }
    public function subareas() {
        return $this->hasMany(Subarea::class);
    }
    public function kits() {
        return $this->hasMany(Kit::class);
    }
    public function products() {
        return $this->hasMany(Product::class);
    }
    public function employees() {
        return $this->hasMany(Employee::class);
    }
}
