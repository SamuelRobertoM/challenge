<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductoServicio extends Model
{
    use HasFactory;

    protected $table = 'producto_servicio';
     
    protected $fillable = ['tipo','codigo','descripcion'];

    public function rubro()
    {
        return $this->belongsTo(Rubro::class, 'id_rubro');
    }

    // Relación muchos a uno con UnidadMedida
    public function unidadMedida()
    {
        return $this->belongsTo(unidadMedida::class, 'id_unidad_medida');
    }

    // Relación muchos a uno con CondicionIva
    public function condicionIva()
    {
        return $this->belongsTo(CondicionIva::class, 'id_condicion_iva');
    }

    public static function getProductosServicios(){
        return ProductoServicio::all();
    }


}
