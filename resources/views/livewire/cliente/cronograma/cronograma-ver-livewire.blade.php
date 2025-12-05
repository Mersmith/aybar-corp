<div>
    <div class="cronograma_contenedor">
        <div class="tabla_contenido">
            <div class="contenedor_tabla">
                <table class="tabla_info">

                    <tr>
                        <td class="label">Proyecto</td>
                        <td class="valor grande" colspan="3">{{ $lote['descripcion'] }}</td>
                    </tr>

                    <tr>
                        <td class="label">Etapa</td>
                        <td class="valor">{{ $lote['id_etapa'] }}</td>

                        <td class="label">Manzana - Lote</td>
                        <td class="valor">{{ $lote['id_manzana'] }} - {{ $lote['id_lote'] }}</td>
                    </tr>

                    <tr>
                        <td class="label">Nombre Cliente</td>
                        <td class="valor" colspan="3">{{ $lote['apellidos_nombres'] }}</td>
                    </tr>

                    <tr>
                        <td class="label">DNI</td>
                        <td class="valor">{{ $lote['nit'] }}</td>

                        <td class="label">ID Recaudo</td>
                        <td class="valor">{{ $lote['id_recaudo'] }}</td>
                    </tr>

                    <tr>
                        <td class="label">N° Cuotas</td>
                        <td class="valor">{{ $lote['nro_cuotas'] }}</td>

                        <td class="label">ID Proyecto</td>
                        <td class="valor">{{ $lote['id_proyecto'] }}</td>
                    </tr>

                </table>
            </div>
        </div>

        <!-- TABLA DETALLE DsEL CRONOGRAMA -->
        <div class="tabla_contenido">
            <div class="contenedor_tabla">
                <table class="tabla_detalle">
                    <thead>
                        <tr>
                            <th>Nro</th>
                            <th>Fecha Venc.</th>
                            <th>Cuota</th>
                            <th>Mto. Amortizado</th>
                            <th>Saldo</th>
                            <th>Estado</th>
                            <th>Evidencia</th>
                            <th>Boleta</th>
                            <th>Letra</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach ($cronograma as $item)
                        <tr>
                            <td>{{ $item['cuota'] }}</td>
                            <td>{{ $item['fec_vencimiento'] }}</td>
                            <td>S/ {{ number_format($item['monto'], 2) }}</td>
                            <td>S/ {{ number_format($item['amortizacion'], 2) }}</td>
                            <td>S/ {{ number_format($item['saldo'], 2) }}</td>
                            <td>{{ $item['estado'] }}</td>
                            <td>
                                <button wire:click="seleccionarCuota({{ json_encode($item) }})"
                                    class="g_boton g_boton_empresa_secundario">
                                    <i class="fa-solid fa-image"></i> Subir evidencia
                                </button>
                            </td>
                            <td></td>
                            <td></td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    @if ($cuota)
    <div class="g_modal">
        <div class="modal_contenedor">
            <div class="modal_cerrar">
                <button wire:click="cerrarModalEvidenciaPago"><i class="fa-solid fa-xmark"></i></button>
            </div>

            <div class="modal_cuerpo">
                @livewire('web.open-ai.procesar-imagen-livewire', ['cuota' => $cuota, 'lote' => $lote], key('cuota_' .
                $cuota['codigo']))
            </div>
        </div>
    </div>
    @endif
</div>