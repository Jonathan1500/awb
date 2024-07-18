<?php

namespace App\Filament\Resources\AmericanAirlinesResource\Pages;

use App\Filament\Resources\AmericanAirlinesResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListAmericanAirlines extends ListRecords
{
    protected static string $resource = AmericanAirlinesResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
