<?php

namespace App\Filament\Resources\PrayerRequests\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;

class PrayerRequestForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('user_id')
                    ->required()
                    ->numeric(),
                Toggle::make('is_shared_anonymously')
                    ->required(),
                Textarea::make('request')
                    ->required()
                    ->columnSpanFull(),
            ]);
    }
}
