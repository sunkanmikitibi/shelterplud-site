<?php

namespace App\Filament\Resources;

use Closure;
use Filament\Forms;
use Filament\Tables;
use App\Models\Property;
use Illuminate\Support\Str;
use Filament\Resources\Form;
use Filament\Resources\Table;
use Filament\Resources\Resource;
use Filament\Forms\Components\Card;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Actions\ActionGroup;
use Filament\Tables\Columns\ImageColumn;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Illuminate\Database\Eloquent\Builder;
use Filament\Forms\Components\CheckboxList;
use App\Filament\Resources\PropertyResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Components\BelongsToManyMultiSelect;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Filament\Forms\Components\SpatieMediaLibraryFileUpload;
use App\Filament\Resources\PropertyResource\RelationManagers;

class PropertyResource extends Resource
{
    protected static ?string $model = Property::class;

    protected static ?string $navigationIcon = 'heroicon-o-library';


    protected static ?string $navigationGroup = 'Real Estate';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Card::make()->schema(
                    [
                        TextInput::make('title')
                            ->reactive()
                            ->afterStateUpdated(function (Closure $set, $state) {
                                $set('slug', Str::slug($state));
                            })
                            ->required(),
                        TextInput::make('slug')
                            ->required(),
                        TextInput::make('property_address')
                            ->required(),
                        TextInput::make('city')->required(),
                        Forms\Components\Toggle::make('featured')
                            ->required(),
                        Forms\Components\Toggle::make('isActive')
                            ->required(),
                        Select::make('location_id')
                            ->required()
                            ->searchable()
                            ->createOptionForm(
                                [
                                    TextInput::make('location_name')->required(),
                                    FileUpload::make('location_image')->image()->directory('locations'),
                                ]
                            )
                            ->preload()
                            ->relationship('location', 'location_name'),
                        Select::make('type_id')
                            ->required()
                            ->label('Type')
                            ->searchable()
                            ->preload()
                            ->relationship('type', 'name'),
                        Select::make('category_id')
                            ->required()
                            ->label('Category')
                            ->createOptionForm(
                                [
                                    TextInput::make('name')->required(),
                                    TextArea::make('description')->required(),
                                ]
                            )
                            ->searchable()
                            ->preload()
                            ->relationship('category', 'name'),
                        TextInput::make('no_of_bedrooms')
                            ->required(),
                        TextInput::make('no_of_bathrooms')
                            ->required(),
                        TextInput::make('price')
                            ->required(),
                        TextInput::make('size')->required(),
                        Select::make('company_id')
                            ->relationship('company', 'company_name')
                            ->searchable()
                            ->createOptionForm(
                                [
                                    Forms\Components\TextInput::make('company_name')
                                        ->required()
                                        ->columnSpan(2),
                                    Forms\Components\TextInput::make('company_email')
                                        ->required()
                                        ->email(),
                                    Forms\Components\TextInput::make('phone')
                                        ->required(),
                                    Forms\Components\Textarea::make('address')
                                        ->required(),
                                    Select::make('service_id')->relationship('service', 'name'),
                                    FileUpload::make('company_logo')
                                        ->image()
                                        ->directory('company_logo'),
                                ]
                            )
                            ->preload(),
                        Select::make('feature_id')
                            ->relationship('features', 'name')
                            ->multiple()
                            ->preload()
                            ->required(),
                        Select::make('facility')
                            ->relationship('facilities', 'name')
                            ->multiple()
                            ->preload()
                            ->required(),
                        FileUpload::make('cover_image')
                            ->image()
                            ->directory('coverimages'),
                        SpatieMediaLibraryFileUpload::make('gallery')
                            ->collection('gallery')
                            ->multiple()
                            ->minFiles(2)
                            ->maxFiles(5)
                            ->columnSpan('full'),
                        RichEditor::make('description')
                            ->required()
                            ->columnSpan('full'),

                    ]
                )->columns(3),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                ImageColumn::make('cover_image')
                    ->circular()
                    ->disk('public')
                    ->visibility('private')
                    ->size(50),
                TextColumn::make('title')
                    ->searchable(),
                Tables\Columns\IconColumn::make('featured')
                    ->sortable()
                    ->boolean()
                    ->searchable(),
                Tables\Columns\IconColumn::make('isActive')
                    ->sortable()
                    ->boolean()
                    ->searchable(),
                TextColumn::make('type.name')
                    ->searchable(),
                TextColumn::make('location.location_name')
                    ->searchable(),
                TextColumn::make('category.name')
                    ->searchable(),
                TextColumn::make('price')
                    ->money('ngn')
                    ->searchable(),
            ])
            ->filters([
                //
            ])
            ->actions([
                ActionGroup::make([
                    Tables\Actions\ViewAction::make(),
                    Tables\Actions\EditAction::make(),
                    Tables\Actions\DeleteAction::make(),
                ]),

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
            'index' => Pages\ListProperties::route('/'),
            'create' => Pages\CreateProperty::route('/create'),
            'edit' => Pages\EditProperty::route('/{record}/edit'),
            'view' => Pages\ViewProperty::route('/{record}'),
        ];
    }
}
