<?php

namespace App\Filament\Personal\Resources\AmericanAirlinesResource\Pages;

use App\Filament\Personal\Resources\AmericanAirlinesResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class CreateAmericanAirlines extends CreateRecord
{
    protected static string $resource = AmericanAirlinesResource::class;

    protected function mutateFormDataBeforeCreate(array $data): array
    {
        $data['user_id'] = Auth::user()->id;
        $data['codigo_agent'] = User::find($data['user_id'])->codigo_agent;

        return $data;
    }
}
