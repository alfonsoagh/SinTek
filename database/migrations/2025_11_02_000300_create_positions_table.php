<?php
/**
 * Empresa: CETAM
 * Proyecto: ST
 * Archivo: 2025_11_02_000300_create_positions_table.php
 * Fecha de creación: 02/11/25
 * Realizado por: Alfonso Angel García Hernández
 * Validado por: Alfonso Angel García Hernández
 */

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('positions', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('worker_id');
            $table->foreign('worker_id')->references('id')->on('workers')->cascadeOnDelete();
            $table->string('clave_presupuestal');
            $table->string('plaza')->nullable();
            $table->string('puesto')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('positions');
    }
};
