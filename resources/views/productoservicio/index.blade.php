@extends('layouts.app')

@section('content')
    <div class="page-title">
        <div class="title_left">
            <h3>Productos y Servicios</h3>
        </div>
    </div>
    <div class="clearfix"></div>

    <div class="row">
        <div class="col-md-12 col-sm-12 ">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Listado</h2>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Código</th>
                                <th>Producto/Servicio</th>
                                <th>Descripción</th>
                                <th>Precio Unitario</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($productos_servicios as $item)
                            <tr>
                                <td>{{ $item->codigo }}</td>
                                <td>{{ $item->producto_servicio }}</td>
                                <td>{{ $item->descripcion }}</td>
                                <td>{{ $item->precio_bruto_unitario }}</td>
                                <td>
                                    {{-- <a href="{{ route('productoservicio.edit', $item->id) }}" class="btn btn-primary">Editar</a> --}}
                                    {{-- <form action="{{ route('productoservicio.destroy', $item->id) }}" method="POST" style="display:inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">Eliminar</button>
                                    </form> --}}
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
