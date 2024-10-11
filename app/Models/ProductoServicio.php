<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductoServicio extends Model
{
    use HasFactory;

    protected $table = 'producto_servicio';
     
    protected $fillable = [
        'nombre',
        'tipo',
        'codigo',
        'descripcion',
        'precio_bruto_unitario',
        'id_rubro',
        'id_unidad_medida',
        'id_condicion_iva'
    ];

    public function rubro()
    {
        return $this->belongsTo(Rubro::class, 'id_rubro');
    }

    // Relación muchos a uno con UnidadMedida
    public function unidad_medida()
    {
        return $this->belongsTo(UnidadMedida::class, 'id_unidad_medida');
    }

    // Relación muchos a uno con CondicionIva
    public function condicion_iva()
    {
        return $this->belongsTo(CondicionIva::class, 'id_condicion_iva');
    }

    public static function getProductosServicios(){
        return ProductoServicio::all();
    }


}
