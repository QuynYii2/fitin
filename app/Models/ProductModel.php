<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductModel extends Model
{
    use HasFactory;
    protected $table = 'products';
    protected $fillable = [
        'name',
        'slug',
        'sku',
        'category_id',
        'trademark_id',
        'price',
        'price_promotional',
        'describe',
        'content',
        'is_sale',
        'display',
    ];
}
