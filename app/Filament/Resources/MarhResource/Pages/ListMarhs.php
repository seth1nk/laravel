<?php

namespace App\Filament\Resources\MarhResource\Pages;

use App\Filament\Resources\MarhResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListMarhs extends ListRecords
{
    protected static string $resource = MarhResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
