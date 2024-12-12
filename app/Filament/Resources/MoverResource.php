<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Mover;
use App\Models\Location;
use Filament\Resources\Form;
use Filament\Resources\Table;
use Filament\Resources\Resource;
use Filament\Forms\Components\Card;
use Filament\Forms\Components\Grid;
use Filament\Forms\Components\Select;
use Filament\Tables\Columns\TextColumn;
use Illuminate\Database\Eloquent\Builder;
use Filament\Forms\Components\MarkdownEditor;
use App\Filament\Resources\MoverResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\MoverResource\RelationManagers;

class MoverResource extends Resource
{
    protected static ?string $model = Mover::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Card::make()->schema(
                    [
                        Grid::make(2)->schema([
                            Select::make('location_from')
                                ->options(Location::query()->pluck('location_name', 'id'))
                                ->preload()
                                ->searchable()
                                ->required(),
                            Select::make('location_to')
                                ->options(Location::query()->pluck('location_name', 'id'))
                                ->preload()
                                ->searchable()
                                ->required(),

                        ]),
                        Forms\Components\DateTimePicker::make('date_of_movement')
                            ->required(),
                        MarkdownEditor::make('comment')->required(),

                    ]
                )
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('locationfrom.location_name')->sortable()->searchable()->label('Relocation From'),
                TextColumn::make('locationto.location_name')->sortable()->searchable()->label('Relocation To'),
                TextColumn::make('date_of_movement')->sortable()->searchable()->label('Date'),
                TextColumn::make('comment')->sortable()->searchable(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListMovers::route('/'),
            'create' => Pages\CreateMover::route('/create'),
            'edit' => Pages\EditMover::route('/{record}/edit'),
        ];
    }
}
