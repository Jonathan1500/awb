<?php

namespace App\Filament\Personal\Resources\DhlResource\Pages;

use App\Filament\Personal\Resources\DhlResource;
use App\Models\Guias;
use App\Models\User;
use Filament\Actions;
use Filament\Notifications\Notification;
use Filament\Resources\Pages\CreateRecord;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class CreateDhl extends CreateRecord
{
    protected static string $resource = DhlResource::class;

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
