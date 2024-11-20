<?php

namespace App\Filament\Resources\DispetResource\Pages;

use App\Filament\Resources\DispetResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditDispet extends EditRecord
{
    protected static string $resource = DispetResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
