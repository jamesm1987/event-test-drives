<?php

namespace App\Filament\Resources\Adaptations\Pages;

use App\Filament\Resources\Adaptations\AdaptationResource;
use Filament\Resources\Pages\CreateRecord;

class CreateAdaptation extends CreateRecord
{
    protected static string $resource = AdaptationResource::class;
}
