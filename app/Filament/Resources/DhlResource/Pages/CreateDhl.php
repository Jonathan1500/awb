<?php

namespace App\Filament\Resources\DhlResource\Pages;

use App\Filament\Resources\DhlResource;
use App\Models\Guias;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;


class CreateDhl extends CreateRecord
{
    protected static string $resource = DhlResource::class;

    protected function mutateFormDataBeforeCreate(array $data): array
    {
        $numberAirWaybill = $data["numero_de_air_waybill"];

        Guias::where('guia',$numberAirWaybill)->update(['status'=> 0]);

        return $data;
    }
}
