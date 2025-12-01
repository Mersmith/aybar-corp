<div>
    <div class="cronograma_contenedor">

        <h2 class="titulo">CRONOGRAMA DE PAGOS COBRANZAS</h2>

        <!-- TABLA PRINCIPAL DE DATOS -->
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

        <!-- TABLA DETALLE DsEL CRONOGRAMA -->
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
                        <button wire:click="seleccionarLote('{{ $item['codigo'] }}')">
                            Subir evidencia
                        </button>
                    </td>
                    <td></td>
                    <td></td>
                </tr>
                @endforeach
            </tbody>
        </table>


    </div>

    @if ($codigo_lote)
    @livewire('web.open-ai.procesar-imagen-livewire', ['codigo_lote' => $codigo_lote])
    @endif
</div>