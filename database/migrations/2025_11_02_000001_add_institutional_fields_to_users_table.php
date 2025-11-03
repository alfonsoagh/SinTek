<?php
/**
 * Empresa: CETAM
 * Proyecto: ST
 * Archivo: 2025_11_02_000001_add_institutional_fields_to_users_table.php
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
        Schema::table('users', function (Blueprint $table) {
            if (!Schema::hasColumn('users', 'curp')) {
                $table->string('curp', 18)->nullable()->unique()->after('gender');
            }
            if (!Schema::hasColumn('users', 'budget_keys')) {
                $table->text('budget_keys')->nullable()->after('curp');
            }
            if (!Schema::hasColumn('users', 'approved_at')) {
                $table->timestamp('approved_at')->nullable()->after('email_verified_at');
            }
        });
    }

    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            if (Schema::hasColumn('users', 'approved_at')) {
                $table->dropColumn('approved_at');
            }
            if (Schema::hasColumn('users', 'budget_keys')) {
                $table->dropColumn('budget_keys');
            }
            if (Schema::hasColumn('users', 'curp')) {
                $table->dropColumn('curp');
            }
        });
    }
};
