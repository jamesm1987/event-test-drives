<?php

namespace App\Filament\Resources\Adaptations\Pages;

use App\Filament\Resources\Adaptations\AdaptationResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListAdaptations extends ListRecords
{
    protected static string $resource = AdaptationResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
