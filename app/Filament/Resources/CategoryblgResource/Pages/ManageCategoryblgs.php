<?php

namespace App\Filament\Resources\CategoryblgResource\Pages;

use App\Filament\Resources\CategoryblgResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ManageRecords;

class ManageCategoryblgs extends ManageRecords
{
    protected static string $resource = CategoryblgResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
