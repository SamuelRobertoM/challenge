@extends('layouts.app')

@section('content')
    <div class="page-title">
        <div class="title_left">
            <h3>Productos y Servicios</h3>
        </div>
    </div>
    {{-- boton volver --}}
    <a href="{{ route('productos-servicios.index') }}" class="btn btn-primary">Volver</a>
    {{-- hacer un show de productos/servicios --}}
    <div class="clearfix"></div>
    <div class="row">
        <div class="col-md-12 col-sm-12 ">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Producto/Servicio</h2>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Nombre</th>
                                    <th>Descripción</th>
                                    <th>Precio Unitario</th>
                                    <th>Código</th>
                                    <th>Tipo</th>
                                    <th>Rubro</th>
                                    <th>Condición de IVA</th>
                                    <th>Unidad de Medida</th>
                                    <th>Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>{{ $producto_servicio->nombre }}</td>
                                    <td>{{ $producto_servicio->descripcion }}</td>
                                    <td>{{ $producto_servicio->precio_bruto_unitario }}</td>
                                    <td>{{ $producto_servicio->codigo }}</td>
                                    <td>{{ $producto_servicio->tipo }}</td>
                                    <td>{{ $producto_servicio->rubro->rubro }}</td>
                                    <td>{{ $producto_servicio->condicion_iva->condicion_iva }}</td>
                                    <td>{{ $producto_servicio->unidad_medida->unidad_medida }}</td>
                                    <td>
                                        <a onclick="$('#modalEditarProductoServicio').modal('show')" class="btn btn-info btn-sm" title="Editar producto/servicio">
                                            <i class="fas fa-pencil-alt"></i>
                                        </a>
                                        <form action="{{ route('producto-servicio.destroy', $producto_servicio->id) }}" method="POST" style="display:inline;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm" 
                                                data-toggle="tooltip"  title="Eliminar"><i class="fas fa-trash-alt"></i>
                                            </button>
                                        </form>                                    
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        @include('productoservicio.modales.editar_producto_servicio')
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
