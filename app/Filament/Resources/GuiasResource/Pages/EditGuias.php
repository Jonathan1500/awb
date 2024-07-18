<?php

namespace App\Filament\Resources\GuiasResource\Pages;

use App\Filament\Resources\GuiasResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditGuias extends EditRecord
{
    protected static string $resource = GuiasResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
