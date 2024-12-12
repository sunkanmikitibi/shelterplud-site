<?php

namespace App\Filament\Widgets;

use Closure;
use Filament\Tables;
use App\Models\Property;
use Illuminate\Database\Eloquent\Builder;
use Filament\Widgets\TableWidget as BaseWidget;

class LatestProperties extends BaseWidget
{
    protected function getTableQuery(): Builder
    {
         return  Property::query()->latest()->orderBy('created_at', 'asc');
    
    }

    protected function getTableColumns(): array
    {
        return [
            Tables\Columns\TextColumn::make('title'),
            Tables\Columns\TextColumn::make('created_at')
            ->since()
                ->label('Date Created'),
        ];
    }

}
