<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ConsultingDesignModel extends Model
{
    use HasFactory;
    protected $table = 'consulting_design';
    protected $fillable = [
        'src',
        'name',
        'slug',
        'content',
        'type'
    ];
}
