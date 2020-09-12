<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Warehouse extends Model
{
    protected $fillable = [
        'classification_id', 'subclassification_id', 'subarea_id', 'name', 'slug', 'direction', 'phone_1', 'phone_2', 'file', 'email'
    ];
    public function classifications() {
        return $this->hasMany(Classification::class);
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
