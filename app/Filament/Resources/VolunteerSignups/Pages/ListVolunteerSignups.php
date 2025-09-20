<?php

namespace App\Filament\Resources\VolunteerSignups\Pages;

use App\Filament\Resources\VolunteerSignups\VolunteerSignupResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListVolunteerSignups extends ListRecords
{
    protected static string $resource = VolunteerSignupResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
