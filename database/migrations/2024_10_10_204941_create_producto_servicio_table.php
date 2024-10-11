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
        Schema::create('producto_servicio', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('tipo');
            $table->string('codigo', 20)->unique();
            $table->string('descripcion', 25, 5);
            $table->decimal('precio_bruto_unitario', 30, 2);
            $table->unsignedBigInteger('id_rubro');
            $table->unsignedBigInteger('id_unidad_medida');
            $table->unsignedBigInteger('id_condicion_iva');
            // fks
            $table->foreign('id_rubro')->references('id')->on('rubro');
            $table->foreign('id_unidad_medida')->references('id')->on('unidad_medida');
            $table->foreign('id_condicion_iva')->references('id')->on('condicion_iva');
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('producto_servicio');
    }
};
