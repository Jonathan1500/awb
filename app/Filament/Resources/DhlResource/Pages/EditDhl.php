<?php

namespace App\Filament\Resources\DhlResource\Pages;

use App\Filament\Resources\DhlResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditDhl extends EditRecord
{
    protected static string $resource = DhlResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
