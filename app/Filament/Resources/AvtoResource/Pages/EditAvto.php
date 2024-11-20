<?php

namespace App\Filament\Resources\AvtoResource\Pages;

use App\Filament\Resources\AvtoResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditAvto extends EditRecord
{
    protected static string $resource = AvtoResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
