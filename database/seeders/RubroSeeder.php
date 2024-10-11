<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Rubro;


class RubroSeeder extends Seeder
{
    public function run()
    {
        $rubros = [
            'Electrónica',
            'Ropa',
            'Alimentos',
            'Muebles',
            'Libros',
            'Automóviles',
            'Juguetes',
            'Salud',
            'Belleza',
            'Deportes'
        ];

        foreach ($rubros as $rubro) {
            Rubro::create(['rubro' => $rubro]);
        }
    }
}
