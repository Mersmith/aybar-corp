<div class="g_modal">
    <div class="modal_contenedor">
        <div class="modal_cerrar">
            <button wire:click="cerrarEditarModal"><i class="fa-solid fa-xmark"></i></button>
        </div>

        <div class="modal_titulo r_titulo_panel">
            <h2>Editar dirección</h2>
        </div>

        <div class="modal_cuerpo g_formulario">
            <div class="r_fila">
                <div class="form_grupo r_columna_6">
                    <label for="recibe_nombres">Nombres de quién recibe</label>
                    <input type="text" wire:model.live="recibe_nombres" id="recibe_nombres" name="recibe_nombres">
                    @error('recibe_nombres')
                        <span class="error">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form_grupo r_columna_6">
                    <label for="recibe_celular">Celular a contactar</label>
                    <input type="text" wire:model.live="recibe_celular" id="recibe_celular" name="recibe_celular">
                    @error('recibe_celular')
                        <span class="error">{{ $message }}</span>
                    @enderror
                </div>
            </div>

            <div class="r_fila">
                <div class="form_grupo r_columna_4">
                    <label for="region_id">Departamento</label>
                    <select wire:model.live="region_id" id="region_id" name="region_id">
                        <option value="">Selecciona</option>
                        @foreach ($departamentos as $departamento)
                            <option value="{{ $departamento->id }}">{{ $departamento->nombre }}</option>
                        @endforeach
                    </select>
                    @error('region_id')
                        <span class="error">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form_grupo r_columna_4">
                    <label for="provincia_id">Provincia</label>
                    <select wire:model.live="provincia_id" id="provincia_id" name="provincia_id">
                        <option value="">Selecciona</option>
                        @foreach ($provincias as $provincia)
                            <option value="{{ $provincia->id }}">{{ $provincia->nombre }}</option>
                        @endforeach
                    </select>
                    @error('provincia_id')
                        <span class="error">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form_grupo r_columna_4">
                    <label for="distrito_id">Distrito</label>
                    <select wire:model.live="distrito_id" id="distrito_id" name="distrito_id">
                        <option value="">Selecciona</option>
                        @foreach ($distritos as $distrito)
                            <option value="{{ $distrito->id }}">{{ $distrito->nombre }}</option>
                        @endforeach
                    </select>
                    @error('distrito_id')
                        <span class="error">{{ $message }}</span>
                    @enderror
                </div>
            </div>

            <div class="r_fila">
                <div class="form_grupo r_columna_6">
                    <label for="direccion">Avenida / Calle / Jirón</label>
                    <input type="text" wire:model.live="direccion" id="direccion" name="direccion">
                    @error('direccion')
                        <span class="error">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form_grupo r_columna_6">
                    <label for="direccion_numero">Número</label>
                    <input type="text" wire:model.live="direccion_numero" id="direccion_numero"
                        name="direccion_numero">
                    @error('direccion_numero')
                        <span class="error">{{ $message }}</span>
                    @enderror
                </div>
            </div>

            <div class="r_fila">
                <div class="form_grupo r_columna_6">
                    <label for="opcional">Dpto. / Interior / Piso / Lote (opcional)</label>
                    <input type="text" wire:model.live="opcional" id="opcional" name="opcional"
                        placeholder="Ejem: Casa 1 piso, lote 15.">
                    @error('opcional')
                        <span class="error">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form_grupo r_columna_6">
                    <label for="codigo_postal">Código postal</label>
                    <input type="text" wire:model.live="codigo_postal" id="codigo_postal" name="codigo_postal">
                    @error('codigo_postal')
                        <span class="error">{{ $message }}</span>
                    @enderror
                </div>
            </div>

            <div class="r_fila">
                <div class="form_grupo r_columna_12">
                    <label for="instrucciones">Instrucción para la entrega (opcional)</label>
                    <textarea id="instrucciones" name="instrucciones" wire:model="instrucciones" rows="3"
                        placeholder="Detalle para el delivery o entrega del producto"></textarea>
                    @error('instrucciones')
                        <span class="error">{{ $message }}</span>
                    @enderror
                </div>
            </div>

            <div class="modal_pie">
                <button wire:click="cerrarEditarModal">Cancelar</button>
                <button wire:click="updateDireccion">Guardar Cambios</button>
            </div>
        </div>
    </div>
</div>
