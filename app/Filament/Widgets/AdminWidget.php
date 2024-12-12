<?php

namespace App\Filament\Widgets;

use App\Models\Company;
use App\Models\Location;
use App\Models\Post;
use App\Models\Property;
use App\Models\User;
use Filament\Widgets\StatsOverviewWidget\Card;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;

class AdminWidget extends BaseWidget
{



    protected function getCards(): array
    {
        return [
            Card::make('Users', User::all()->count())
                ->description('All Users')
                ->chart(['7', '3', '6', '9'])
                ->color('primary')
                ->descriptionIcon('heroicon-s-users'),
            Card::make('Properties', Property::all()->count())
                ->description('All Properties')
                ->descriptionIcon('heroicon-s-home'),
            Card::make('Company', Company::all()->count())
                ->description('Active Registered Companies')
                ->descriptionIcon('heroicon-o-home'),
            Card::make('Locations', Location::all()->count())
                ->description('Property Locations')
                ->descriptionIcon('heroicon-o-map'),
            Card::make('Posts', Post::where('isActive', true)->count())
                ->description('Active Posts')
                ->descriptionIcon('heroicon-o-map'),
        ];
    }
}
