<?php

namespace App\Filament\Resources\TovarResource\Pages;

use App\Filament\Resources\TovarResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditTovar extends EditRecord
{
    protected static string $resource = TovarResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
