<?php

namespace App\Filament\Personal\Resources\AmericanAirlinesResource\Pages;

use App\Filament\Personal\Resources\AmericanAirlinesResource;
use App\Models\Guias;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Filament\Notifications\Notification;
use Illuminate\Validation\ValidationException;

class CreateAmericanAirlines extends CreateRecord
{
    protected static string $resource = AmericanAirlinesResource::class;

    protected function mutateFormDataBeforeCreate(array $data): array
    {

        $data['user_id'] = Auth::user()->id;
        $data['codigo_agent'] = User::find($data['user_id'])->codigo_agent;



        $numberAirWaybill = $data["numero_de_air_waybill"];

            $not_unique = Guias::where([
                        ['guia','=', $numberAirWaybill],
                        ['status', '=', 0]
            ])->exists();



            if ($not_unique) {
                Notification::make()
                    ->title('La Guia ya esta seleccionada, intenta con otra.')
                    ->danger()
                    ->send();

                    throw ValidationException::withMessages(['La Guia ya esta seleccionada, intenta con otra.']);
            }



            Guias::where('guia',$numberAirWaybill)->update(['status'=> 0]);

            return $data;
    }

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }


}
