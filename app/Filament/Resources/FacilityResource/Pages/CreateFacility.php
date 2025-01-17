<?php

namespace App\Filament\Resources\FacilityResource\Pages;

use App\Filament\Resources\FacilityResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateFacility extends CreateRecord
{
    protected static string $resource = FacilityResource::class;

    
    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
