<?php

namespace App\Filament\Resources\Installers\Pages;

use App\Filament\Resources\Installers\InstallerResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditInstaller extends EditRecord
{
    protected static string $resource = InstallerResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
