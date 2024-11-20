<?php

namespace App\Filament\Resources\VoditeliResource\Pages;

use App\Filament\Resources\VoditeliResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditVoditeli extends EditRecord
{
    protected static string $resource = VoditeliResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
