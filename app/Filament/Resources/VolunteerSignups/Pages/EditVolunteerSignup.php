<?php

namespace App\Filament\Resources\VolunteerSignups\Pages;

use App\Filament\Resources\VolunteerSignups\VolunteerSignupResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditVolunteerSignup extends EditRecord
{
    protected static string $resource = VolunteerSignupResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
