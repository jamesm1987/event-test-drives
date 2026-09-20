<?php

namespace App\Filament\Resources\Installers;

use App\Filament\Resources\Installers\Pages\CreateInstaller;
use App\Filament\Resources\Installers\Pages\EditInstaller;
use App\Filament\Resources\Installers\Pages\ListInstallers;
use App\Filament\Resources\Installers\Schemas\InstallerForm;
use App\Filament\Resources\Installers\Tables\InstallersTable;
use App\Models\Installer;
use BackedEnum;
use UnitEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class InstallerResource extends Resource
{
    protected static ?string $model = Installer::class;

    protected static UnitEnum|string|null $navigationGroup = 'Adaptations';

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    public static function form(Schema $schema): Schema
    {
        return InstallerForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return InstallersTable::configure($table);
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
            'index' => ListInstallers::route('/'),
            'create' => CreateInstaller::route('/create'),
            'edit' => EditInstaller::route('/{record}/edit'),
        ];
    }
}
