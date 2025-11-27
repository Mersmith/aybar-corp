<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <style>
        body {
            font-family: sans-serif;
            font-size: 12px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 10px;
        }

        th,
        td {
            border: 1px solid #444;
            padding: 5px;
            text-align: left;
        }

        th {
            background: #eee;
        }

        h2 {
            text-align: center;
        }
    </style>
</head>

<body>

    <h2>CRONOGRAMA DE PAGOS</h2>

    <table>
        <tr>
            <td>Proyecto</td>
            <td colspan="3">{{ $lote['descripcion'] }}</td>
        </tr>
        <tr>
            <td>Manzana - Lote</td>
            <td>{{ $lote['id_manzana'] }} - {{ $lote['id_lote'] }}</td>
        </tr>
        <tr>
            <td>Cliente</td>
            <td colspan="3">{{ $lote['apellidos_nombres'] }}</td>
        </tr>
        <tr>
            <td>DNI</td>
            <td>{{ $lote['nit'] }}</td>
        </tr>
        <tr>
            <td>ID Recaudo</td>
            <td>{{ $lote['id_recaudo'] }}</td>
        </tr>
    </table>

    <table>
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

</body>

</html>
