<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Attributes\Scope;
use Illuminate\Database\Eloquent\Builder;

class Event extends Model
{



    #[Scope]
    protected function upcoming(Builder $query): void
    {
        $query->where('date', '>=', Carbon::now())
            ->orderBy('date', 'asc');
    }
}
