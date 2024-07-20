<?php

namespace App\Filament\Resources\AmericanAirlinesResource\Pages;

use App\Filament\Resources\AmericanAirlinesResource;
use App\Models\Guias;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;
use Illuminate\Database\Eloquent\Model;

class CreateAmericanAirlines extends CreateRecord
{
    protected static string $resource = AmericanAirlinesResource::class;

    protected function handleRecordCreation(array $data): Model
    {

        $numberAirWaybill = $data["numero_de_air_waybill"];

        Guias::where('id',$numberAirWaybill)->update(['status'=> 0]);

        $record =  static::getModel()::create($data);
        $record->create($data);

        return $record;


    }
}
