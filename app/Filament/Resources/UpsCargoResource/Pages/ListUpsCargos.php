<?php

namespace App\Filament\Resources\UpsCargoResource\Pages;

use App\Filament\Resources\UpsCargoResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListUpsCargos extends ListRecords
{
    protected static string $resource = UpsCargoResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
