<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        DB::table('municipios')->insert([
            ['nombre_municipio' => 'Aguazul', 'id_departamento' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['nombre_municipio' => 'Chámeza', 'id_departamento' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['nombre_municipio' => 'Hato Corozal', 'id_departamento' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['nombre_municipio' => 'La Salina', 'id_departamento' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['nombre_municipio' => 'Maní', 'id_departamento' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['nombre_municipio' => 'Monterrey', 'id_departamento' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['nombre_municipio' => 'Nunchía', 'id_departamento' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['nombre_municipio' => 'Orocué', 'id_departamento' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['nombre_municipio' => 'Paz de Ariporo', 'id_departamento' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['nombre_municipio' => 'Pore', 'id_departamento' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['nombre_municipio' => 'Recetor', 'id_departamento' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['nombre_municipio' => 'Sabanalarga', 'id_departamento' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['nombre_municipio' => 'Sácama', 'id_departamento' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['nombre_municipio' => 'San Luis de Palenque', 'id_departamento' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['nombre_municipio' => 'Támara', 'id_departamento' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['nombre_municipio' => 'Tauramena', 'id_departamento' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['nombre_municipio' => 'Trinidad', 'id_departamento' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['nombre_municipio' => 'Villanueva', 'id_departamento' => 1, 'created_at' => now(), 'updated_at' => now()],
            ['nombre_municipio' => 'Yopal', 'id_departamento' => 1, 'created_at' => now(), 'updated_at' => now()],
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        DB::table('municipios')
            ->where('id_departamento', 1)
            ->delete();
    }
};
