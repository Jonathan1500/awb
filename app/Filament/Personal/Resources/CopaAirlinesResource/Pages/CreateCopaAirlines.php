<?php

namespace App\Filament\Personal\Resources\CopaAirlinesResource\Pages;

use App\Filament\Personal\Resources\CopaAirlinesResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class CreateCopaAirlines extends CreateRecord
{
    protected static string $resource = CopaAirlinesResource::class;

    protected function mutateFormDataBeforeCreate(array $data): array
    {
        $data['user_id'] = Auth::user()->id;
        $data['codigo_agent'] = User::find($data['user_id'])->codigo_agent;

        return $data;
    }
}
