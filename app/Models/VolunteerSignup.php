<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class VolunteerSignup extends Model
{
    protected $casts = [
        'confirm_availability' => 'boolean',
        'agree_training' => 'boolean',
        'is_cancelled' => 'boolean',
    ];

    /**
     * Each signup belongs to a volunteer opportunity.
     */
    public function opportunity()
    {
        return $this->belongsTo(VolunteerOpportunity::class, 'volunteer_opportunity_id');
    }

    /**
     * Each signup belongs to a user.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
