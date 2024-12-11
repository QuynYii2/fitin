<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SettingModel extends Model
{
    use HasFactory;
    protected $table = 'setting';
    protected $fillable = [
        'logo',
        'contact',
        'describe',
        'facebook',
        'instagram',
        'url_301',
        'meta_title',
        'meta_description',
        'meta_keywords',
    ];
}
