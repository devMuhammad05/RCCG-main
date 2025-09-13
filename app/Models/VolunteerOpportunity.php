<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class VolunteerOpportunity extends Model
{
    protected $casts = [
        'roles_needed' => 'array',
        'start_date' => 'date',
        'end_date' => 'date',
    ];


    /**
     * A volunteer opportunity has many signups.
    */
    public function signups()
    {
        return $this->hasMany(VolunteerSignup::class);
    }
}
