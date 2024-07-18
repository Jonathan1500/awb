<?php

namespace App\Filament\Personal\Resources\DhlResource\Pages;

use App\Filament\Personal\Resources\DhlResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListDhls extends ListRecords
{
    protected static string $resource = DhlResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
