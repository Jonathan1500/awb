<?php

namespace App\Filament\Resources\AmericanAirlinesResource\Pages;

use App\Filament\Resources\AmericanAirlinesResource;
use App\Models\Guias;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;


class CreateAmericanAirlines extends CreateRecord
{
    protected static string $resource = AmericanAirlinesResource::class;

    protected function mutateFormDataBeforeCreate(array $data): array
    {
        $numberAirWaybill = $data["numero_de_air_waybill"];

        Guias::where('guia',$numberAirWaybill)->update(['status'=> 0]);

        return $data;
    }
}
