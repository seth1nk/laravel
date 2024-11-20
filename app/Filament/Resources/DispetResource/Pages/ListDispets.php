<?php

namespace App\Filament\Resources\DispetResource\Pages;

use App\Filament\Resources\DispetResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListDispets extends ListRecords
{
    protected static string $resource = DispetResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
