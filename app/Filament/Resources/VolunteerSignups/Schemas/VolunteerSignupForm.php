<?php

namespace App\Filament\Resources\VolunteerSignups\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;

class VolunteerSignupForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('volunteer_opportunity_id')
                    ->required()
                    ->numeric(),
                TextInput::make('user_id')
                    ->required()
                    ->numeric(),
                TextInput::make('name')
                    ->required(),
                TextInput::make('email')
                    ->label('Email address')
                    ->email()
                    ->required(),
                TextInput::make('role_selected'),
                Textarea::make('hours_selected')
                    ->columnSpanFull(),
                Textarea::make('skills_experience')
                    ->columnSpanFull(),
                Toggle::make('confirm_availability')
                    ->required(),
                Toggle::make('agree_training')
                    ->required(),
                Toggle::make('is_cancelled')
                    ->required(),
            ]);
    }
}
