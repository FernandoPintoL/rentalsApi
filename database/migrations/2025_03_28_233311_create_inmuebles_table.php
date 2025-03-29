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
            $table->unsignedBigInteger('propietario_id');
            $table->string('nombre')->unique();
            $table->string('detalle')->unique();
            $table->string('num_habitacion')->default('01');
            $table->string('num_piso')->default('PB');
            $table->double('precio')->default(1);
            $table->boolean('isOcupado')->default(false);
            $table->unsignedBigInteger('accesorio_id')->nullable();
            $table->unsignedBigInteger('tipo_inmueble_id')->nullable();
            $table->timestamps();
            $table->foreign('propietario_id')->references('id')->on('propietarios')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('accesorio_id')->references('id')->on('accesorios')->onDelete('set null')->onUpdate('cascade');
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
