<?php

namespace App\Filament\Personal\Resources\VolarisResource\Pages;

use App\Filament\Personal\Resources\VolarisResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListVolaris extends ListRecords
{
    protected static string $resource = VolarisResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
