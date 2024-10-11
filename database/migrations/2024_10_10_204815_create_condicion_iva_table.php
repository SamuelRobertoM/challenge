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
        Schema::create('condicion_iva', function (Blueprint $table) {
            $table->id();
            // crear codigo como smallint
            $table->smallInteger('codigo')->unique();
            // crear condicion iva como character varying
            $table->string('condicion_iva');
            // crear allicuota como numeric(10,3)
            $table->decimal('alicuota', 10, 3);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('condicion_iva');
    }
};
