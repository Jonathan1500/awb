<?php

namespace App\Filament\Resources\GuiasResource\Pages;

use App\Filament\Resources\GuiasResource;
use App\Imports\GuiasImport;
use EightyNine\ExcelImport\ExcelImportAction;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListGuias extends ListRecords
{
    protected static string $resource = GuiasResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
            ExcelImportAction::make()
            ->color("primary")
            ->use(GuiasImport::class),
        ];
    }


}
