<?php

namespace App\Filament\Resources\CopaAirlinesResource\Pages;

use App\Filament\Resources\CopaAirlinesResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListCopaAirlines extends ListRecords
{
    protected static string $resource = CopaAirlinesResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
