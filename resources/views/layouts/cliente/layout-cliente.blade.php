@extends('layouts.web.layout-web')

@section('contenido')
    <div class="layout_cliente">
        <div class="g_centrar_pagina">

            <div class="grid_layout_cliente">
                <aside class="contenedor_nav_links">
                    <div class="g_pading_pagina">
                        <div class="g_gap_pagina r_margin_top_40 r_margin_bottom_40">
                            @include('layouts.cliente.menu')
                        </div>
                    </div>
                </aside>

                <div class="contenido_pagina">
                    <div class="g_pading_pagina">
                        <div class="g_gap_pagina r_margin_top_40 r_margin_bottom_40">
                            @yield('contenidoCliente')
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
