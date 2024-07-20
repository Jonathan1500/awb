<?php

namespace App\Filament\Resources\UpsCargoResource\Pages;

use App\Filament\Resources\UpsCargoResource;
use App\Models\Guias;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;
use Illuminate\Database\Eloquent\Model;

class CreateUpsCargo extends CreateRecord
{
    protected static string $resource = UpsCargoResource::class;

    protected function mutateFormDataBeforeCreate(array $data): array
    {
        $numberAirWaybill = $data["numero_de_air_waybill"];

        Guias::where('guia',$numberAirWaybill)->update(['status'=> 0]);

        return $data;
    }
}
