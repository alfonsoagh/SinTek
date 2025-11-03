<?php
/**
 * Empresa: CETAM
 * Proyecto: ST
 * Archivo: 2025_11_02_000200_create_workers_table.php
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
        if (!Schema::hasTable('workers')) {
            Schema::create('workers', function (Blueprint $table) {
                $table->increments('id');
                $table->unsignedInteger('user_id');
                $table->foreign('user_id')->references('id')->on('users')->cascadeOnDelete();
                $table->string('curp', 18)->unique();
                $table->string('sexo', 1); // M/F
                $table->string('telefono')->nullable();
                $table->string('direccion')->nullable();
                $table->timestamps();
            });
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('workers');
    }
};
