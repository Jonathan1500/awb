<?php

namespace App\Filament\Resources\AeromexicoResource\Pages;

use App\Filament\Resources\AeromexicoResource;
use App\Models\Guias;
use Filament\Resources\Pages\CreateRecord;


class CreateAeromexico extends CreateRecord
{
    protected static string $resource = AeromexicoResource::class;

    protected function mutateFormDataBeforeCreate(array $data): array
    {
        $numberAirWaybill = $data["numero_de_air_waybill"];

        Guias::where('guia',$numberAirWaybill)->update(['status'=> 0]);

        return $data;
    }

}
