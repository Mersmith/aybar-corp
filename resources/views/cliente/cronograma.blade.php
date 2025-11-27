@extends('layouts.cliente.layout-cliente')

@section('titulo', 'Lotes cliente')

@section('contenidoCliente')
    <div class="r_centrar_pagina">
        <div class="r_pading_pagina">
            <div class="r_gap_pagina r_margin_top_40 r_margin_bottom_40">
                <div class="cronograma_contenedor">

                    <h2 class="titulo">CRONOGRAMA DE PAGOS COBRANZAS</h2>

                    <!-- TABLA PRINCIPAL DE DATOS -->
                    <table class="tabla_info">
                        <tr>
                            <td class="label">Proyecto</td>
                            <td class="valor grande" colspan="3">PRAGA VILLAGE</td>
                        </tr>

                        <tr>
                            <td class="label">Etapa</td>
                            <td class="valor">1RA ETAPA</td>

                            <td class="label">Manzana - Lote</td>
                            <td class="valor">A - 8</td>
                        </tr>

                        <tr>
                            <td class="label">Nombre Cliente</td>
                            <td class="valor" colspan="3">VARA LAPA KATIA CAROLINA</td>
                        </tr>

                        <tr>
                            <td class="label">DNI</td>
                            <td class="valor">46268482</td>

                            <td class="label">Fecha Emisión</td>
                            <td class="valor">17/11/2025</td>
                        </tr>

                        <tr>
                            <td class="label">Precio de Venta</td>
                            <td class="valor">S/ 68,770.00</td>

                            <td class="label">Importe Financiado</td>
                            <td class="valor">S/ 23,720.00</td>
                        </tr>

                        <tr>
                            <td class="label">Inicial</td>
                            <td class="valor">S/ 1,900.00</td>

                            <td class="label">Importe Amortizado</td>
                            <td class="valor">S/ 13,056.22</td>
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
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    

                </div>
            </div>
        </div>
    </div>
@endsection
