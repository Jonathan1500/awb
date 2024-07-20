<?php

namespace App\Filament\Widgets;

use App\Models\Guias;
use App\Models\User;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;
use Illuminate\Support\Facades\Auth;

class GuiasStats extends BaseWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('AeroMexico Guías Disponibles', $this->AeromexicoGuias(Auth::user())),
            Stat::make('American Airlines Guías Disponibles', $this->AmericanAirlines(Auth::user())),
            Stat::make('Avianca Guías Disponibles', $this->AviancaGuias(Auth::user())),
            Stat::make('Copa Airlines Guías Disponibles', $this->CopaAirlinesGuias(Auth::user())),
            Stat::make('DHL Guías Disponibles', $this->DhlGuias(Auth::user())),
            Stat::make('Lan Cago Guías Disponibles', $this->LanCargoGuias(Auth::user())),
            Stat::make('UPS Cargo Guías Disponibles', $this->UpsGuias(Auth::user())),
            Stat::make('Volaris Guías Disponibles', $this->VolarisGuias(Auth::user())),
        ];
    }

    protected function AeromexicoGuias(User $user){
        $totalGuiasActivas = Guias::where('aereolinea','AEROMEXICO')
        ->where('status',1)->get()->count();

        return $totalGuiasActivas;
    }

    protected function AmericanAirlines(User $user){
        $totalGuiasActivas = Guias::where('aereolinea','UNITED_AIRLINES')
        ->where('status',1)->get()->count();

        return $totalGuiasActivas;
    }

    protected function AviancaGuias(User $user){
        $totalGuiasActivas = Guias::where('aereolinea','AVIANCA')
        ->where('status',1)->get()->count();

        return $totalGuiasActivas;
    }

    protected function CopaAirlinesGuias(User $user){
        $totalGuiasActivas = Guias::where('aereolinea','COPA_AIRLINES')
        ->where('status',1)->get()->count();

        return $totalGuiasActivas;
    }

    protected function DhlGuias(User $user){
        $totalGuiasActivas = Guias::where('aereolinea','DHL')
        ->where('status',1)->get()->count();

        return $totalGuiasActivas;
    }

    protected function LanCargoGuias(User $user){
        $totalGuiasActivas = Guias::where('aereolinea','LAN_CARGO')
        ->where('status',1)->get()->count();

        return $totalGuiasActivas;
    }

    protected function UpsGuias(User $user){
        $totalGuiasActivas = Guias::where('aereolinea','UPS_CARGO')
        ->where('status',1)->get()->count();

        return $totalGuiasActivas;
    }

    protected function VolarisGuias(User $user){
        $totalGuiasActivas = Guias::where('aereolinea','VOLARIS')
        ->where('status',1)->get()->count();

        return $totalGuiasActivas;
    }
}
