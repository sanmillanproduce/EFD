<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{

    protected $fillable = [
        'classification_id', 'subclassification_id', 'subarea_id', 'warehouse_id', 'kit_id', 'id_article', 'name_product_kit', 'slug', 'sku', 'specifications', 'file', 'price', 'unit_price', 'price_discount', 'sure', 'type', 'special price', 'currency'
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
    public function kits() {
        return $this->hasMany(Kit::class);
    }
    public function names() {
        return $this->hasMany(Name::class);
    }
}
