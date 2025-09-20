<?php

namespace App\Filament\Resources\Events\Schemas;

use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;

class EventForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('thumbnail')
                    ->required(),
                TextInput::make('title')
                    ->required(),
                TextInput::make('sub-title')
                    ->required(),
                Textarea::make('description')
                    ->required()
                    ->columnSpanFull(),
                TextInput::make('category'),
                DateTimePicker::make('date')
                    ->required(),
                TextInput::make('location'),
                TextInput::make('venue'),
            ]);
    }
}
