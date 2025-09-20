<?php

namespace App\Filament\Resources\Articles\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;

class ArticleForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('thumbnail')
                    ->required(),
                TextInput::make('title')
                    ->required(),
                TextInput::make('sub_title')
                    ->required(),
                TextInput::make('slug')
                    ->required(),
                TextInput::make('category')
                    ->required(),
                Textarea::make('body')
                    ->required()
                    ->columnSpanFull(),
                Toggle::make('is_active')
                    ->required(),
            ]);
    }
}
