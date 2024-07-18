<?php

namespace App\Filament\Resources\AviancaResource\Pages;

use App\Filament\Resources\AviancaResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListAvianca extends ListRecords
{
    protected static string $resource = AviancaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
