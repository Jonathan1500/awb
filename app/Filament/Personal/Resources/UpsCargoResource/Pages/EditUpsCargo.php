<?php

namespace App\Filament\Personal\Resources\UpsCargoResource\Pages;

use App\Filament\Personal\Resources\UpsCargoResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditUpsCargo extends EditRecord
{
    protected static string $resource = UpsCargoResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
