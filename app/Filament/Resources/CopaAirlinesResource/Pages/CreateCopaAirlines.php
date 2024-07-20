<?php

namespace App\Filament\Resources\CopaAirlinesResource\Pages;

use App\Filament\Resources\CopaAirlinesResource;
use App\Models\Guias;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;


class CreateCopaAirlines extends CreateRecord
{
    protected static string $resource = CopaAirlinesResource::class;

    protected function mutateFormDataBeforeCreate(array $data): array
    {
        $numberAirWaybill = $data["numero_de_air_waybill"];

        Guias::where('guia',$numberAirWaybill)->update(['status'=> 0]);

        return $data;
    }
}
