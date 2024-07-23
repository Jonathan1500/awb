<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('perfect_cargo_logistics', function (Blueprint $table) {
            $table->id();
            $table->string('number_hawb');
            $table->string('numero_de_air_waybill');
            $table->string('airlines');
            $table->date('reservation_date');
            $table->date('airline_delivery');
            $table->string('shipper');
            $table->string('consignee');
            $table->string('destination');
            $table->string('codigo_agent');
            $table->foreignId('user_id');
            $table->string('no_available');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('perfect_cargo_logistics');
    }
};
