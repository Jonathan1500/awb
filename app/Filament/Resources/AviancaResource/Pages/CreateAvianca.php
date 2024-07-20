<?php

namespace App\Filament\Resources\AviancaResource\Pages;

use App\Filament\Resources\AviancaResource;
use App\Models\Guias;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateAvianca extends CreateRecord
{
    protected static string $resource = AviancaResource::class;

    protected function mutateFormDataBeforeCreate(array $data): array
    {
        $numberAirWaybill = $data["numero_de_air_waybill"];

        Guias::where('guia',$numberAirWaybill)->update(['status'=> 0]);

        return $data;
    }
}
