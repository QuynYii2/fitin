<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoryModel extends Model
{
    use HasFactory;
    protected $table = 'category';
    protected $fillable = [
        'src',
        'name',
        'slug',
        'parent_id',
        'is_key',
        'is_home',
    ];
}
