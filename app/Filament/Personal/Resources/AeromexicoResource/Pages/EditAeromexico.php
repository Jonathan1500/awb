<?php

namespace App\Filament\Personal\Resources\AeromexicoResource\Pages;

use App\Filament\Personal\Resources\AeromexicoResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditAeromexico extends EditRecord
{
    protected static string $resource = AeromexicoResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
