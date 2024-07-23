<?php

namespace App\Filament\Resources\PerfectCargoLogisticsResource\Pages;

use App\Filament\Resources\PerfectCargoLogisticsResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListPerfectCargoLogistics extends ListRecords
{
    protected static string $resource = PerfectCargoLogisticsResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
