<?php

namespace App\Filament\Resources\VoditeliResource\Pages;

use App\Filament\Resources\VoditeliResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListVoditelis extends ListRecords
{
    protected static string $resource = VoditeliResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
