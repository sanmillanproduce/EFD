<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $fillable = [
        'classification_id', 'subclassification_id', 'subarea_id', 'warehouse_id', 'name', 'slug', 'job', 'email',
    ];
    public function classification() {
        return $this->belongsTo(Classification::class);
    }
    public function subclassification() {
        return $this->belongsTo(Subclassification::class);
    }
    public function subarea() {
        return $this->belongsTo(Subarea::class);
    }
    public function warehouse() {
        return $this->belongsTo(Warehouse::class);
    }
}
