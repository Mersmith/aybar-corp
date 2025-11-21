<div>
    <div class="r_panel">
        <div class="r_titulo_panel">
            <h2>Mis lotes</h2>
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
                            <th>ID Cronograma</th>
                            <th>ID Estado Cuenta</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($lotes as $lote)
                        <tr>
                            <td>{{ $lote['razon_social'] }}</td>
                            <td>{{ $lote['nombre_proyecto'] }}</td>
                            <td>{{ $lote['manzana'] }}</td>
                            <td>{{ $lote['lote'] }}</td>
                            <td><a href="{{ $lote['cronograma_id'] }}" class="g_link">Ver cronograma</a></td>
                            <td><a href="{{ $lote['estado_cuenta_id'] }}" class="g_link">Ver estado cuenta</a></td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>



    </div>
</div>
</div>