<?php

namespace App\Filament\Resources;

use App\Filament\Resources\AvtoResource\Pages;
use App\Models\Avto;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class AvtoResource extends Resource
{
    protected static ?string $model = Avto::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('registration_number')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('name_avto')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('god')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('probeg')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('category')
                    ->required()
                    ->maxLength(255),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('id')->sortable()->color('text-blue-500'),
                Tables\Columns\TextColumn::make('registration_number')->sortable()->searchable()->color('text-blue-500'),
                Tables\Columns\TextColumn::make('name_avto')->sortable()->searchable()->color('text-blue-500'),
                Tables\Columns\TextColumn::make('god')->sortable()->searchable()->color('text-blue-500'),
                Tables\Columns\TextColumn::make('probeg')->sortable()->searchable()->color('text-blue-500'),
                Tables\Columns\TextColumn::make('category')->sortable()->searchable()->color('text-blue-500'),
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
            'index' => Pages\ListAvtos::route('/'),
            'create' => Pages\CreateAvto::route('/create'),
            'edit' => Pages\EditAvto::route('/{record}/edit'),
        ];
    }
    public static function getTableHeading(): string
    {
        return 'Автомобили'; // Измененный заголовок таблицы
    }
}