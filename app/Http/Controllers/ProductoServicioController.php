<?php

namespace App\Http\Controllers;

use App\Models\CondicionIva;
use App\Models\ProductoServicio;
use App\Models\Rubro;
use App\Models\UnidadMedida;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class ProductoServicioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $productos_servicios = ProductoServicio::all();
        $rubros = Rubro::select('id', 'rubro')->get();
        $condiciones_iva = CondicionIva::select('id', 'condicion_iva')->get();
        $unidades_medida = UnidadMedida::select('id', 'unidad_medida')->get();
        return view('productoservicio.index', compact('productos_servicios', 'rubros', 'condiciones_iva', 'unidades_medida'));
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required',
            'tipo' => 'required',
            'codigo' => 'required|alpha_num|unique:producto_servicio',
            'descripcion' => 'required',
            'precio_bruto_unitario' => 'required|numeric',
            'id_rubro' => 'required|numeric',
            'id_unidad_medida' => 'required|numeric',
            'id_condicion_iva' => 'required|numeric',
        ]);

        try {
            $producto = new ProductoServicio();
            $producto->nombre = $request->nombre;
            $producto->tipo = $request->tipo;
            $producto->codigo = $request->codigo;
            $producto->descripcion = $request->descripcion;
            $producto->precio_bruto_unitario = $request->precio_bruto_unitario;
            $producto->id_rubro = $request->id_rubro;
            $producto->id_unidad_medida = $request->id_unidad_medida;
            $producto->id_condicion_iva = $request->id_condicion_iva;
            $producto->save();
            return redirect()->route('productos-servicios.index');
        } catch (QueryException $e) {
            Log::error("Error al guardar el producto/servicio: " . $e->getMessage());
            return redirect()->back()->with('error', 'Error al guardar el producto/servicio.');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $producto_servicio = ProductoServicio::with(['rubro', 'condicion_iva', 'unidad_medida'])->find($id);
        $rubros = Rubro::select('id', 'rubro')->get();
        $condiciones_iva = CondicionIva::select('id', 'condicion_iva')->get();
        $unidades_medida = UnidadMedida::select('id', 'unidad_medida')->get();
        return view('productoservicio.show', compact('producto_servicio', 'rubros', 'condiciones_iva', 'unidades_medida'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        // try {
        //     $producto_servicio = ProductoServicio::findOrFail($id);
        //     $rubros = Rubro::all();
        //     $condiciones_iva = CondicionIva::all();
        //     $unidades_medida = UnidadMedida::all();
        //     return view('productoservicio.edit', compact('producto_servicio', 'rubros', 'condiciones_iva', 'unidades_medida'));
        // } catch (ModelNotFoundException $e) {
        //     Log::error("Producto/servicio no encontrado para editar: " . $e->getMessage());
        //     return redirect()->route('productos-servicios.index')->with('error', 'Producto/servicio no encontrado.');
        // } catch (\Exception $e) {
        //     Log::error("Error al mostrar el formulario de edición: " . $e->getMessage());
        //     return redirect()->route('productos-servicios.index')->with('error', 'Error al cargar el formulario de edición.');
        // }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $producto_servicio = ProductoServicio::findOrFail($id);
        $request->validate([
            'nombre' => 'required',
            'tipo' => 'required',
            'codigo' => 'required|alpha_num|unique:producto_servicio,codigo,' . $producto_servicio->id,
            'descripcion' => 'required',
            'precio_bruto_unitario' => 'required|numeric',
            'id_rubro' => 'required|numeric',
            'id_unidad_medida' => 'required|numeric',
            'id_condicion_iva' => 'required|numeric',
        ]);

        try {
            $producto_servicio->nombre = $request->nombre;
            $producto_servicio->tipo = $request->tipo;
            $producto_servicio->codigo = $request->codigo;
            $producto_servicio->descripcion = $request->descripcion;
            $producto_servicio->precio_bruto_unitario = $request->precio_bruto_unitario;
            $producto_servicio->id_rubro = $request->id_rubro;
            $producto_servicio->id_unidad_medida = $request->id_unidad_medida;
            $producto_servicio->id_condicion_iva = $request->id_condicion_iva;
            $producto_servicio->save();
            return redirect()->route('productos-servicios.index');
        } catch (QueryException $e) {
            Log::error("Error al actualizar el producto/servicio: " . $e->getMessage());
            return redirect()->back()->with('error', 'Error al actualizar el producto/servicio.');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try {
            $producto_servicio = ProductoServicio::findOrFail($id);
            $producto_servicio->delete();
            return redirect()->route('productos-servicios.index');
        } catch (ModelNotFoundException $e) {
            Log::error("Error al eliminar el producto/servicio: " . $e->getMessage());
            return redirect()->route('productos-servicios.index')->with('error', 'Producto/servicio no encontrado.');
        } catch (\Exception $e) {
            Log::error("Error al eliminar el producto/servicio: " . $e->getMessage());
            return redirect()->route('productos-servicios.index')->with('error', 'Error al eliminar el producto/servicio.');
        }
    }
}
