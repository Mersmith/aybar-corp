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
                    @elseif (empty($cliente_lotes))
                        <tr>
                            <td colspan="5" style="text-align: center; padding: 20px;">
                                No se encontraron lotes para esta razón social.
                            </td>
                        </tr>
                    @else
                        @foreach ($cliente_lotes as $lote)
                            <tr>
                                <td>{{ $lote['razon_social'] }}</td>
                                <td>{{ $lote['descripcion'] }}</td>
                                <td>{{ $lote['id_manzana'] }}</td>
                                <td>{{ $lote['id_lote'] }}</td>

                                <td class="botones">
                                    <a href="{{ route('cliente.lote.cronograma.ver', [
                                        'id_empresa' => $lote['id_empresa'],
                                        'id_cliente' => $lote['id_cliente'],
                                        'id_proyecto' => $lote['id_proyecto'],
                                        'id_etapa' => $lote['id_etapa'],
                                        'id_manzana' => $lote['id_manzana'],
                                        'id_lote' => $lote['id_lote'],
                                    ]) }}"
                                        class="boton boton_activo">
                                        <i class="fas fa-calendar-alt"></i> Cronograma
                                    </a>

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


</div>
