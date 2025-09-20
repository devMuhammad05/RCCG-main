<?php

namespace App\Filament\Resources\VolunteerOpportunities\Schemas;

use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;

class VolunteerOpportunityForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('title')
                    ->required(),
                Textarea::make('description')
                    ->columnSpanFull(),
                DatePicker::make('start_date')
                    ->required(),
                DatePicker::make('end_date')
                    ->required(),
                TextInput::make('roles_needed')
                    ->required(),
                Textarea::make('special_requirements')
                    ->columnSpanFull(),
                Textarea::make('hours_required')
                    ->columnSpanFull(),
            ]);
    }
}
