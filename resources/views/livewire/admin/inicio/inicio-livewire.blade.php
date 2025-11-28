@section('tituloPagina', 'Mi perfil')

<div class="g_gap_pagina">
    <!-- CABECERA -->
    <div class="g_panel cabecera_titulo_pagina">
        <h2>Mi perfil</h2>
        <div class="cabecera_titulo_botones">
            <a href="{{ route('admin.home') }}" class="g_boton g_boton_light">
                Inicio <i class="fa-solid fa-house"></i></a>
        </div>
    </div>

    <!-- FORMULARIO -->
    <div class="formulario">
        <div class="g_fila">
            <div class="g_columna_8 g_gap_pagina">
                <div class="g_panel">
                    <h4 class="g_panel_titulo">General</h4>

                    <div class="g_fila">
                        <div class="g_margin_bottom_10 g_columna_6">
                            <label for="name">Nombres completos <span class="obligatorio"><i
                                        class="fa-solid fa-asterisk"></i></span></label>
                            <input type="text" id="name" wire:model.live="name" required>
                            @error('name')
                            <p class="mensaje_error">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="g_margin_bottom_10 g_columna_6">
                            <label>Email</label>
                            <input type="text" disabled value="{{ $usuario->email }}">
                        </div>
                    </div>

                    <div class="">
                        <div class="formulario_botones">
                            <button wire:click="actualizarDatos" class="guardar" wire:loading.attr="disabled"
                                wire:target="actualizarDatos">
                                <span wire:loading.remove wire:target="actualizarDatos">Actualizar</span>
                                <span wire:loading wire:target="actualizarDatos">Actualizando...</span>
                            </button>
                        </div>
                    </div>
                </div>

                @if ($areasUsuario->count())
                <div class="g_panel">
                    <h4 class="g_panel_titulo">Areas</h4>

                    <table class="tabla_eliminar">
                        <thead>
                            <tr>
                                <th>N°</th>
                                <th>Area</th>
                                <th>Fecha</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($areasUsuario as $index => $item)
                            <tr>
                                <td>{{ $index + 1}}</td>
                                <td>{{ $item->nombre }} </td>
                                <td> {{ optional($item->pivot?->created_at)->format('d/m/Y H:i') ?? '—' }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                @endif
            </div>
        </div>
    </div>
</div>