<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Attributes\Scope;

class Article extends Model
{
    protected $casts = [
        'is_active' => 'boolean',
    ];


    #[Scope]
    protected function active(Builder $query): void
    {
        $query->where('is_active', true);
    }
}
