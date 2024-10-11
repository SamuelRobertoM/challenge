<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CondicionIva extends Model
{
    protected $table = 'condicion_iva';

    // Relación uno a muchos con ProductoServicio
    public function productosServicios()
    {
        return $this->hasMany(ProductoServicio::class, 'id_condicion_iva');
    }
}

