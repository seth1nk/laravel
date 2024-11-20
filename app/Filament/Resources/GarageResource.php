<?php

namespace App\Filament\Resources;

use App\Filament\Resources\GarageResource\Pages;
use App\Models\Garage;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class GarageResource extends Resource
{
    protected static ?string $model = Garage::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('id_avto')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('polomka')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('zapchast')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('cena_zapchast')
                    ->required()
                    ->numeric(),
                Forms\Components\DatePicker::make('data_nachalo')
                    ->required(),
                Forms\Components\DatePicker::make('data_konec')
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('id_avto')->sortable()->searchable()->color('text-blue-500'),
                Tables\Columns\TextColumn::make('polomka')->sortable()->searchable()->color('text-blue-500'),
                Tables\Columns\TextColumn::make('zapchast')->sortable()->searchable()->color('text-blue-500'),
                Tables\Columns\TextColumn::make('cena_zapchast')->sortable()->searchable()->color('text-blue-500'),
                Tables\Columns\TextColumn::make('data_nachalo')->date()->sortable()->searchable()->color('text-blue-500'),
                Tables\Columns\TextColumn::make('data_konec')->date()->sortable()->searchable()->color('text-blue-500'),
                Tables\Columns\TextColumn::make('created_at')->dateTime()->sortable()->searchable()->color('text-blue-500'),
                Tables\Columns\TextColumn::make('updated_at')->dateTime()->sortable()->searchable()->color('text-blue-500'),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListGarages::route('/'),
            'create' => Pages\CreateGarage::route('/create'),
            'edit' => Pages\EditGarage::route('/{record}/edit'),
        ];
    }
}