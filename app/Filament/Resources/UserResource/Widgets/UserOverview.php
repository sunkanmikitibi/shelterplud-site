<?php

namespace App\Filament\Resources\UserResource\Widgets;

use App\Models\User;
use Filament\Widgets\Widget;
use Filament\Widgets\StatsOverviewWidget\Card; 
use Filament\Widgets\StatsOverviewWidget as BaseWidget;

class UserOverview extends BaseWidget
{
    //protected static string $view = 'filament.resources.user-resource.widgets.user-overview';

    protected function getCards(): array
    {
        return [
            //Card::make('All Users', User::all()->count()),
            Card::make('Admin Users', User::role('admin')->get()->count())
            ->description('All Admin users')
            ->chart([7, 2, 10, 3, 15, 4, 17])
            ->color('success'),
            Card::make('Users', User::role('user')->get()->count())
            ->description('Ordinary users')            
            ->chart([7, 2, 8, 5, 1, 4, 20, 17])
            ->color('secondary'),
            Card::make('Super Admin', User::role('super-admin')->get()->count()),
            Card::make('Agents', User::role('agents')->get()->count()),
        ];
    }
 
}
