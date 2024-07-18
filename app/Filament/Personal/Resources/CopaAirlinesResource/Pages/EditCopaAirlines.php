<?php

namespace App\Filament\Personal\Resources\CopaAirlinesResource\Pages;

use App\Filament\Personal\Resources\CopaAirlinesResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditCopaAirlines extends EditRecord
{
    protected static string $resource = CopaAirlinesResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
