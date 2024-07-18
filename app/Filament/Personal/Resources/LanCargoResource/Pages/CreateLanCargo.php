<?php

namespace App\Filament\Personal\Resources\LanCargoResource\Pages;

use App\Filament\Personal\Resources\LanCargoResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class CreateLanCargo extends CreateRecord
{
    protected static string $resource = LanCargoResource::class;

    protected function mutateFormDataBeforeCreate(array $data): array
    {
        $data['user_id'] = Auth::user()->id;
        $data['codigo_agent'] = User::find($data['user_id'])->codigo_agent;

        return $data;
    }
}
