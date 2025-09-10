<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Testimony extends Model
{
    protected function casts(): array
    {
        return [
            'is_shared_anonymously' => 'boolean',
            'show_as_featured' => 'boolean',
        ];
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
