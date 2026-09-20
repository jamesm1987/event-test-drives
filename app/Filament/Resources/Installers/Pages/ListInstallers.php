<?php

namespace App\Filament\Resources\Installers\Pages;

use App\Filament\Resources\Installers\InstallerResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListInstallers extends ListRecords
{
    protected static string $resource = InstallerResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
