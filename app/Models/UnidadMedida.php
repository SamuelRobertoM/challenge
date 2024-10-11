<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UnidadMedida extends Model
{
    protected $table = 'unidad_medida';

    // Relación uno a muchos con ProductoServicio
    public function productosServicios()
    {
        return $this->hasMany(ProductoServicio::class, 'id_unidad_medida');
    }
}

