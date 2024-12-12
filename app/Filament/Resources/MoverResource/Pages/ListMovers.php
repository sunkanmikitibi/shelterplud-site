<?php

namespace App\Filament\Resources\MoverResource\Pages;

use App\Filament\Resources\MoverResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListMovers extends ListRecords
{
    protected static string $resource = MoverResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
