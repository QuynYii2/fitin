<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NewModel extends Model
{
    use HasFactory;
    protected $table = 'news';
    protected $fillable = [
        'name',
        'slug',
        'src',
        'category_new_id',
        'content',
        'display'
    ];
}
