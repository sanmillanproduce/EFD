<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    protected $fillable = [
        'news_id','name', 'slug', 'file'
    ];
    public function news() {
        return $this->belongsTo(News::class);
    }
}
