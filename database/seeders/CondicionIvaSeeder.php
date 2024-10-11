<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\CondicionIva;

class CondicionIvaSeeder extends Seeder
{
    public function run()
    {
        $condicionesIva = [
            ['codigo' => 1, 'condicion_iva' => 'Responsable Inscripto', 'alicuota' => 21.00],
            ['codigo' => 2, 'condicion_iva' => 'Monotributo', 'alicuota' => 0.00],
            ['codigo' => 3, 'condicion_iva' => 'Exento', 'alicuota' => 0.00],
            ['codigo' => 4, 'condicion_iva' => 'No Responsable', 'alicuota' => 0.00],
            ['codigo' => 5, 'condicion_iva' => 'Consumo Final', 'alicuota' => 21.00],
            ['codigo' => 6, 'condicion_iva' => 'No Inscripto', 'alicuota' => 0.00],
            ['codigo' => 7, 'condicion_iva' => 'Exportación', 'alicuota' => 0.00],
            ['codigo' => 8, 'condicion_iva' => 'Régimen Simplificado', 'alicuota' => 0.00],
            ['codigo' => 9, 'condicion_iva' => 'Pequeño Contribuyente', 'alicuota' => 0.00],
            ['codigo' => 10, 'condicion_iva' => 'Régimen Especial', 'alicuota' => 10.50]
        ];

        foreach ($condicionesIva as $condicion) {
            CondicionIva::create($condicion);
        }
    }
}

