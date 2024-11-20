<?php

namespace App\Filament\Resources;

use App\Filament\Resources\MarhResource\Pages;
use App\Models\Marh;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class MarhResource extends Resource
{
    protected static ?string $model = Marh::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('mesto')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('rasstoyanie')
                    ->required()
                    ->numeric(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('mesto')->sortable()->searchable()->color('text-blue-500'),
                Tables\Columns\TextColumn::make('rasstoyanie')->sortable()->searchable()->color('text-blue-500'),
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
            'index' => Pages\ListMarhs::route('/'),
            'create' => Pages\CreateMarh::route('/create'),
            'edit' => Pages\EditMarh::route('/{record}/edit'),
        ];
    }
}