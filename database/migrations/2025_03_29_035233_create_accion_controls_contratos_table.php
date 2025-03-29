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
        Schema::create('accion_controls_contratos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('accion_control_id');
            $table->unsignedBigInteger('contrato_id');
            $table->string('detalle')->nullable();
            $table->timestamps();
            $table->foreign('accion_control_id')->references('id')->on('acciones_controls')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('contrato_id')->references('id')->on('contratos')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('accion_controls_contratos');
    }
};
