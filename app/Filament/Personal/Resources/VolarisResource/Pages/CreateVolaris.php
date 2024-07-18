<?php

namespace App\Filament\Personal\Resources\VolarisResource\Pages;

use App\Filament\Personal\Resources\VolarisResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class CreateVolaris extends CreateRecord
{
    protected static string $resource = VolarisResource::class;

    protected function mutateFormDataBeforeCreate(array $data): array
    {
        $data['user_id'] = Auth::user()->id;
        $data['codigo_agent'] = User::find($data['user_id'])->codigo_agent;

        return $data;
    }
}
