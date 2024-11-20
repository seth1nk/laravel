<?php

namespace App\Filament\Resources;

use App\Filament\Resources\DispetResource\Pages;
use App\Models\Dispet;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class DispetResource extends Resource
{
    protected static ?string $model = Dispet::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('id_avto')
                    ->required()
                    ->numeric(),
                Forms\Components\DateTimePicker::make('time_prib')
                    ->required(),
                Forms\Components\DateTimePicker::make('time_otb')
                    ->required(),
                Forms\Components\TextInput::make('id_vod')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('pytevka')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('tovar')
                    ->required()
                    ->numeric(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('id_avto')->sortable()->searchable()->color('text-blue-500'),
                Tables\Columns\TextColumn::make('time_prib')->dateTime()->sortable()->searchable()->color('text-blue-500'),
                Tables\Columns\TextColumn::make('time_otb')->dateTime()->sortable()->searchable()->color('text-blue-500'),
                Tables\Columns\TextColumn::make('id_vod')->sortable()->searchable()->color('text-blue-500'),
                Tables\Columns\TextColumn::make('pytevka')->sortable()->searchable()->color('text-blue-500'),
                Tables\Columns\TextColumn::make('tovar')->sortable()->searchable()->color('text-blue-500'),
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
            'index' => Pages\ListDispets::route('/'),
            'create' => Pages\CreateDispet::route('/create'),
            'edit' => Pages\EditDispet::route('/{record}/edit'),
        ];
    }
}