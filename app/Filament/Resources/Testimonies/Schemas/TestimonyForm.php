<?php

namespace App\Filament\Resources\Testimonies\Schemas;

use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;

class TestimonyForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Select::make('user_id')
                    ->relationship('user', 'name')
                    ->required(),
                Toggle::make('is_shared_anonymously')
                    ->required(),
                Textarea::make('message')
                    ->required()
                    ->columnSpanFull(),
                Toggle::make('show_as_featured')
                    ->required(),
            ]);
    }
}
