<?php

namespace App\Filament\Widgets;

use Carbon\Carbon;
use App\Models\User;
use Filament\Widgets\BarChartWidget;

class UsersChart extends BarChartWidget
{
    protected static ?string $heading = 'Users';

    protected function getData(): array
    {
        $users = User::select('created_at')->get()->groupBy(function($users)
        {
            return Carbon::parse($users->created_at)->format('F');
        });

        $quantities = [];
        foreach($users as $user => $value) {
            array_push($quantities, $value->count());
        }
        return [
            'datasets' => [
                [
                    'barPercentage' => 0.5,
                    'barThickness' => 20,
                    'label' => 'Users Joined',
                    'data' => $quantities,
                    'backgroundColor' => [
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(255, 159, 64, 0.2)',
                        'rgba(255, 205, 86, 0.2)',
                        'rgba(75, 192, 192, 0.2)',
                        'rgba(153, 102, 255, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(201, 203, 207, 0.2)',
                    ],
                    'borderColor' => [
                        'rgba(255, 99, 132)',
                        'rgba(255, 159, 64)',
                        'rgba(255, 205, 86)',
                        'rgba(75, 192, 192)',
                        'rgba(153, 102, 255)',
                        'rgba(54, 162, 235)',
                        'rgba(201, 203, 207)',
                    ],
                    'borderWidth' => 1,
                    'maxBarThickness' => 22,
                    'minBarLength' => 2,
                    'borderRadius' => 3,
                ],
             
            ],
            'labels' => $users->keys(),            
        ];
    }
}
