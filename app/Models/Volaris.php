<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Volaris extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function user(){
        return $this->belongsToMany(User::class);
    }
}
