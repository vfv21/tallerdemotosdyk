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
 Schema::create('citas', function (Blueprint $table) {
 $table->id();
 $table->string('fecha',50);
 $table->string('datos_moto',150)->nullable(); //El campo puede ser nulo
 $table->foreignId('id_servicio')->constrained('servicios');
 $table->timestamps();
 });
 }

   
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('citas');
    }
};
