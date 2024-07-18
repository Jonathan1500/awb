<?php

namespace App\Filament\Resources\AeromexicoResource\Pages;

use App\Filament\Resources\AeromexicoResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListAeromexicos extends ListRecords
{
    protected static string $resource = AeromexicoResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
