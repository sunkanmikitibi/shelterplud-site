<?php

namespace App\Filament\Resources\FacilityResource\Widgets;

use App\Models\Facility;
use Filament\Widgets\StatsOverviewWidget\Card;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;

class FacilityOverview extends BaseWidget
{
    protected function getCards(): array
    {
        return [
            Card::make('Facility', Facility::all()->count()),
        ];
    }
}
