<!-- Modal adjunto-->
<div class="modal fade" id="modalEditarProductoServicio" tabindex="-1" role="dialog" aria-labelledby="modalEditarProductoServicioLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="modalEditarProductoServicioLabel">Modificar Producto/Servicio</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form method="POST"  action="{{route('producto-servicio.update', ['id' => $producto_servicio->id])}}" enctype="multipart/form-data">
          {{csrf_field()}}
          @method('PUT')
          <div class="modal-body">
            <p>Editar un Producto/Servicio</p>
            <div class="form-group">
                {{-- crear input con los campos de producto nombre, Descripcion, Precio unitario, acciones --}}
                <label for="nombre">Nombre</label>
                <input type="text" value="{{$producto_servicio->nombre}}" class="form-control" id="nombre" name="nombre" required>
                <label for="descripcion">Descripción</label>
                <input type="text" value="{{$producto_servicio->descripcion}}" class="form-control" id="descripcion" name="descripcion" required>
                <label for="precio_bruto_unitario">Precio Unitario</label>
                <input type="number" value="{{$producto_servicio->precio_bruto_unitario}}" class="form-control" id="precio_bruto_unitario" name="precio_bruto_unitario" required>
                <label for="codigo">Código</label>
                <input type="text" value="{{$producto_servicio->codigo}}" class="form-control" id="codigo" name="codigo" required>
                <label for="tipo">Tipo</label>

                <!-- Select para unidades de medida -->
                <select name="tipo" id="tipo" class="form-control" required>
                  <option value="" disabled {{ !$producto_servicio->tipo ? 'selected' : '' }}>Selecciona un tipo</option>
                  <option value="Producto" {{ $producto_servicio->tipo === 'Producto' ? 'selected' : '' }}>Producto</option>
                  <option value="Servicio" {{ $producto_servicio->tipo === 'Servicio' ? 'selected' : '' }}>Servicio</option>
              </select>

                <!-- Select para Rubros -->
                <div class="form-group">
                  <label for="rubro">Rubro</label>
                  <select name="id_rubro" id="rubro" class="form-control" required>
                      <option value="" disabled>Selecciona un rubro</option> <!-- Opción por defecto -->
                      @foreach($rubros as $rubro)
                          <option value="{{ $rubro->id }}" {{ $producto_servicio->id_rubro == $rubro->id ? 'selected' : '' }}>
                              {{ $rubro->rubro }}
                          </option>
                      @endforeach
                  </select>
              </div>
              <div class="form-group">
                <label for="condicion_iva">Condición de IVA</label>
                <select name="id_condicion_iva" id="condicion_iva" class="form-control" required>
                    <option value="" disabled>Selecciona una condición de IVA</option>
                    @foreach($condiciones_iva as $condicion)
                        <option value="{{ $condicion->id }}" {{ $producto_servicio->id_condicion_iva == $condicion->id ? 'selected' : '' }}>
                            {{ $condicion->condicion_iva }}
                        </option>
                    @endforeach
                </select>
              </div>
              <!-- Select para Unidades de Medida -->
              <div class="form-group">
                <label for="unidad_medida">Unidad de Medida</label>
                <select name="id_unidad_medida" id="unidad_medida" class="form-control" required>
                    <option value="" disabled>Selecciona una unidad de medida</option>
                    @foreach($unidades_medida as $unidad)
                        <option value="{{ $unidad->id }}" {{ $producto_servicio->id_unidad_medida == $unidad->id ? 'selected' : '' }}>
                            {{ $unidad->unidad_medida }}
                        </option>
                    @endforeach
                </select>
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
            <button type="submit" class="btn btn-primary">Cargar</button>
          </div>
        </form>
      </div>
    </div>
  </div>
  