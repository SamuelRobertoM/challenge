@extends('layouts.app')

@section('content')
    <div class="page-title">
        <div class="title_left">
            <h3>Productos y Servicios</h3>
        </div>
    </div>
    <br>
    <div class="clearfix"></div>
    {{-- crear nuevo producto --}}
    <div class="row">
        <div class="col-md-12 col-sm-12 ">
            <div class="x_panel">
                <div class="x_title">
                    <h4>Crear nuevo Producto/Servicio</h4>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <form method="POST" action="{{ route('producto-servicio.store') }}">
                        @csrf
                        <div class="form-group">
                            <label for="nombre">Nombre</label>
                            <input type="text" class="form-control" id="nombre" name="nombre" required>
                            <label for="descripcion">Descripción</label>
                            <input type="text" class="form-control" id="descripcion" name="descripcion" required>
                            <label for="precio_bruto_unitario">Precio Unitario</label>
                            <input type="number" class="form-control" id="precio_bruto_unitario" name="precio_bruto_unitario" required>
                            <label for="codigo">Código</label>
                            <input type="text" class="form-control" id="codigo" name="codigo" required>
                            <label for="tipo">Tipo</label>
                            <select name="tipo" id="tipo" class="form-control" required>
                                <option value="" disabled selected>Selecciona un tipo</option>
                                <option value="Producto">Producto</option>
                                <option value="Servicio">Servicio</option>
                            </select>
                            <!-- Select para Rubros -->
                            <div class="form-group">
                                <label for="rubro">Rubro</label>
                                <select name="id_rubro" id="rubro" class="form-control" required>
                                    <option value="" disabled selected>Selecciona un rubro</option>
                                    @foreach($rubros as $rubro)
                                        <option value="{{ $rubro->id }}">{{ $rubro->rubro }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <!-- Select para Condiciones de IVA -->
                            <div class="form-group">
                                <label for="condicion_iva">Condición de IVA</label>
                                <select name="id_condicion_iva" id="condicion_iva" class="form-control" required>
                                    <option value="" disabled selected>Selecciona una condición de IVA</option>
                                    @foreach($condiciones_iva as $condicion)
                                        <option value="{{ $condicion->id }}">{{ $condicion->condicion_iva }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <!-- Select para Unidades de Medida -->
                            <div class="form-group">
                                <label for="unidad_medida">Unidad de Medida</label>
                                <select name="id_unidad_medida" id="unidad_medida" class="form-control" required>
                                    <option value="" disabled selected>Selecciona una unidad de medida</option>
                                    @foreach($unidades_medida as $unidad)
                                        <option value="{{ $unidad->id }}">{{ $unidad->unidad_medida }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Crear</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12 col-sm-12 ">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Listado</h2>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>Código</th>
                                    <th>Tipo</th>
                                    <th>Producto/Servicio</th>
                                    <th>Descripción</th>
                                    <th>Precio Unitario</th>
                                    <th>Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($productos_servicios as $producto_servicio)
                                <tr>
                                    <td>{{ $producto_servicio->codigo }}</td>
                                    <td>{{ $producto_servicio->tipo }}</td>
                                    <td>{{ $producto_servicio->nombre }}</td>
                                    <td>{{ $producto_servicio->descripcion }}</td>
                                    <td>{{ $producto_servicio->precio_bruto_unitario }}</td>
                                    <td class="text-rigth">
                                        <a href="{{ route('producto-servicio.show', $producto_servicio->id) }}" class="btn btn-info btn-sm" data-toggle="tooltip" 
                                            title="Ver producto/servicio"><i class="fas fa-eye"></i>
                                        </a>
                                        {{-- Botón "Eliminar" --}}
                                        <form action="{{ route('producto-servicio.destroy', $producto_servicio->id) }}" method="POST" style="display:inline;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm" 
                                                data-toggle="tooltip"  title="Eliminar"><i class="fas fa-trash-alt"></i>
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('styles')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css">
@endsection
@section('scripts')
    <script>
        $(document).ready(function() {
            $('.table').DataTable();
        });
    </script>
