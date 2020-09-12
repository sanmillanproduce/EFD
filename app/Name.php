<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Name extends Model
{
    protected $fillable = [
        'warehouse_name','product_id', 'name', 'slug'
    ];
    public function product() {
        return $this->belongsTo(Product::class);
    }
}
