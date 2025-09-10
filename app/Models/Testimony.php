<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Container\Attributes\Scoped;
use Illuminate\Contracts\Database\Eloquent\Builder;

class Testimony extends Model
{
    protected function casts(): array
    {
        return [
            'is_shared_anonymously' => 'boolean',
            'show_as_featured' => 'boolean',
        ];
    }


    // #[Scoped]
    public function ScopeFeatured($query)
    {
        return $query->where('show_as_featured', true);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

}
