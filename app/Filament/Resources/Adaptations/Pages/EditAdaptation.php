<?php

namespace App\Filament\Resources\Adaptations\Pages;

use App\Filament\Resources\Adaptations\AdaptationResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditAdaptation extends EditRecord
{
    protected static string $resource = AdaptationResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
