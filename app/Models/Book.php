<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    //id以外の「別の主キー名」を設定する
    protected $guarded = [
        'id'
    ];

    public function reviews() { 

        return $this->hasMany(\App\Models\ProductReview::class, 'product_id', 'id');

    }
}
