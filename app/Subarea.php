<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subarea extends Model
{
    protected $fillable = [
        'classification_id', 'subclassification_id', 'name', 'slug', 'order', 'png', 'gif'
    ];

    public function classification() {
        return $this->belongsTo(Classification::class);
    }
    public function subclassification() {
        return $this->belongsTo(Subclassification::class);
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
