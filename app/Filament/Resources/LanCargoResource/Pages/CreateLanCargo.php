<?php

namespace App\Filament\Resources\LanCargoResource\Pages;

use App\Filament\Resources\LanCargoResource;
use App\Models\Guias;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;
use Illuminate\Database\Eloquent\Model;

class CreateLanCargo extends CreateRecord
{
    protected static string $resource = LanCargoResource::class;

    protected function handleRecordCreation(array $data): Model
    {

        $numberAirWaybill = $data["numero_de_air_waybill"];

        Guias::where('id',$numberAirWaybill)->update(['status'=> 0]);

        $record =  static::getModel()::create($data);
        $record->create($data);

        return $record;


    }
}
