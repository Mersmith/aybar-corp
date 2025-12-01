<div class="r_gap_pagina">
    <div class="r_panel">
        <div class="r_titulo_panel">
            <h2>Mis lotes</h2>
        </div>

        <div class="g_formulario">
            <div class="r_fila">
                <div class="r_columna_4">
                    <select wire:model.live="razon_social_id" id="razon_social_id" name="razon_social_id">
                        <option value="">Todos</option>
                        @foreach ($razones_sociales as $empresa)
                        <option value="{{ $empresa['id_empresa'] }}">
                            {{ $empresa['razon_social'] }}
                        </option>
                        @endforeach
                    </select>
                </div>
            </div>
        </div>
    </div>

    @if ($lote_select)
    <div class="r_gap_pagina_fila">
        <button wire:click="cerrarCronograma" class="boton_personalizado boton_personalizado_verde">Cerrar</button>
        <button wire:click="descargarPDF" class="boton_personalizado boton_personalizado_amarillo">PDF</button>
    </div>

    @livewire('cliente.cronograma.cronograma-ver-livewire', ['lote' => $lote_select, 'cronograma' => $cronograma],
    key($lote_select['id_recaudo']))
    @endif

    @if (!$lote_select)
    <div class="tabla_contenido">
        <div class="contenedor_tabla">
            <table class="tabla">
                <thead>
                    <tr>
                        <th>Razón social</th>
                        <th>Proyecto</th>
                        <th>Manzana</th>
                        <th>Lote</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @if (empty($razon_social_id))
                    <tr>
                        <td colspan="5" style="text-align: center; padding: 20px;">
                            Selecciona una razón social para ver tus lotes.
                        </td>
                    </tr>
                    @elseif (empty($lotes))
                    <tr>
                        <td colspan="5" style="text-align: center; padding: 20px;">
                            No se encontraron lotes para esta razón social.
                        </td>
                    </tr>
                    @else
                    @foreach ($lotes as $lote)
                    <tr>
                        <td>{{ $lote['razon_social'] }}</td>
                        <td>{{ $lote['descripcion'] }}</td>
                        <td>{{ $lote['id_manzana'] }}</td>
                        <td>{{ $lote['id_lote'] }}</td>

                        <td class="botones">
                            <button class="boton boton_activo" wire:click="seleccionarLote({{ json_encode($lote) }})">
                                <i class="fas fa-calendar-alt"></i> Cronograma
                            </button>

                            <a href="" class="boton boton_guardar">
                                <i class="fas fa-file-invoice-dollar"></i> Estado cuenta
                            </a>
                        </td>
                    </tr>
                    @endforeach
                    @endif
                </tbody>
            </table>
        </div>
    </div>
    @endif
</div>