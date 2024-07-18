<?php

namespace App\Filament\Personal\Resources\AviancaResource\Pages;

use App\Filament\Personal\Resources\AviancaResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class CreateAvianca extends CreateRecord
{
    protected static string $resource = AviancaResource::class;

    protected function mutateFormDataBeforeCreate(array $data): array
    {
        $data['user_id'] = Auth::user()->id;
        $data['codigo_agent'] = User::find($data['user_id'])->codigo_agent;

        return $data;
    }
}
