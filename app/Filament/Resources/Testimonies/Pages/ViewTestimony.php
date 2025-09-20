<?php

namespace App\Filament\Resources\Testimonies\Pages;

use App\Filament\Resources\Testimonies\TestimonyResource;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewTestimony extends ViewRecord
{
    protected static string $resource = TestimonyResource::class;

    protected function getHeaderActions(): array
    {
        return [
            EditAction::make(),
        ];
    }
}
