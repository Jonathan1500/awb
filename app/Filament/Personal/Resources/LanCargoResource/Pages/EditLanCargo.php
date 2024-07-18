<?php

namespace App\Filament\Personal\Resources\LanCargoResource\Pages;

use App\Filament\Personal\Resources\LanCargoResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditLanCargo extends EditRecord
{
    protected static string $resource = LanCargoResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
