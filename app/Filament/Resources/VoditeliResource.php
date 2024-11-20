<?php

namespace App\Filament\Resources;

use App\Filament\Resources\VoditeliResource\Pages;
use App\Models\Voditeli;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class VoditeliResource extends Resource
{
    protected static ?string $model = Voditeli::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('name_vod')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('stazh')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('number_pass')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('adress')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('phone')
                    ->required()
                    ->maxLength(255),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name_vod')->sortable()->searchable()->color('text-blue-500'),
                Tables\Columns\TextColumn::make('stazh')->sortable()->searchable()->color('text-blue-500'),
                Tables\Columns\TextColumn::make('number_pass')->sortable()->searchable()->color('text-blue-500'),
                Tables\Columns\TextColumn::make('adress')->sortable()->searchable()->color('text-blue-500'),
                Tables\Columns\TextColumn::make('phone')->sortable()->searchable()->color('text-blue-500'),
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
            'index' => Pages\ListVoditelis::route('/'),
            'create' => Pages\CreateVoditeli::route('/create'),
            'edit' => Pages\EditVoditeli::route('/{record}/edit'),
        ];
    }
}