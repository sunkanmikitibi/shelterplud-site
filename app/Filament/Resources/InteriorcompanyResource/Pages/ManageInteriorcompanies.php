<?php

namespace App\Filament\Resources\InteriorcompanyResource\Pages;

use App\Filament\Resources\InteriorcompanyResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ManageRecords;

class ManageInteriorcompanies extends ManageRecords
{
    protected static string $resource = InteriorcompanyResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
