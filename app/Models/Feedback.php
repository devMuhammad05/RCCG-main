<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Feedback extends Model
{
    protected function casts(): array
    {
        return [
            'can_be_contacted' => 'boolean',
        ];
    }
}
