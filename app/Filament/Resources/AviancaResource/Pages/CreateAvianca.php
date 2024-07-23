<?php

namespace App\Filament\Resources\AviancaResource\Pages;

use App\Filament\Resources\AviancaResource;
use App\Models\Guias;
use Filament\Actions;
use Filament\Notifications\Notification;
use Filament\Resources\Pages\CreateRecord;
use Illuminate\Validation\ValidationException;

class CreateAvianca extends CreateRecord
{
    protected static string $resource = AviancaResource::class;

    protected function mutateFormDataBeforeCreate(array $data): array
    {



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
