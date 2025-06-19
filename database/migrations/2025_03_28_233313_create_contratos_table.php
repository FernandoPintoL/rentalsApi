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
        Schema::create('contratos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('inmueble_id');
            $table->unsignedBigInteger('user_id');
            $table->date('fecha_inicio')->default(now());
            $table->date('fecha_fin')->nullable();
            $table->double('monto')->default(0);
            $table->string('detalle')->default('');
            $table->json('acciones_controls')->nullable();
            $table->string('estado')->default('Activo'); // Activo, Inactivo, Cancelado
            $table->timestamps();
            $table->foreign('inmueble_id')->references('id')->on('inmuebles')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contratos');
    }
};
