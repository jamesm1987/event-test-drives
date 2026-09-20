<?php

namespace App\Filament\Resources\Exhibitors;

use App\Filament\Resources\Exhibitors\Pages\CreateExhibitor;
use App\Filament\Resources\Exhibitors\Pages\EditExhibitor;
use App\Filament\Resources\Exhibitors\Pages\ListExhibitors;
use App\Filament\Resources\Exhibitors\Schemas\ExhibitorForm;
use App\Filament\Resources\Exhibitors\Tables\ExhibitorsTable;
use App\Models\Exhibitor;
use BackedEnum;
use UnitEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class ExhibitorResource extends Resource
{
    protected static ?string $model = Exhibitor::class;

    protected static UnitEnum|string|null $navigationGroup = 'Exhibitors';

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    public static function form(Schema $schema): Schema
    {
        return ExhibitorForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return ExhibitorsTable::configure($table);
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
            'index' => ListExhibitors::route('/'),
            'create' => CreateExhibitor::route('/create'),
            'edit' => EditExhibitor::route('/{record}/edit'),
        ];
    }
}
