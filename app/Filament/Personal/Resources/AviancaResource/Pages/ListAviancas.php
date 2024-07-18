<?php

namespace App\Filament\Personal\Resources\AviancaResource\Pages;

use App\Filament\Personal\Resources\AviancaResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListAviancas extends ListRecords
{
    protected static string $resource = AviancaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
