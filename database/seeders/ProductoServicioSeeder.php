<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ProductoServicio;

class ProductoServicioSeeder extends Seeder
{
    public function run()
    {
        $productosServicios = [
            ['tipo' => 'P', 'codigo' => '001', 'nombre' => 'Televisor LED', 'descripcion' => 'Televisor LED de 50 pulgadas con resolución 4K', 'id_rubro' => 1, 'id_unidad_medida' => 1, 'id_condicion_iva' => 1, 'precio_bruto_unitario' => 15000.00],
            ['tipo' => 'S', 'codigo' => '002', 'nombre' => 'Reparación de computadora', 'descripcion' => 'Servicio de reparación y mantenimiento de computadoras personales', 'id_rubro' => 2, 'id_unidad_medida' => 6, 'id_condicion_iva' => 2, 'precio_bruto_unitario' => 500.00],
            ['tipo' => 'P', 'codigo' => '003', 'nombre' => 'Silla ergonómica', 'descripcion' => 'Silla ergonómica de oficina con ajuste lumbar y reposabrazos', 'id_rubro' => 3, 'id_unidad_medida' => 5, 'id_condicion_iva' => 1, 'precio_bruto_unitario' => 2500.00],
            ['tipo' => 'S', 'codigo' => '004', 'nombre' => 'Consultoría técnica', 'descripcion' => 'Consultoría técnica especializada para optimización de sistemas informáticos', 'id_rubro' => 4, 'id_unidad_medida' => 6, 'id_condicion_iva' => 3, 'precio_bruto_unitario' => 300.00],
            ['tipo' => 'P', 'codigo' => '005', 'nombre' => 'Laptop', 'descripcion' => 'Laptop de última generación con procesador i7 y 16GB RAM', 'id_rubro' => 1, 'id_unidad_medida' => 1, 'id_condicion_iva' => 1, 'precio_bruto_unitario' => 55000.00],
            ['tipo' => 'S', 'codigo' => '006', 'nombre' => 'Mantenimiento de software', 'descripcion' => 'Servicio de mantenimiento de software empresarial', 'id_rubro' => 4, 'id_unidad_medida' => 6, 'id_condicion_iva' => 2, 'precio_bruto_unitario' => 800.00],
            ['tipo' => 'P', 'codigo' => '007', 'nombre' => 'Impresora láser', 'descripcion' => 'Impresora láser multifuncional de alta velocidad', 'id_rubro' => 5, 'id_unidad_medida' => 5, 'id_condicion_iva' => 1, 'precio_bruto_unitario' => 12000.00],
            ['tipo' => 'S', 'codigo' => '008', 'nombre' => 'Instalación de red', 'descripcion' => 'Servicio de instalación de red corporativa de alta velocidad', 'id_rubro' => 6, 'id_unidad_medida' => 6, 'id_condicion_iva' => 2, 'precio_bruto_unitario' => 400.00],
            ['tipo' => 'P', 'codigo' => '009', 'nombre' => 'Router Wi-Fi', 'descripcion' => 'Router Wi-Fi de alta velocidad con cobertura extendida', 'id_rubro' => 7, 'id_unidad_medida' => 5, 'id_condicion_iva' => 1, 'precio_bruto_unitario' => 4500.00],
            ['tipo' => 'S', 'codigo' => '010', 'nombre' => 'Capacitación en redes', 'descripcion' => 'Capacitación técnica avanzada en redes corporativas', 'id_rubro' => 4, 'id_unidad_medida' => 6, 'id_condicion_iva' => 3, 'precio_bruto_unitario' => 600.00]
        ];

        foreach ($productosServicios as $productoServicio) {
            ProductoServicio::create($productoServicio);
        }
    }
}
