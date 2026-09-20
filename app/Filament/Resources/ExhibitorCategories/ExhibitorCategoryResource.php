<?php

namespace App\Filament\Resources\ExhibitorCategories;

use App\Filament\Resources\ExhibitorCategories\Pages\CreateExhibitorCategory;
use App\Filament\Resources\ExhibitorCategories\Pages\EditExhibitorCategory;
use App\Filament\Resources\ExhibitorCategories\Pages\ListExhibitorCategories;
use App\Filament\Resources\ExhibitorCategories\Schemas\ExhibitorCategoryForm;
use App\Filament\Resources\ExhibitorCategories\Tables\ExhibitorCategoriesTable;
use App\Models\ExhibitorCategory;
use BackedEnum;
use UnitEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class ExhibitorCategoryResource extends Resource
{
    protected static ?string $model = ExhibitorCategory::class;

    protected static UnitEnum|string|null $navigationGroup = 'Exhibitors';

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    public static function form(Schema $schema): Schema
    {
        return ExhibitorCategoryForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return ExhibitorCategoriesTable::configure($table);
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
            'index' => ListExhibitorCategories::route('/'),
            'create' => CreateExhibitorCategory::route('/create'),
            'edit' => EditExhibitorCategory::route('/{record}/edit'),
        ];
    }
}
