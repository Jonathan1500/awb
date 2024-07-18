<?php

namespace App\Filament\Resources\AmericanAirlinesResource\Pages;

use App\Filament\Resources\AmericanAirlinesResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditAmericanAirlines extends EditRecord
{
    protected static string $resource = AmericanAirlinesResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
