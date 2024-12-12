<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Company;
use Filament\Resources\Form;
use Filament\Resources\Table;
use Filament\Resources\Resource;
use Filament\Forms\Components\Card;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\FileUpload;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\CompanyResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\CompanyResource\RelationManagers;
use Filament\Forms\Components\Grid;

class CompanyResource extends Resource
{
    protected static ?string $model = Company::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';


    protected static ?string $navigationGroup = 'Real Estate';
    protected static ?string $navigationLabel = 'Property Developers';



    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Card::make()->schema(
                    [
                        Grid::make(2)->schema([
                            Forms\Components\TextInput::make('company_name')
                                ->required(),
                            Forms\Components\TextInput::make('company_email')
                                ->required()
                                ->email(),
                            Forms\Components\TextInput::make('phone')
                                ->required(),
                            FileUpload::make('company_logo')
                                ->image()
                                ->directory('company_logo'),
                            Select::make('service_id')
                                ->columnSpan(2)
                                ->searchable()
                                ->preload()
                                ->relationship('service', 'name')
                                ->required(),

                        ]),


                        Forms\Components\Textarea::make('address')
                            ->required(),


                    ]
                ),


            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([

                Tables\Columns\TextColumn::make('company_name'),
                Tables\Columns\TextColumn::make('company_email'),
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
            'index' => Pages\ListCompanies::route('/'),
            'create' => Pages\CreateCompany::route('/create'),
            'edit' => Pages\EditCompany::route('/{record}/edit'),
        ];
    }
}
