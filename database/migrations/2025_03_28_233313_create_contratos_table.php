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
            $table->unsignedBigInteger('propietario_id');
            $table->unsignedBigInteger('cliente_id');
            $table->unsignedBigInteger('tipo_cliente_id');
            $table->date('fecha_inicio')->default(now());
            $table->date('fecha_fin')->nullable();
            $table->double('monto')->default(0);
            $table->string('blockchain_id')->default('');
            $table->string('detalle')->default('');
            $table->timestamps();
            $table->foreign('inmueble_id')->references('id')->on('inmuebles')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('propietario_id')->references('id')->on('propietarios')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('cliente_id')->references('id')->on('clientes')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('tipo_cliente_id')->references('id')->on('tipo_clientes')->onDelete('cascade')->onUpdate('cascade');
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
