<?php

namespace App\Filament\Resources\VolunteerSignups;

use App\Filament\Resources\VolunteerSignups\Pages\CreateVolunteerSignup;
use App\Filament\Resources\VolunteerSignups\Pages\EditVolunteerSignup;
use App\Filament\Resources\VolunteerSignups\Pages\ListVolunteerSignups;
use App\Filament\Resources\VolunteerSignups\Schemas\VolunteerSignupForm;
use App\Filament\Resources\VolunteerSignups\Tables\VolunteerSignupsTable;
use App\Models\VolunteerSignup;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class VolunteerSignupResource extends Resource
{
    protected static ?string $model = VolunteerSignup::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'name';

    public static function form(Schema $schema): Schema
    {
        return VolunteerSignupForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return VolunteerSignupsTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListVolunteerSignups::route('/'),
            'create' => CreateVolunteerSignup::route('/create'),
            'edit' => EditVolunteerSignup::route('/{record}/edit'),
        ];
    }
}
