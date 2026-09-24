<?php

namespace App\Filament\Resources\Vehicles\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Select;
use Filament\Schemas\Schema;

class VehicleForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Select::make('manufacturer_id')
                    ->relationship('manufacturer', 'name'),
                TextInput::make('model')
                    ->required(),
                FileUpload::make('image'),
                TextInput::make('model')
                    ->required(),
                FileUpload::make('image'),
            ]);
    }
}
