<?php

namespace App\Filament\Resources\LanCargoResource\Pages;

use App\Filament\Resources\LanCargoResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListLanCargos extends ListRecords
{
    protected static string $resource = LanCargoResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
