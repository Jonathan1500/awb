<?php

namespace App\Filament\Personal\Resources\PerfectCargoLogisticsResource\Pages;

use App\Filament\Personal\Resources\PerfectCargoLogisticsResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPerfectCargoLogistics extends EditRecord
{
    protected static string $resource = PerfectCargoLogisticsResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
