<?php

namespace App\Filament\Resources\ExhibitorCategories\Pages;

use App\Filament\Resources\ExhibitorCategories\ExhibitorCategoryResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListExhibitorCategories extends ListRecords
{
    protected static string $resource = ExhibitorCategoryResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
