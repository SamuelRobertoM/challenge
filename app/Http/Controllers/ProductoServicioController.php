<?php

namespace App\Http\Controllers;

use App\Models\CondicionIva;
use App\Models\ProductoServicio;
use App\Models\Rubro;
use App\Models\UnidadMedida;
use Illuminate\Http\Request;

class ProductoServicioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $productos_servicios = ProductoServicio::all();
        return view('productoservicio.index', compact('productos_servicios'));
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // enviar los rubros, para que el usuario pueda seleccionar uno
        $rubros = Rubro::all();
        // enviar la condicion iva, unidad de medida
        $condiciones_iva = CondicionIva::all();
        $unidades_medida = UnidadMedida::all();

        return view('productos_servicios.create', compact('rubros', 'condiciones_iva', 'unidades_medida'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // necesito estas validaciones para que el usuario no pueda enviar datos que no quiero
        // 1. Debe validarse que el Código No sea nulo, es Obligatorio.
        // 2. Debe validarse que el Código no se repita.
        // 3. Debe validarse que el Código solo acepte valores numéricos y/o letras.
        // 4. En Producto / Servicio no debe aceptar valores nulos. Es Obligatorio.

        $request->validate([
            'nombre' => 'required',
            'tipo' => 'required',
            'codigo' => 'required|numeric|unique:producto_servicio',
            'descripcion' => 'required',
            'precio_bruto_unitario' => 'required|numeric',
            'id_rubro' => 'required|numeric',
            'id_unidad_medida' => 'required|numeric',
            'id_condicion_iva' => 'required|numeric',
        ]);

        ProductoServicio::create($request->all());
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $producto_servicio = ProductoServicio::find($id);
        return view('productos_servicios.show', compact('producto_servicio'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $producto_servicio = ProductoServicio::find($id);
        $rubros = Rubro::all();
        $condiciones_iva = CondicionIva::all();
        $unidades_medida = UnidadMedida::all();

        return view('productos_servicios.edit', compact('producto_servicio', 'rubros', 'condiciones_iva', 'unidades_medida'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $producto_servicio = ProductoServicio::find($id);

        $request->validate([
            'nombre' => 'required',
            'tipo' => 'required',
            'codigo' => 'required|numeric|unique:producto_servicio,codigo,' . $producto_servicio->id,
            'descripcion' => 'required',
            'precio_bruto_unitario' => 'required|numeric',
            'id_rubro' => 'required|numeric',
            'id_unidad_medida' => 'required|numeric',
            'id_condicion_iva' => 'required|numeric',
        ]);

        $producto_servicio->update($request->all());
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $producto_servicio = ProductoServicio::find($id);
        $producto_servicio->delete();
    }
}
