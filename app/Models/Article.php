<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $casts = [
        'is_active' => 'boolean',
    ];
}
