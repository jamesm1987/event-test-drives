<?php

namespace App\Filament\Resources\ExhibitorCategories\Pages;

use App\Filament\Resources\ExhibitorCategories\ExhibitorCategoryResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditExhibitorCategory extends EditRecord
{
    protected static string $resource = ExhibitorCategoryResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
