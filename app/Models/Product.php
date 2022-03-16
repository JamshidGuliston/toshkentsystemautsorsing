<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'product_name',
        'size_name_id',
        'category_name_id',
        'norm_cat_id',
        'product_image',
        'div',
        'sort',
        'term',
        'product_oqsil',
        'product_yog',
        'product_uglevot',
        'product_ener',
        'hide'
    ];

    public function shop(){
        return $this->belongsToMany(Shop::class, 'shop_product');
    }
}
