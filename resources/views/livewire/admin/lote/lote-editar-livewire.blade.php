@section('tituloPagina', 'Editar lote')
@section('anchoPantalla', '100%')

<div class="g_gap_pagina">
    <!-- CABECERA -->
    <div class="g_panel cabecera_titulo_pagina">
        <h2>Editar lote</h2>

        <div class="cabecera_titulo_botones">
            <a href="{{ route('admin.lote.vista.todo') }}" class="g_boton g_boton_light">
                Inicio <i class="fa-solid fa-house"></i>
            </a>

            <a href="{{ route('admin.lote.vista.crear') }}" class="g_boton g_boton_primary">
                Crear <i class="fa-solid fa-square-plus"></i></a>

            <button type="button" class="g_boton g_boton_danger" onclick="alertaEliminarLote()">
                Eliminar <i class="fa-solid fa-trash-can"></i>
            </button>


            <a href="{{ route('admin.lote.vista.todo') }}" class="g_boton g_boton_darkt">
                <i class="fa-solid fa-arrow-left"></i> Regresar
            </a>
        </div>
    </div>

    <!-- FORMULARIO -->
    <form wire:submit.prevent="store" class="formulario">
        <div class="g_fila">
            <!-- IZQUIERDA -->
            <div class="g_columna_8 g_gap_pagina">
                <div class="g_panel">
                    <h4 class="g_panel_titulo">General</h4>

                    <div class="g_fila">
                        <div class="g_margin_bottom_10 g_columna_6">
                            <label for="proyecto_id">Proyecto <span class="obligatorio"><i
                                        class="fa-solid fa-asterisk"></i></span></label>
                            <select id="proyecto_id" name="proyecto_id" wire:model="proyecto_id" required>
                                <option value="" selected disabled>Seleccionar un proyecto</option>
                                @if ($proyectos)
                                @foreach ($proyectos as $proyecto)
                                <option value="{{ $proyecto->id }}">{{ $proyecto->nombre }}</option>
                                @endforeach
                                @endif
                            </select>
                            @error('proyecto_id')
                            <p class="mensaje_error">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="g_margin_bottom_10 g_columna_6">
                            <label for="numero_lote">Número lote <span class="obligatorio"><i
                                        class="fa-solid fa-asterisk"></i></span></label>
                            <input type="text" id="numero_lote" wire:model.live="numero_lote">
                            @error('numero_lote')
                            <p class="mensaje_error">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>

                    <div class="g_fila">
                        <div class="g_margin_bottom_10 g_columna_6">
                            <label for="manzana">Manzana <span class="obligatorio"><i
                                        class="fa-solid fa-asterisk"></i></span></label>
                            <input type="text" id="manzana" wire:model.live="manzana">
                            @error('manzana')
                            <p class="mensaje_error">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="g_margin_bottom_10 g_columna_6">
                            <label for="area">Área <span class="obligatorio"><i
                                        class="fa-solid fa-asterisk"></i></span></label>
                            <input type="number" step="0.01" id="area" wire:model.live="area">
                            @error('area')
                            <p class="mensaje_error">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                </div>
            </div>

            <!-- DERECHA -->
            <div class="g_columna_4 g_gap_pagina g_columna_invertir">
                <div class="g_panel">
                </div>
            </div>
        </div>

        <div class="g_margin_top_20">
            <div class="formulario_botones">
                <button wire:click="store" class="guardar" wire:loading.attr="disabled" wire:target="store">
                    <span wire:loading.remove wire:target="store">Actualizar</span>
                    <span wire:loading wire:target="store">Actualizando...</span>
                </button>

                <a href="{{ route('admin.lote.vista.todo') }}" class="cancelar">Cancelar</a>
            </div>
        </div>

    </form>
    @push('script')
    <script>
        function init_select2(){
        let ctr = $('#proyecto_id');
        ctr.select2();
    }

    $(document).ready(function (){
        init_select2();
        $('#proyecto_id').on("change", function (e){
            Livewire.dispatch('selectLoteProyectoEditar', [$(this).val()]);
        });
    });

    Livewire.on("selectActualizarLoteProyectoEditar", function (){
        setTimeout(init_select2, 0);
    });
    </script>
    @endpush

    <script>
        function alertaEliminarLote() {
            Swal.fire({
                title: '¿Quieres eliminar?',
                text: "No podrás recuperarlo.",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: '¡Sí, eliminar!',
                cancelButtonText: 'Cancelar'
            }).then((result) => {
                if (result.isConfirmed) {
                    Livewire.dispatch('eliminarLoteOn');

                    Swal.fire(
                        '¡Eliminado!',
                        'Eliminaste correctamente.',
                        'success'
                    )
                }
            });
        }
    </script>
</div>