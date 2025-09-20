<?php

namespace App\Filament\Resources\PrayerRequests;

use App\Filament\Resources\PrayerRequests\Pages\CreatePrayerRequest;
use App\Filament\Resources\PrayerRequests\Pages\EditPrayerRequest;
use App\Filament\Resources\PrayerRequests\Pages\ListPrayerRequests;
use App\Filament\Resources\PrayerRequests\Schemas\PrayerRequestForm;
use App\Filament\Resources\PrayerRequests\Tables\PrayerRequestsTable;
use App\Models\PrayerRequest;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class PrayerRequestResource extends Resource
{
    protected static ?string $model = PrayerRequest::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'name';

    public static function form(Schema $schema): Schema
    {
        return PrayerRequestForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return PrayerRequestsTable::configure($table);
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
            'index' => ListPrayerRequests::route('/'),
            'create' => CreatePrayerRequest::route('/create'),
            'edit' => EditPrayerRequest::route('/{record}/edit'),
        ];
    }
}
