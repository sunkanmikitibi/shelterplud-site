<?php

namespace App\Filament\Widgets;

use Carbon\Carbon;
use App\Models\Property;
use Filament\Widgets\BarChartWidget;

class PropertyChart extends BarChartWidget
{
    protected static ?string $heading = 'Property';

    protected function getData(): array
    {
        $properties = Property::select('created_at')->get()->groupBy(function($properties)
        {
            return Carbon::parse($properties->created_at)->format('F');
        });

        $quantities = [];
        foreach($properties as $property => $value) {
            array_push($quantities, $value->count());
        }
        return [
            'datasets' => [
                [
                    'barPercentage' => 0.5,
                    'barThickness' => 20,
                    'label' => 'Properties',
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
            'labels' => $properties->keys(),            
        ];
    }
}
