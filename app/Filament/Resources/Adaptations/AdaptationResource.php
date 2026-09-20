<?php

namespace App\Filament\Resources\Adaptations;

use App\Filament\Resources\Adaptations\Pages\CreateAdaptation;
use App\Filament\Resources\Adaptations\Pages\EditAdaptation;
use App\Filament\Resources\Adaptations\Pages\ListAdaptations;
use App\Filament\Resources\Adaptations\Schemas\AdaptationForm;
use App\Filament\Resources\Adaptations\Tables\AdaptationsTable;
use App\Models\Adaptation;
use BackedEnum;
use UnitEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class AdaptationResource extends Resource
{
    protected static ?string $model = Adaptation::class;

    protected static UnitEnum|string|null $navigationGroup = 'Adaptations';

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    public static function form(Schema $schema): Schema
    {
        return AdaptationForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return AdaptationsTable::configure($table);
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
            'index' => ListAdaptations::route('/'),
            'create' => CreateAdaptation::route('/create'),
            'edit' => EditAdaptation::route('/{record}/edit'),
        ];
    }
}
