<?php

namespace App\Filament\Personal\Resources\AmericanAirlinesResource\Pages;

use App\Filament\Personal\Resources\AmericanAirlinesResource;
use App\Models\Guias;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;

class CreateAmericanAirlines extends CreateRecord
{
    protected static string $resource = AmericanAirlinesResource::class;

    protected function mutateFormDataBeforeCreate(array $data): array
    {
        $data['user_id'] = Auth::user()->id;
        $data['codigo_agent'] = User::find($data['user_id'])->codigo_agent;

        $numberAirWaybill = $data["numero_de_air_waybill"];

        Guias::where('guia',$numberAirWaybill)->update(['status'=> 0]);

        return $data;
    }


}
