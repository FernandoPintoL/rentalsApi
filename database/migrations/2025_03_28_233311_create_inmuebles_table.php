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
        Schema::create('inmuebles', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->string('nombre')->unique();
            $table->string('detalle')->unique();
            $table->string('num_habitacion')->default('01');
            $table->string('num_piso')->default('PB');
            $table->double('precio')->default(1);
            $table->boolean('isOcupado')->default(false);
            $table->unsignedBigInteger('tipo_inmueble_id')->nullable();
            $table->json('accesorios')->nullable();
            $table->json('servicios_basicos')->nullable();
            $table->timestamps();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('tipo_inmueble_id')->references('id')->on('tipo_inmuebles')->onDelete('set null')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('inmuebles');
    }
};
