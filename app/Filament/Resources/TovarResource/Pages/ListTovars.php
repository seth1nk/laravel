<?php

namespace App\Filament\Resources\TovarResource\Pages;

use App\Filament\Resources\TovarResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListTovars extends ListRecords
{
    protected static string $resource = TovarResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
