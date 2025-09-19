<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class NotificationSetting extends Model
{

    protected $casts = [
        'church_announcement' => 'boolean',
        'event_reminder' => 'boolean',
        'other' => 'boolean',
        'in_app' => 'boolean',
        'email' => 'boolean',
        'sms' => 'boolean',
        'mark_as_read_when_opened' => 'boolean',
        'delete_after_30_days' => 'boolean',
        'show_confirmation_before_deleting_notification' => 'boolean',
    ];


    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
