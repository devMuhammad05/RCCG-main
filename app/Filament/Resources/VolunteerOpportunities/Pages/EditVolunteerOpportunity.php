<?php

namespace App\Filament\Resources\VolunteerOpportunities\Pages;

use App\Filament\Resources\VolunteerOpportunities\VolunteerOpportunityResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditVolunteerOpportunity extends EditRecord
{
    protected static string $resource = VolunteerOpportunityResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
