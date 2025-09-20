<?php

namespace App\Filament\Resources\Users\Schemas;

use App\Enums\Role;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;

class UserForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->required(),
                Select::make('role')
                    ->options(Role::class)
                    ->default('user')
                    ->required(),
                TextInput::make('email')
                    ->label('Email address')
                    ->email()
                    ->required(),
                DateTimePicker::make('email_verified_at'),
                TextInput::make('phone_number')
                    ->tel(),
                TextInput::make('profession'),
                TextInput::make('location'),
                TextInput::make('bio'),
                TextInput::make('short_testimony'),
                TextInput::make('password')
                    ->password()
                    ->required(),
                TextInput::make('avatar'),
                DatePicker::make('date_of_birth'),
                Textarea::make('instagram_url')
                    ->columnSpanFull(),
                Textarea::make('whatsapp_url')
                    ->columnSpanFull(),
                Textarea::make('facebook_url')
                    ->columnSpanFull(),
                Textarea::make('x_url')
                    ->columnSpanFull(),
                Textarea::make('linkedin_url')
                    ->columnSpanFull(),
            ]);
    }
}
