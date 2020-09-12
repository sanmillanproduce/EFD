<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subclassification extends Model
{
    protected $fillable = [
        'classification_id', 'name', 'slug', 'order', 'png', 'gif'
    ];

    public function classification() {
        return $this->belongsTo(Classification::class);
    }
    public function subareas() {
        return $this->hasMany(Subarea::class);
    }
    public function warehouse() {
        return $this->belongsTo(Warehouse::class);
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
