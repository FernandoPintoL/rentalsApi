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
        Schema::create('inmueble_accesorios', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('inmueble_id');
            $table->unsignedBigInteger('accesorio_id');
            $table->double('cantidad')->default(1);
            $table->timestamps();
            $table->foreign('inmueble_id')->references('id')->on('inmuebles')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('accesorio_id')->references('id')->on('accesorios')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('inmueble_accesorios');
    }
};
