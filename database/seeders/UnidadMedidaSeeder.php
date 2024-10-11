<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\UnidadMedida;

class UnidadMedidaSeeder extends Seeder
{
    public function run()
    {
        $unidadesMedida = [
            ['codigo' => 'kg', 'unidad_medida' => 'Kilogramos'],
            ['codigo' => 'lt', 'unidad_medida' => 'Litros'],
            ['codigo' => 'cm', 'unidad_medida' => 'Centímetros'],
            ['codigo' => 'm', 'unidad_medida' => 'Metros'],
            ['codigo' => 'pz', 'unidad_medida' => 'Piezas'],
            ['codigo' => 'hr', 'unidad_medida' => 'Horas'],
            ['codigo' => 'mb', 'unidad_medida' => 'Megabytes'],
            ['codigo' => 'gb', 'unidad_medida' => 'Gigabytes'],
            ['codigo' => 'u', 'unidad_medida' => 'Unidades'],
            ['codigo' => 'tb', 'unidad_medida' => 'Terabytes']
        ];

        foreach ($unidadesMedida as $unidad) {
            UnidadMedida::create($unidad);
        }
    }
}

