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
        Schema::table('users', function (Blueprint $table) {
            $table->foreignId('id_tipo_usuario')
                ->nullable()
                ->after('id_rol')
                ->constrained('tipos_usuario')
                ->nullOnDelete();

            $table->dateTime('fecha_registro')
                ->useCurrent()
                ->after('id_tipo_usuario');

            $table->boolean('estado')
                ->default(true)
                ->after('fecha_registro');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropForeign(['id_municipio']);
            $table->dropForeign(['id_rol']);
            $table->dropForeign(['id_tipo_usuario']);

            $table->dropColumn([
                'telefono',
                'direccion',
                'id_municipio',
                'id_rol',
                'id_tipo_usuario',
                'fecha_registro',
                'estado',
            ]);
        });
    }
};
