<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AmericanAirlines extends Model
{
    use HasFactory;

    /*protected $fillable = [
        'numero_de_air_waybill',
        'reservation_date',
        'airline_delivery',
        'shipper',
        'consignee',
        'destination',
        'codigo_agent',
        'no_available'
    ];*/

    protected $guarded = [];

    public function user(){
        return $this->belongsToMany(User::class);
    }


}
