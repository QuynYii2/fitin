<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TrademarkModel extends Model
{
    use HasFactory;
    protected $table = 'trademarks';
    protected $fillable = [
        'name',
        'slug',
        'src',
        'link',
        'display'
    ];
}
