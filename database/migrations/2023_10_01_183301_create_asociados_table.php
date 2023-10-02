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
        Schema::create('asociados', function (Blueprint $table) {
            $table->increments('id');
            $table->string('primer_nombre');
            $table->string('segundo_nombre');
            $table->string('primer_apellido');
            $table->string('segundo_apellido');
            $table->string('dpi');
            $table->string('nit');
            $table->string('telefono');
            $table->unsignedBigInteger('producto_id'); 
            $table->unsignedBigInteger('es_asociado_id'); 
            $table->timestamps();
            $table->foreign('es_asociado_id')
            ->references('id')
            ->on('es_asociados')
            ->onDelete('cascade');
            $table->foreign('producto_id')->references('id')->on('productos'); 
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('asociados');
    }
};
