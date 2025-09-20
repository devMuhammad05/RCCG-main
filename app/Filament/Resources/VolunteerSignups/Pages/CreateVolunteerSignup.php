<?php

namespace App\Filament\Resources\VolunteerSignups\Pages;

use App\Filament\Resources\VolunteerSignups\VolunteerSignupResource;
use Filament\Resources\Pages\CreateRecord;

class CreateVolunteerSignup extends CreateRecord
{
    protected static string $resource = VolunteerSignupResource::class;
}
