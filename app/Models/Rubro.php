<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rubro extends Model
{
    protected $table = 'rubro';

    protected $fillable = ['rubro'];

    // Relación uno a muchos con ProductoServicio
    public function productosServicios()
    {
        return $this->hasMany(ProductoServicio::class, 'id_rubro');
    }

    public function getNombreAttribute()
    {
        return $this->rubro;
    }
}

