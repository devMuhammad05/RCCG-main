<?php

namespace App\Filament\Resources\VolunteerOpportunities;

use App\Filament\Resources\VolunteerOpportunities\Pages\CreateVolunteerOpportunity;
use App\Filament\Resources\VolunteerOpportunities\Pages\EditVolunteerOpportunity;
use App\Filament\Resources\VolunteerOpportunities\Pages\ListVolunteerOpportunities;
use App\Filament\Resources\VolunteerOpportunities\Schemas\VolunteerOpportunityForm;
use App\Filament\Resources\VolunteerOpportunities\Tables\VolunteerOpportunitiesTable;
use App\Models\VolunteerOpportunity;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class VolunteerOpportunityResource extends Resource
{
    protected static ?string $model = VolunteerOpportunity::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'title';

    public static function form(Schema $schema): Schema
    {
        return VolunteerOpportunityForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return VolunteerOpportunitiesTable::configure($table);
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
            'index' => ListVolunteerOpportunities::route('/'),
            'create' => CreateVolunteerOpportunity::route('/create'),
            'edit' => EditVolunteerOpportunity::route('/{record}/edit'),
        ];
    }
}
