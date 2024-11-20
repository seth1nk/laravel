<?php

namespace App\Filament\Resources;

use App\Filament\Resources\TovarResource\Pages;
use App\Models\Tovar;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class TovarResource extends Resource
{
    protected static ?string $model = Tovar::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('name_tovar')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('kolvo_tovar')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('cena_tovar')
                    ->required()
                    ->numeric(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name_tovar')->sortable()->searchable()->color('text-blue-500'),
                Tables\Columns\TextColumn::make('kolvo_tovar')->sortable()->searchable()->color('text-blue-500'),
                Tables\Columns\TextColumn::make('cena_tovar')->sortable()->searchable()->color('text-blue-500'),
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
            'index' => Pages\ListTovars::route('/'),
            'create' => Pages\CreateTovar::route('/create'),
            'edit' => Pages\EditTovar::route('/{record}/edit'),
        ];
    }
}